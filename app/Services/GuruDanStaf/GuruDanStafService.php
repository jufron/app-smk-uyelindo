<?php

namespace App\Services\GuruDanStaf;

use App\Models\GuruAndStaf;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\EloquentDataTable;
use App\Services\GuruDanStaf\GuruDanStafServiceInterface;

class GuruDanStafService implements GuruDanStafServiceInterface
{
    public function getAll () : JsonResponse
    {
        $model = GuruAndStaf::query()->latest();
        return $this->renderDataTable($model);
    }

    private function renderDataTable ($model) : JsonResponse
    {
        return (new EloquentDataTable($model))
        ->addIndexColumn()
        ->addColumn('Photo', function (GuruAndStaf $guruAndStaf) {
            return view('yajra-datatable.guru-dan-staf.photo', compact('guruAndStaf'))->render();
        })
        ->addColumn('Nama Lengkap', function (GuruAndStaf $guruAndStaf) {
            return $guruAndStaf->nama_lengkap;
        })
        ->addColumn('Telepon', function (GuruAndStaf $guruAndStaf) {
            return $guruAndStaf->telepon;
        })
        ->addColumn('Email', function (GuruAndStaf $guruAndStaf) {
            return $guruAndStaf->email;
        })
        ->addColumn('Alamat', function (GuruAndStaf $guruAndStaf) {
            return $guruAndStaf->alamat;
        })
        ->addColumn('Agama', function (GuruAndStaf $guruAndStaf) {
            return $guruAndStaf->agama;
        })
        ->addColumn('Tanggal Buat', function (GuruAndStaf $guruAndStaf) {
            return $guruAndStaf->created_at_format;
        })
        ->addColumn('Tanggal Pembaharuan', function (GuruAndStaf $guruAndStaf) {
            return $guruAndStaf->updated_at_format;
        })
        ->addColumn('Aksi', function (GuruAndStaf $guruAndStaf) {
            return view('yajra-datatable.guru-dan-staf.action', compact('guruAndStaf'))->render();
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
                $query->where('nama_lengkap', 'like', "%".request('search')['value']."%");
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

    public function storeGuruAndStaf (Request $request) : void
    {
        $data = $request->only([
            'nama_lengkap',
            'nip',
            'nuptx',
            'ptx',
            'status_kewarganegaraan',
            'sk_pengangkatan',
            'lembaga_pengangkatan',
            'agama',
            'alamat',
            'rt',
            'rw',
            'nama_dusun',
            'desa_kelurahan',
            'kecamatan',
            'kode_pos',
            'telepon',
            'email',
            'sumber_gaji',
            'nama_ibu_kandung',
            'status_perkawinan',
            'nik'
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('guru-and-staf', 'public');
        }

        GuruAndStaf::create($data);
    }

    public function showGuruAndStaf (GuruAndStaf $guruAndStaf) : JsonResponse
    {
        if (!$guruAndStaf) {
            return response()->json(null, 404);
        }

        return response()->json([
            'foto'                      => $guruAndStaf->foto_url,
            'nama_lengkap'              => $guruAndStaf->nama_lengkap,
            'nip'                       => $guruAndStaf->nip ?? '-',
            'nuptx'                     => $guruAndStaf->nuptx ?? '-',
            'ptx'                       => $guruAndStaf->ptx ?? '-',
            'status_kewarganegaraan'    => $guruAndStaf->status_kewarganegaraan,
            'sk_pengangkatan'           => $guruAndStaf->sk_pengangkatan ?? '-',
            'lembaga_pengangkatan'      => $guruAndStaf->lembaga_pengangkatan ?? '-',
            'agama'                     => $guruAndStaf->agama,
            'alamat'                    => $guruAndStaf->alamat ?? '-',
            'rt'                        => $guruAndStaf->rt ?? '-',
            'rw'                        => $guruAndStaf->rw ?? '-',
            'nama_dusun'                => $guruAndStaf->nama_dusun ?? '-',
            'desa_kelurahan'            => $guruAndStaf->desa_kelurahan,
            'kecamatan'                 => $guruAndStaf->kecamatan,
            'kode_pos'                  => $guruAndStaf->kode_pos ?? '-',
            'telepon'                   => $guruAndStaf->telepon,
            'email'                     => $guruAndStaf->email,
            'sumber_gaji'               => $guruAndStaf->sumber_gaji,
            'nama_ibu_kandung'          => $guruAndStaf->nama_ibu_kandung,
            'status_perkawinan'         => $guruAndStaf->status_perkawinan,
            'nik'                       => $guruAndStaf->nik,
            'created_at'                => $guruAndStaf->created_at_format,
            'updated_at'                => $guruAndStaf->updated_at_format,
        ]);
    }

    public function updateGuruAndStaf ($request, $guruAndStaf) : void
    {
        $data = $request->only([
            'nama_lengkap',
            'nip',
            'nuptx',
            'ptx',
            'status_kewarganegaraan',
            'sk_pengangkatan',
            'lembaga_pengangkatan',
            'agama',
            'alamat',
            'rt',
            'rw',
            'nama_dusun',
            'desa_kelurahan',
            'kecamatan',
            'kode_pos',
            'telepon',
            'email',
            'sumber_gaji',
            'nama_ibu_kandung',
            'status_perkawinan',
            'nik'
        ]);

        if ($request->hasFile('foto')) {
            // todo : delete old foto
            if ($guruAndStaf->foto && Storage::disk('public')->exists($guruAndStaf->foto)) {
                Storage::disk('public')->delete($guruAndStaf->foto);
            }
            // todo store new photo
            $data['foto'] = $request->file('foto')->store('guru-and-staf', 'public');
        }

        $guruAndStaf->update($data);
    }

    public function destroyGuruAndStaf (GuruAndStaf $guruAndStaf) : void
    {
        if ($guruAndStaf->foto && Storage::disk('public')->exists($guruAndStaf->foto)) {
            Storage::disk('public')->delete($guruAndStaf->foto);
        }
        $guruAndStaf->delete();
    }
}
