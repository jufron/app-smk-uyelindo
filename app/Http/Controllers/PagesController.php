<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Testimoni;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PengaturanAplikasi;
use App\Models\PertanyaanPendaftaran;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\TestimoniRequest;
use App\Services\Pages\PagesServiceInterface;

class PagesController extends Controller
{
    public function __construct (
        protected PagesServiceInterface $pagesService
    ) {}

    public function index () : View
    {
        return view('frond.index', [
            'berita_terbaru'            => $this->pagesService->getBeritaLatestLimit(3),
            'testimoni_terbaru'         => $this->pagesService->getTestimoniLatestLimit(9),
            'nama_kepala_sekolah'       => $this->pagesService->getPengaturanWhere('nama_kepala_sekolah'),
            'sambutan_kepala_sekolah'   => $this->pagesService->getPengaturanWhere('sambutan_kepala_sekolah'),
            'sambutan_kepala_sekolah'   => $this->pagesService->getPengaturanWhere('sambutan_kepala_sekolah'),
            'foto_kepala_sekolah'       => $this->pagesService->getPengaturanWhere('foto_kepala_sekolah'),
        ]);
    }

    public function sejarah () : View
    {
        return view('frond.sejarah', [
            'sejarah'                   => $this->pagesService->getPengaturanWhere('sejarah'),
        ]);
    }

    public function visiMisi () : View
    {
        return view('frond.visi-misi', [
            'visi_misi'                 => $this->pagesService->getPengaturanWhere('visi_misi'),
        ]);
    }

    public function strukturOrganisasi () : View
    {
        return view('frond.struktur-organisasi', [
            'struktur_organisasi'       => $this->pagesService->getPengaturanWhere('struktur_organisasi'),
        ]);
    }

    public function createTestimoni () : View
    {
        return view('frond.testimoni-create');
    }

    public function storeTestimoni (TestimoniRequest $request) : RedirectResponse
    {
        $this->pagesService->createTestimoni($request);
        return redirect()->route('testimoni')->with('success', 'Terima Kasih Sudah Memberikan Pendapat Anda');
    }

    public function berita () : View
    {
        return view('frond.berita', [
            'berita_terbaru'    => $this->pagesService->getBeritaLatest()
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
        return view('frond.testimoni', [
            'daftar_testimoni'  => $this->pagesService->getTestimoniLatest(),
        ]);
    }

    public function siswaPrestasi () : View
    {
        return view('frond.siswa-prestasi');
    }

    public function ppdb () : View
    {
        return view('frond.ppdb', [
            'pertanyaan_pendaftaran' => $this->pagesService->getPertanyaanPendaftaranLatest(),
            'pendaftaran_dibuka'     => $this->pagesService->penerimaanPesertaDidikBaru('pendaftaran_dibuka'),
            'gelombang_aktif'        => $this->pagesService->penerimaanPesertaDidikBaru('gelombang_aktif'),
            'tanggal_berikutnya'     => $this->pagesService->penerimaanPesertaDidikBaru('tanggal_berikutnya'),
            'tanggal_pendaftaran_gelombang_1_awal'  => $this->pagesService->getPengaturanDateWhere('tanggal_pendaftaran_gelombang_1_awal'),
            'tanggal_pendaftaran_gelombang_1_akhir' => $this->pagesService->getPengaturanDateWhere('tanggal_pendaftaran_gelombang_1_akhir'),
            'tanggal_pendaftaran_gelombang_2_awal'  => $this->pagesService->getPengaturanDateWhere('tanggal_pendaftaran_gelombang_2_awal'),
            'tanggal_pendaftaran_gelombang_2_akhir' => $this->pagesService->getPengaturanDateWhere('tanggal_pendaftaran_gelombang_2_akhir'),
            'tanggal_pendaftaran_gelombang_3_awal'  => $this->pagesService->getPengaturanDateWhere('tanggal_pendaftaran_gelombang_3_awal'),
            'tanggal_pendaftaran_gelombang_3_akhir' => $this->pagesService->getPengaturanDateWhere('tanggal_pendaftaran_gelombang_3_akhir'),
        ]);
    }

    public function kontak () : View
    {
        return view('frond.kontak', [
            'email'               => $this->pagesService->getPengaturanWhere('email'),
            'telepon'             => '+62' . substr($this->pagesService->getPengaturanWhere('telepon'), 1),
            'facebook'            => $this->pagesService->getPengaturanWhere('facebook'),
            'instagram'           => $this->pagesService->getPengaturanWhere('instagram'),
            'youtube'             => $this->pagesService->getPengaturanWhere('youtube'),
            'tik_tok'             => $this->pagesService->getPengaturanWhere('tik_tok'),
        ]);
    }
}
