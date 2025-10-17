<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\DaftarSiswaBaru;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\PendaftaranSiswaBaruRequest;
use App\Services\PenerimaanSiswaBaru\PenerimaanSiswaBaruServiceInterface;

class PenerimaanSiswaBaruController extends Controller
{
    public function __construct(
        protected PenerimaanSiswaBaruServiceInterface $penerimaanSiswaBaruService,
    ) {}

    public function getLatest () : JsonResponse
    {
        return $this->penerimaanSiswaBaruService->getAll();
    }

    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('dashboard.penerimaan-siswa-baru.penerimaan-siswa-baru');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('dashboard.penerimaan-siswa-baru.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PendaftaranSiswaBaruRequest $request)
    {
        $this->penerimaanSiswaBaruService->storeDaftarSiswaBaru($request);
        notify()->success('Berhasil Menambahkan Data');
        return redirect()->route('dashboard.penerimaan-peserta-didik-baru.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarSiswaBaru $daftarSiswaBaru) : JsonResponse
    {
        if (!$daftarSiswaBaru) {
            return response()->json(null, 404);
        }

        return response()->json([
            'nama_lengkap'              => $daftarSiswaBaru->nama_lengkap,
            'nama_panggilan'            => $daftarSiswaBaru->nama_panggilan,
            'email'                     => $daftarSiswaBaru->email,
            'nisn'                      => $daftarSiswaBaru->nisn,
            'tanggal_lahir'             => $daftarSiswaBaru->tanggal_lahir,
            'tempat_lahir'              => $daftarSiswaBaru->tempat_lahir,
            'jenis_kelamin'             => $daftarSiswaBaru->jenis_kelamin,
            'agama'                     => $daftarSiswaBaru->agama,
            'alamat_siswa'              => $daftarSiswaBaru->alamat_siswa,
            'alamat_sekolah_sebelumnya' => $daftarSiswaBaru->alamat_sekolah_sebelumnya,
            'anak_ke'                   => $daftarSiswaBaru->anak_ke,
            'status_anak'               => $daftarSiswaBaru->status_anak,
            'nomor_telepon_siswa'       => $daftarSiswaBaru->nomor_telepon_siswa,
            'jumlah_saudara_kandung'    => $daftarSiswaBaru->jumlah_saudara_kandung,
            'tinggal_dengan'            => $daftarSiswaBaru->tinggal_dengan,
            'nama_lengkap_wali_murid'   => $daftarSiswaBaru->nama_lengkap_wali_murid,
            'pekerjaan_wali_murid'      => $daftarSiswaBaru->pekerjaan_wali_murid,
            'hubugan_dengan_siswa'      => $daftarSiswaBaru->hubugan_dengan_siswa,
            'alamat_wali_siswa'         => $daftarSiswaBaru->alamat_wali_siswa,
            'nomor_hp_wali'             => $daftarSiswaBaru->nomor_hp_wali,
            'nama_lengkap_ayah'         => $daftarSiswaBaru->nama_lengkap_ayah,
            'pekerjaan_ayah'            => $daftarSiswaBaru->pekerjaan_ayah,
            'pendidikan_ayah'           => $daftarSiswaBaru->pendidikan_ayah,
            'nama_lengkap_ibu'          => $daftarSiswaBaru->nama_lengkap_ibu,
            'pekerjaan_ibu'             => $daftarSiswaBaru->pekerjaan_ibu,
            'pendidikan_ibu'            => $daftarSiswaBaru->pendidikan_ibu,
            'nomor_telepon_orang_tua'   => $daftarSiswaBaru->nomor_telepon_orang_tua,
            'alamat_orang_tua'          => $daftarSiswaBaru->alamat_orang_tua,
            'created_at'                => $daftarSiswaBaru->created_at_format,
            'updated_at'                => $daftarSiswaBaru->updated_at_format,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarSiswaBaru $daftarSiswaBaru) : View
    {
        return view('dashboard.penerimaan-siswa-baru.ubah', compact('daftarSiswaBaru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PendaftaranSiswaBaruRequest $request, DaftarSiswaBaru $daftarSiswaBaru) : RedirectResponse
    {
        $this->penerimaanSiswaBaruService->updateDaftarSiswaBaru($request, $daftarSiswaBaru);
        notify()->success('Berhasil Mengubah Data');
        return redirect()->route('dashboard.penerimaan-peserta-didik-baru.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarSiswaBaru $daftarSiswaBaru) : RedirectResponse
    {
        $this->penerimaanSiswaBaruService->destroyDaftarSiswaBaru($daftarSiswaBaru);
        notify()->success('Berhasil Menghapus Data');
        return redirect()->route('dashboard.penerimaan-peserta-didik-baru.index');
    }
}
