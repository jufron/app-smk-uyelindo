<?php

namespace App\Services\PengaturanAplikasiService;

use Illuminate\Http\Request;
use App\Models\PengaturanAplikasi;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Collection;
use App\Services\PengaturanAplikasiService\PengaturanAplikasiServiceServiceInterface;

class PengaturanAplikasiServiceService implements PengaturanAplikasiServiceServiceInterface
{
    private function getAllPengaturanAplikasi(): Collection
    {
        return Cache::remember('pengaturan_aplikasi', now()->addHours(24), function() {
            return PengaturanAplikasi::all();
        });
    }

    public function getPengaturanWhere($query): ?string
    {
        return $this->getAllPengaturanAplikasi()->where('key', $query)->first()->value;
    }

    public function storePengaturanAplikasiUmum (Request $request) : void
    {
        $pengaturanKeys = [
            'sambutan_kepala_sekolah',
            'nama_kepala_sekolah',
            'sejarah',
            'visi_misi',
        ];

        // ? file upload foto kepala sekolah
        if ($request->hasFile('foto_kepala_sekolah')) {
            $foto_kepala_sekolah = $request->file('foto_kepala_sekolah')->store('pengaturan-aplikasi', 'public');
        }
        // ? file upload struktur organisasi
        if ($request->hasFile('struktur_organisasi')) {
            $struktur_organisasi = $request->file('struktur_organisasi')->store('pengaturan-aplikasi', 'public');
        }

        // ? upload file path
        PengaturanAplikasi::updateOrCreate(
            ['key' => 'foto_kepala_sekolah'],
            ['value' => $foto_kepala_sekolah]
        );
        PengaturanAplikasi::updateOrCreate(
            ['key' => 'struktur_organisasi'],
            ['value' => $struktur_organisasi]
        );

        foreach ($pengaturanKeys as $key) {
            PengaturanAplikasi::updateOrCreate(
                ['key' => $key],
                ['value' => $request->$key]
            );
        }
    }

    public function storePengaturanAplikasiKontak (Request $request) : void
    {
        $pengaturanKeys = [
            'email',
            'telepon',
            'telepon_whatsapp',
            'facebook',
            'instagram',
            'youtube',
            'tik_tok'
        ];

        foreach ($pengaturanKeys as $key) {
            PengaturanAplikasi::updateOrCreate(
                ['key' => $key],
                ['value' => $request->$key]
            );
        }
    }

    public function storePengaturanAplikasiPpdb (Request $request)  : void
    {
        $pengaturanKeys = [
            'tanggal_pendaftaran_gelombang_1_awal',
            'tanggal_pendaftaran_gelombang_1_akhir',
            'tanggal_pendaftaran_gelombang_2_awal',
            'tanggal_pendaftaran_gelombang_2_akhir',
            'tanggal_pendaftaran_gelombang_3_awal',
            'tanggal_pendaftaran_gelombang_3_akhir'
        ];
        // ? upload file brosur pendaftaran
        if ($request->hasFile('brosur_pendaftaran')) {
            $brosur_pendaftaran = $request->file('brosur_pendaftaran')->store('pengaturan-aplikasi', 'public');
        }

        // ? upload file path
        PengaturanAplikasi::updateOrCreate(
            ['key' => 'brosur_pendaftaran'],
            ['value' => $brosur_pendaftaran]
        );

        foreach ($pengaturanKeys as $key) {
            PengaturanAplikasi::updateOrCreate(
                ['key' => $key],
                ['value' => $request->$key]
            );
        }
    }
}
