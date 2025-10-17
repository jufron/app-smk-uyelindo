<?php

namespace App\Services\PenerimaanSiswaBaru;

use Illuminate\Http\Request;
use App\Models\DaftarSiswaBaru;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\EloquentDataTable;
use App\Services\PenerimaanSiswaBaru\PenerimaanSiswaBaruServiceInterface;

class PenerimaanSiswaBaruService implements PenerimaanSiswaBaruServiceInterface
{
    public function getAll () : JsonResponse
    {
        $model = DaftarSiswaBaru::query()->latest();
        return $this->renderDataTable($model);
    }

    private function renderDataTable ($model) : JsonResponse
    {
        return (new EloquentDataTable($model))
        ->addIndexColumn()
        // ->addColumn('Photo', function (DaftarSiswaBaru $daftarSiswaBaru) {
        //     return view('yajra-datatable.siswa-berprestasi.photo', compact('guruAndStaf'))->render();
        // })
        ->addColumn('Nama Lengkap', function (DaftarSiswaBaru $daftarSiswaBaru) {
            return $daftarSiswaBaru->nama_lengkap;
        })
        ->addColumn('Nama Panggilan', function (DaftarSiswaBaru $daftarSiswaBaru) {
            return $daftarSiswaBaru->nama_panggilan;
        })
        ->addColumn('Email', function (DaftarSiswaBaru $daftarSiswaBaru) {
            return $daftarSiswaBaru->email;
        })
        ->addColumn('Nisn', function (DaftarSiswaBaru $daftarSiswaBaru) {
            return $daftarSiswaBaru->nisn;
        })
        ->addColumn('Jenis Kelamin', function (DaftarSiswaBaru $daftarSiswaBaru) {
            return $daftarSiswaBaru->jenis_kelamin;
        })
        ->addColumn('Agama', function (DaftarSiswaBaru $daftarSiswaBaru) {
            return $daftarSiswaBaru->agama;
        })
        ->addColumn('Nomor Telepon Siswa', function (DaftarSiswaBaru $daftarSiswaBaru) {
            return $daftarSiswaBaru->nomor_telepon_siswa;
        })
        ->addColumn('Tanggal Buat', function (DaftarSiswaBaru $daftarSiswaBaru) {
            return $daftarSiswaBaru->created_at_format;
        })
        ->addColumn('Tanggal Pembaharuan', function (DaftarSiswaBaru $daftarSiswaBaru) {
            return $daftarSiswaBaru->updated_at_format;
        })
        ->addColumn('Aksi', function (DaftarSiswaBaru $daftarSiswaBaru) {
            return view('yajra-datatable.penerimaan-siswa-baru.action', compact('daftarSiswaBaru'))->render();
        })
        ->filter( function ($query) {
            // * search just judul
            // $search = request('search')['value'] ?? null;
            // if ($search !== null && $search !== '') {
            //     // Hanya cari di data yang deskripsi-nya tidak null
            //     $query->whereNotNull('deskripsi')
            //         ->where('deskripsi', 'like', "%$search%");
            // }

            if (request()->has('search')) {
                $query->where('nama_lengkap', 'like', "%".request('search')['value']."%")
                        ->orWhere('nama_panggilan', 'like', "%".request('search')['value']."%");
            }
            // * date range
            if (request()->filled('start_date') && request()->filled('end_date')) {
                $query->whereBetween('created_at', [request('start_date'), request('end_date')]);
            }
            //  todo : if only start date
            elseif (request()->filled('start_date')) {
                $query->where('created_at', '>=', request('start_date'));
            }
            //  todo : if only end date
            elseif (request()->filled('end_date')) {
                $query->where('created_at', '<=', request('end_date'));
            }
        }, true)
        ->rawColumns(['Photo', 'Aksi'])
        ->toJson();
    }

    public function storeDaftarSiswaBaru (Request $request) : void
    {
        $data = $request->only([
            'nama_lengkap',
            'nama_panggilan',
            'email',
            'nisn',
            'tanggal_lahir',
            'tempat_lahir',
            'jenis_kelamin',
            'agama',
            'alamat_siswa',
            'alamat_sekolah_sebelumnya',
            'anak_ke',
            'status_anak',
            'nomor_telepon_siswa',
            'jumlah_saudara_kandung',
            'tinggal_dengan',
            'nama_lengkap_wali_murid',
            'pekerjaan_wali_murid',
            'hubugan_dengan_siswa',
            'alamat_wali_siswa',
            'nomor_hp_wali',
            'nama_lengkap_ayah',
            'pekerjaan_ayah',
            'pendidikan_ayah',
            'nama_lengkap_ibu',
            'pekerjaan_ibu',
            'pendidikan_ibu',
            'nomor_telepon_orang_tua',
            'alamat_orang_tua'
        ]);

        // todo jika nanti ada foto untuk para pendaftar siswa baru cukup gunakan ini
        // if ($request->hasFile('foto')) {
        //     $data['foto'] = $request->file('foto')->store('guru-and-staf', 'public');
        // }

        DaftarSiswaBaru::create($data);
    }

