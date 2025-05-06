<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PengaturanAplikasiPpdbRequest;
use App\Http\Requests\PengaturanAplikasiUmumRequest;
use App\Http\Requests\PengaturanAplikasiKontakRequest;
use App\Services\PengaturanAplikasiService\PengaturanAplikasiServiceServiceInterface;
use Illuminate\Http\RedirectResponse;

class PengaturanAplikasiController extends Controller
{
    public function __construct(
        protected PengaturanAplikasiServiceServiceInterface $pengaturanAplikasiServiceService
    ) {}

    public function index () : View
    {
        return view('dashboard.pengaturan-aplikasi.pengaturan-aplikasi', [
            // ? pengaturan umum
            'sambutan_kepala_sekolah'   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('sambutan_kepala_sekolah'),
            'nama_kepala_sekolah'       => $this->pengaturanAplikasiServiceService->getPengaturanWhere('nama_kepala_sekolah'),
            'foto_kepala_sekolah'       => $this->pengaturanAplikasiServiceService->getPengaturanWhere('foto_kepala_sekolah'),
            'sejarah'                   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('sejarah'),
            'visi_misi'                 => $this->pengaturanAplikasiServiceService->getPengaturanWhere('visi_misi'),
            'struktur_organisasi'       => $this->pengaturanAplikasiServiceService->getPengaturanWhere('struktur_organisasi'),
            //? pengaturan kontak
            'email'                     => $this->pengaturanAplikasiServiceService->getPengaturanWhere('email'),
            'telepon'                   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('telepon'),
            'telepon_whatsapp'          => $this->pengaturanAplikasiServiceService->getPengaturanWhere('telepon_whatsapp'),
            'facebook'                  => $this->pengaturanAplikasiServiceService->getPengaturanWhere('facebook'),
            'instagram'                 => $this->pengaturanAplikasiServiceService->getPengaturanWhere('instagram'),
            'youtube'                   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('youtube'),
            'tik_tok'                   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('tik_tok'),
            //? pengaturan ppdb
            'brosur_pendaftaran'                     => $this->pengaturanAplikasiServiceService->getPengaturanWhere('brosur_pendaftaran'),
            'tanggal_pendaftaran_gelombang_1_awal'   => $this->pengaturanAplikasiServiceService->getPengaturanDateWhere('tanggal_pendaftaran_gelombang_1_awal'),
            'tanggal_pendaftaran_gelombang_1_akhir'  => $this->pengaturanAplikasiServiceService->getPengaturanDateWhere('tanggal_pendaftaran_gelombang_1_akhir'),
            'tanggal_pendaftaran_gelombang_2_awal'   => $this->pengaturanAplikasiServiceService->getPengaturanDateWhere('tanggal_pendaftaran_gelombang_2_awal'),
            'tanggal_pendaftaran_gelombang_2_akhir'  => $this->pengaturanAplikasiServiceService->getPengaturanDateWhere('tanggal_pendaftaran_gelombang_2_akhir'),
            'tanggal_pendaftaran_gelombang_3_awal'   => $this->pengaturanAplikasiServiceService->getPengaturanDateWhere('tanggal_pendaftaran_gelombang_3_awal'),
            'tanggal_pendaftaran_gelombang_3_akhir'  => $this->pengaturanAplikasiServiceService->getPengaturanDateWhere('tanggal_pendaftaran_gelombang_3_akhir'),
        ]);
    }

    public function createUmum () : View
    {
        return view('dashboard.pengaturan-aplikasi.ubah-pengaturan-aplikasi-umum', [
            // ? pengaturan umum
            'sambutan_kepala_sekolah'   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('sambutan_kepala_sekolah'),
            'nama_kepala_sekolah'       => $this->pengaturanAplikasiServiceService->getPengaturanWhere('nama_kepala_sekolah'),
            'foto_kepala_sekolah'       => $this->pengaturanAplikasiServiceService->getPengaturanWhere('foto_kepala_sekolah'),
            'sejarah'                   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('sejarah'),
            'visi_misi'                 => $this->pengaturanAplikasiServiceService->getPengaturanWhere('visi_misi'),
            'struktur_organisasi'       => $this->pengaturanAplikasiServiceService->getPengaturanWhere('struktur_organisasi'),
        ]);
    }

    public function storeUmum (PengaturanAplikasiUmumRequest $request) : RedirectResponse
    {
        $this->pengaturanAplikasiServiceService->storePengaturanAplikasiUmum($request);
        notify()->success('Berhasil Memperbaharui Data');
        return redirect()->route('dashboard.pengaturan-aplikasi.index');
    }

    public function createKontak () : View
    {
        return view('dashboard.pengaturan-aplikasi.ubah-pengaturan-aplikasi-kontak', [
            //? pengaturan kontak
            'email'                     => $this->pengaturanAplikasiServiceService->getPengaturanWhere('email'),
            'telepon'                   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('telepon'),
            'telepon_whatsapp'          => $this->pengaturanAplikasiServiceService->getPengaturanWhere('telepon_whatsapp'),
            'facebook'                  => $this->pengaturanAplikasiServiceService->getPengaturanWhere('facebook'),
            'instagram'                 => $this->pengaturanAplikasiServiceService->getPengaturanWhere('instagram'),
            'youtube'                   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('youtube'),
            'tik_tok'                   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('tik_tok'),
        ]);
    }

    public function storeKontak (PengaturanAplikasiKontakRequest $request) : RedirectResponse
    {
        $this->pengaturanAplikasiServiceService->storePengaturanAplikasiKontak($request);
        notify()->success('Berhasil Memperbaharui Data');
        return redirect()->route('dashboard.pengaturan-aplikasi.index');
    }

    public function createPpdb () : View
    {
        return view('dashboard.pengaturan-aplikasi.ubah-pengaturan-aplikasi-ppdb', [
            'brosur_pendaftaran'                     => $this->pengaturanAplikasiServiceService->getPengaturanWhere('brosur_pendaftaran'),
            'tanggal_pendaftaran_gelombang_1_awal'   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('tanggal_pendaftaran_gelombang_1_awal'),
            'tanggal_pendaftaran_gelombang_1_akhir'  => $this->pengaturanAplikasiServiceService->getPengaturanWhere('tanggal_pendaftaran_gelombang_1_akhir'),
            'tanggal_pendaftaran_gelombang_2_awal'   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('tanggal_pendaftaran_gelombang_2_awal'),
            'tanggal_pendaftaran_gelombang_2_akhir'  => $this->pengaturanAplikasiServiceService->getPengaturanWhere('tanggal_pendaftaran_gelombang_2_akhir'),
            'tanggal_pendaftaran_gelombang_3_awal'   => $this->pengaturanAplikasiServiceService->getPengaturanWhere('tanggal_pendaftaran_gelombang_3_awal'),
            'tanggal_pendaftaran_gelombang_3_akhir'  => $this->pengaturanAplikasiServiceService->getPengaturanWhere('tanggal_pendaftaran_gelombang_3_akhir'),
        ]);
    }

    public function storePpdb (PengaturanAplikasiPpdbRequest $request) : RedirectResponse
    {
        $this->pengaturanAplikasiServiceService->storePengaturanAplikasiPpdb($request);
        notify()->success('Berhasil Memperbaharui Data');
        return redirect()->route('dashboard.pengaturan-aplikasi.index');
    }
}
