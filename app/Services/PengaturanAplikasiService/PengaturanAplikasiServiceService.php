<?php

namespace App\Services\PengaturanAplikasiService;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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

    public function getPengaturanDateWhere ($query) : ?string
    {
        return $this->getAllPengaturanAplikasi()->where('key', $query)->first()->value
            ? Carbon::parse(
                    $this->getAllPengaturanAplikasi()->where('key', $query)->first()->value
              )->format('d F Y')
            : null;
    }

    private function uploadFile ($request, $key, $path = 'pengaturan-aplikasi')
    {
        if ($request->hasFile($key)) {
            // Get existing file
            $existingSetting = PengaturanAplikasi::where('key', $key)->first();

            // Delete old file if exists
            if ($existingSetting && $existingSetting->value) {
                if (file_exists(storage_path('app/public/' . $existingSetting->value))) {
                    unlink(storage_path('app/public/' . $existingSetting->value));
                }
            }

            // Upload new file
            $file = $request->file($key)->store($path, 'public');
            PengaturanAplikasi::updateOrCreate(
                ['key' => $key],
                ['value' => $file]
            );
        }
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
        $this->uploadFile($request, 'foto_kepala_sekolah');
        $this->uploadFile($request, 'struktur_organisasi');

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
        $this->uploadFile($request, 'brosur_pendaftaran');
        
        PengaturanAplikasi::updateOrCreate(
            ['key' => 'popup_pendaftaran'],
            ['value' => $request->popup_pendaftaran ?? null]
        );

        foreach ($pengaturanKeys as $key) {
            PengaturanAplikasi::updateOrCreate(
                ['key' => $key],
                ['value' => $request->$key]
            );
        }
    }
}