    public function showDaftarSiswaBaru (DaftarSiswaBaru $daftarSiswaBaru) : JsonResponse
    {
        if (!$daftarSiswaBaru) {
            return response()->json(null, 404);
        }

        return response()->json([
            'nama_lengkap'                  => $daftarSiswaBaru->nama_lengkap,
            'nama_panggilan'                => $daftarSiswaBaru->nama_panggilan,
            'email'                         => $daftarSiswaBaru->email,
            'nisn'                          => $daftarSiswaBaru->nisn,
            'tanggal_lahir'                 => $daftarSiswaBaru->tanggal_lahir,
            'tempat_lahir'                  => $daftarSiswaBaru->tempat_lahir,
            'jenis_kelamin'                 => $daftarSiswaBaru->jenis_kelamin,
            'agama'                         => $daftarSiswaBaru->agama,
            'alamat_siswa'                  => $daftarSiswaBaru->alamat_siswa,
            'alamat_sekolah_sebelumnya'     => $daftarSiswaBaru->alamat_sekolah_sebelumnya,
            'anak_ke'                       => $daftarSiswaBaru->anak_ke,
            'status_anak'                   => $daftarSiswaBaru->status_anak,
            'nomor_telepon_siswa'           => $daftarSiswaBaru->nomor_telepon_siswa,
            'jumlah_saudara_kandung'        => $daftarSiswaBaru->jumlah_saudara_kandung,
            'tinggal_dengan'                => $daftarSiswaBaru->tinggal_dengan,
            'nama_lengkap_wali_murid'       => $daftarSiswaBaru->nama_lengkap_wali_murid,
            'pekerjaan_wali_murid'          => $daftarSiswaBaru->pekerjaan_wali_murid,
            'hubugan_dengan_siswa'          => $daftarSiswaBaru->hubugan_dengan_siswa,
            'alamat_wali_siswa'             => $daftarSiswaBaru->alamat_wali_siswa,
            'nomor_hp_wali'                 => $daftarSiswaBaru->nomor_hp_wali,
            'nama_lengkap_ayah'             => $daftarSiswaBaru->nama_lengkap_ayah,
            'pekerjaan_ayah'                => $daftarSiswaBaru->pekerjaan_ayah,
            'pendidikan_ayah'               => $daftarSiswaBaru->pendidikan_ayah,
            'nama_lengkap_ibu'              => $daftarSiswaBaru->nama_lengkap_ibu,
            'pekerjaan_ibu'                 => $daftarSiswaBaru->pekerjaan_ibu,
            'pendidikan_ibu'                => $daftarSiswaBaru->pendidikan_ibu,
            'nomor_telepon_orang_tua'       => $daftarSiswaBaru->nomor_telepon_orang_tua,
            'alamat_orang_tua'              => $daftarSiswaBaru->alamat_orang_tua,
            'created_at'                    => $daftarSiswaBaru->created_at_format,
            'updated_at'                    => $daftarSiswaBaru->updated_at_format,
        ]);
    }

    public function updateDaftarSiswaBaru ($request, $daftarSiswaBaru) : void
    {
        $data = $request->only([
            'nama_lengkap',
            'nama_panggilan',
            'email',
            'nisn',
            'tanggal_lahir',
            'tempat_lahir',
            'jenis_kelamin',
            'agama',
            'alamat_siswa',
            'alamat_sekolah_sebelumnya',
            'anak_ke',
            'status_anak',
            'nomor_telepon_siswa',
            'jumlah_saudara_kandung',
            'tinggal_dengan',
            'nama_lengkap_wali_murid',
            'pekerjaan_wali_murid',
            'hubugan_dengan_siswa',
            'alamat_wali_siswa',
            'nomor_hp_wali',
            'nama_lengkap_ayah',
            'pekerjaan_ayah',
            'pendidikan_ayah',
            'nama_lengkap_ibu',
            'pekerjaan_ibu',
            'pendidikan_ibu',
            'nomor_telepon_orang_tua',
            'alamat_orang_tua'
        ]);

        // if ($request->hasFile('foto')) {
        //     // todo : delete old foto
        //     if ($daftarSiswaBaru->foto && Storage::disk('public')->exists($daftarSiswaBaru->foto)) {
        //         Storage::disk('public')->delete($daftarSiswaBaru->foto);
        //     }
        //     // todo store new photo
        //     $data['foto'] = $request->file('foto')->store('guru-and-staf', 'public');
        // }

        $daftarSiswaBaru->update($data);
    }

    public function destroyDaftarSiswaBaru (DaftarSiswaBaru $daftarSiswaBaru) : void
    {
        // todo kalau diperlukan baru hidupkan
        // if ($daftarSiswaBaru->foto && Storage::disk('public')->exists($daftarSiswaBaru->foto)) {
        //     Storage::disk('public')->delete($daftarSiswaBaru->foto);
        // }
        $daftarSiswaBaru->delete();
    }
}
