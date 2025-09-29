<?php

namespace App\Services\Pages;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PengaturanAplikasi;
use App\Models\PertanyaanPendaftaran;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Database\Eloquent\Collection;
use App\Services\Pages\PagesServiceInterface;

class PagesService implements PagesServiceInterface
{
    private function cachePengaturanAplikasi ()
    {
        // * cache 6 hour
        return Cache::remember('pengaturan_aplikasi', 60*60*6, function() {
            return PengaturanAplikasi::all();
        });
    }

    public function getPengaturanWhere($query): ?string
    {
        return $this->cachePengaturanAplikasi()->where('key', $query)->first()->value;
    }

    public function getPengaturanDateWhere ($query) : ?string
    {
        return $this->cachePengaturanAplikasi()->where('key', $query)->first()->value
            ? Carbon::parse(
                    $this->cachePengaturanAplikasi()->where('key', $query)->first()->value
              )->format('d F Y')
            : null;
    }

    public function getBeritaLatestLimit (int $limit = 3) : Collection
    {
        // * cache 6 hor
        return Cache::remember('berita_terbaru', 60*60*6, function() use ($limit) {
            return Berita::with('user:id,name', 'kategory:id,nama')
                    ->where('status', true)
                    ->latest()
                    ->limit($limit)
                    ->get();
        });
    }

    public function getBeritaLatest () : CursorPaginator
    {
        return Cache::remember('daftar_berita', 60*60*6, function() {
            return Berita::with('user:id,name', 'kategory:id,nama')
                    ->where('status', true)
                    ->latest()
                    ->cursorPaginate(10);
        });
    }

    public function getTestimoniLatestLimit (int $limit = 5) : Collection
    {
        // * cache 6 hour
        return Cache::remember('testimoni_terbaru', 60*60*6, function () use ($limit) {
            return Testimoni::query()->latest()->limit($limit)->get();
        });
    }

    public function getTestimoniLatest () : CursorPaginator
    {
        return Cache::remember('daftar_testimoni', 60*60*6, function() {
            return Testimoni::query()
                        ->latest()
                        ->cursorPaginate(20);
        });
    }

    public function createTestimoni (Request $request) : void
    {
        $avatarPath = null;

        if ($request->file('avatar')) {
            $avatarPath = $request->file('avatar')->store('testimoni', 'public');
        }

        $requestData = $request->only('avatar', 'nama_lengkap', 'tahun_lulus', 'pekerjaan', 'content', 'status');
        $requestData['avatar']      = $avatarPath;
        $requestData['status']      = false;

        Testimoni::create($requestData);
    }

    public function getGaleryFotoLimit (int $limit = 7) : Collection
    {
        return Cache::remember('galery_foto', 60*60*6, function() use ($limit) {
            return Galeri::where('status', true)
                    ->latest()
                    ->limit($limit)
                    ->get();
        });
    }

    public function getGaleryFotoLatest () : CursorPaginator
    {
        return Cache::remember('daftar_galery_foto', 60*60*6, function() {
            return Galeri::where('status', true)
                    ->latest()
                    ->cursorPaginate(12);
        });
    }

    public function getPertanyaanPendaftaranLatest () : Collection
    {
        return Cache::remember('pertanyaan_pendaftaran', 60*60*6, function() {
            return PertanyaanPendaftaran::query()->get();
        });
    }

    public function penerimaanPesertaDidikBaru ($value)
    {
        // * pendaftaran
        $now = now();

        $tanggal_pendaftaran_gelombang_1_awal = $this->getPengaturanWhere('tanggal_pendaftaran_gelombang_1_awal');
        $tanggal_pendaftaran_gelombang_1_akhir = $this->getPengaturanWhere('tanggal_pendaftaran_gelombang_1_akhir');
        $tanggal_pendaftaran_gelombang_2_awal = $this->getPengaturanWhere('tanggal_pendaftaran_gelombang_2_awal');
        $tanggal_pendaftaran_gelombang_2_akhir = $this->getPengaturanWhere('tanggal_pendaftaran_gelombang_2_akhir');
        $tanggal_pendaftaran_gelombang_3_awal = $this->getPengaturanWhere('tanggal_pendaftaran_gelombang_3_awal');
        $tanggal_pendaftaran_gelombang_3_akhir = $this->getPengaturanWhere('tanggal_pendaftaran_gelombang_3_akhir');

        $gelombang1 = $now->between($tanggal_pendaftaran_gelombang_1_awal, $tanggal_pendaftaran_gelombang_1_akhir);
        $gelombang2 = $now->between($tanggal_pendaftaran_gelombang_2_awal, $tanggal_pendaftaran_gelombang_2_akhir);
        $gelombang3 = $now->between($tanggal_pendaftaran_gelombang_3_awal, $tanggal_pendaftaran_gelombang_3_akhir);

        // ? bool cek kapan dibuka pendaftaran
        $pendaftaran_dibuka = $gelombang1 || $gelombang2 || $gelombang3;

        // ? cek sekarang aktif di gelombang pendaftaran berapa
        $gelombang_aktif = null;
        if ($gelombang1) {
            $gelombang_aktif = 1;
        } elseif ($gelombang2) {
            $gelombang_aktif = 2;
        } elseif ($gelombang3) {
            $gelombang_aktif = 3;
        }

        // ? untuk coundDown hitung mundur berapa hari, berapa jam, berapa, menit, dan berapa detik
        $tanggal_berikutnya = collect([
            $tanggal_pendaftaran_gelombang_1_awal,
            $tanggal_pendaftaran_gelombang_2_awal,
            $tanggal_pendaftaran_gelombang_3_awal
        ])->filter(function($tanggal) use ($now) {
            return $now->lt($tanggal); // tanggal di masa depan
        })->sort()->first(); // ambil yang paling dekat

        $allData = [
            'pendaftaran_dibuka'    => $pendaftaran_dibuka,
            'gelombang_aktif'       => $gelombang_aktif,
            'tanggal_berikutnya'    => $tanggal_berikutnya
        ];

        foreach ($allData as $item) {
            if ($value === $item) {
                return $item;
            }
        }

        return null;
    }
}
