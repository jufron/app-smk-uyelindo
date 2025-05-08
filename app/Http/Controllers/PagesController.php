<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Testimoni;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\PengaturanAplikasi;
use App\Models\PertanyaanPendaftaran;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\TestimoniRequest;

class PagesController extends Controller
{

    private function cachePengaturanAplikasi ()
    {
        // * cache 6 hour
        return Cache::remember('pengaturan_aplikasi', 60*60*6, function() {
            return PengaturanAplikasi::all();
        });
    }

    public function index () : View
    {
        // * cache 6 hor
        $beritaCache = Cache::remember('berita_terbaru', 60*60*6, function() {
            return Berita::with('user:id,name', 'kategory:id,nama')
                    ->where('status', true)
                    ->latest()
                    ->limit(3)
                    ->get();
        });

        // * cache 6 hour
        $testimoniCache = Cache::remember('testimoni_terbaru', 60*60*6, function() {
            return Testimoni::query()->latest()->limit(9)->get();
        });

        return view('frond.index', [
            'berita_terbaru'            => $beritaCache,
            'testimoni_terbaru'         => $testimoniCache,
            'nama_kepala_sekolah'       => $this->cachePengaturanAplikasi()->where('key', 'nama_kepala_sekolah')->first()->value,
            'sambutan_kepala_sekolah'   => $this->cachePengaturanAplikasi()->where('key', 'sambutan_kepala_sekolah')->first()->value,
            'foto_kepala_sekolah'       => $this->cachePengaturanAplikasi()->where('key', 'foto_kepala_sekolah')->first()->value,
        ]);
    }

    public function sejarah () : View
    {

        return view('frond.sejarah');
    }

    public function visiMisi () : View
    {
        return view('frond.visi-misi');
    }

    public function strukturOrganisasi () : View
    {
        return view('frond.struktur-organisasi');
    }

    public function createTestimoni () : View
    {
        return view('frond.testimoni-create');
    }

    public function storeTestimoni (TestimoniRequest $request) : RedirectResponse
    {
        $avatarPath = null;

        if ($request->file('avatar')) {
            $avatarPath = $request->file('avatar')->store('testimoni', 'public');
        }

        $requestData = $request->only('avatar', 'nama_lengkap', 'tahun_lulus', 'pekerjaan', 'content', 'status');
        $requestData['avatar']      = $avatarPath;
        $requestData['status']      = false;

        Testimoni::create($requestData);

        Cache::forget('testimoni_terbaru');
        Cache::forget('daftar_testimoni');

        return redirect()->route('testimoni')->with('success', 'Terima Kasih Sudah Memberikan Pendapat Anda');
    }

    public function berita () : View
    {
        $beritaCache = Cache::remember('daftar_berita', 60*60*6, function() {
            return Berita::with('user:id,name', 'kategory:id,nama')
                    ->where('status', true)
                    ->latest()
                    ->cursorPaginate(10);
        });

        return view('frond.berita', [
            'berita_terbaru'    => $beritaCache
        ]);
    }

    public function findBerita (Berita $berita) : View
    {
        return view('frond.detail-berita', compact('berita'));
    }

    public function jurusan () : View
    {
        return view('frond.jurusan');
    }

    public function galeriFoto () : View
    {
        return view('frond.galeri-foto');
    }

    public function guruDanStaf () : View
    {
        return view('frond.guru-&-staf');
    }

    public function fasilitas () : View
    {
        return view('frond.fasilitas');
    }

    public function testimoni () : View
    {
        $daftarTestimoniCache = Cache::remember('daftar_testimoni', 60*60*6, function() {
            return Testimoni::query()
                        ->latest()
                        ->cursorPaginate(20);
        });

        return view('frond.testimoni', [
            'daftar_testimoni'  => $daftarTestimoniCache
        ]);
    }

    public function siswaPrestasi () : View
    {
        return view('frond.siswa-prestasi');
    }

    public function ppdb () : View
    {
        $pertanyaanPendaftaran = Cache::remember('pertanyaan_pendaftaran', 60*60*6, function() {
            return PertanyaanPendaftaran::query()->get();
        });

        return view('frond.ppdb', [
            'pertanyaan_pendaftaran' => $pertanyaanPendaftaran
        ]);
    }

    public function kontak () : View
    {
        return view('frond.kontak');
    }
}
