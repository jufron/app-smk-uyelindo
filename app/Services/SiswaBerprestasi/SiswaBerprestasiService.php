<?php

namespace App\Services\SiswaBerprestasi;

use Illuminate\Http\Request;
use App\Models\SiswaBerprestasi;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\EloquentDataTable;
use Illuminate\Support\Facades\Storage;
use App\Services\SiswaBerprestasi\SiswaBerprestasiServiceInterface;

class SiswaBerprestasiService implements SiswaBerprestasiServiceInterface
{
    public function getAll () : JsonResponse
    {
        $model = SiswaBerprestasi::query()->latest();
        return $this->renderDataTable($model);
    }

    private function renderDataTable ($model) : JsonResponse
    {
        return (new EloquentDataTable($model))
        ->addIndexColumn()
        ->addColumn('Photo', function (SiswaBerprestasi $siswaBerprestasi) {
            return view('yajra-datatable.siswa-berprestasi.photo', compact('siswaBerprestasi'))->render();
        })
        ->addColumn('Nama Lengkap', function (SiswaBerprestasi $siswaBerprestasi) {
            return $siswaBerprestasi->nama_lengkap;
        })
        ->addColumn('Kelas', function (SiswaBerprestasi $siswaBerprestasi) {
            return $siswaBerprestasi->kelas;
        })
        ->addColumn('Tahun', function (SiswaBerprestasi $siswaBerprestasi) {
            return $siswaBerprestasi->tahun;
        })
        ->addColumn('Nama Penyelenggara', function (SiswaBerprestasi $siswaBerprestasi) {
            return $siswaBerprestasi->nama_penyelenggara;
        })
        ->addColumn('Tanggal Buat', function (SiswaBerprestasi $siswaBerprestasi) {
            return $siswaBerprestasi->created_at_format;
        })
        ->addColumn('Tanggal Pembaharuan', function (SiswaBerprestasi $siswaBerprestasi) {
            return $siswaBerprestasi->updated_at_format;
        })
        ->addColumn('Aksi', function (SiswaBerprestasi $siswaBerprestasi) {
            return view('yajra-datatable.siswa-berprestasi.action', compact('siswaBerprestasi'))->render();
        })
        ->filter( function ($query) {
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
        ->rawColumns(['Photo', 'Status', 'Aksi'])
        ->toJson();
    }

    public function storeSiswaBerprestasi (Request $request) : void
    {
        $data = $request->only(['nama_lengkap', 'kelas', 'jenis_prestasi', 'peringkat', 'tahun', 'tingkat', 'nama_penyelenggara', 'keterangan']);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto-siswa-berprestasi', 'public');
        }

        SiswaBerprestasi::create($data);
    }

    public function showSiswaBerprestasi (SiswaBerprestasi $siswaBerprestasi) : JsonResponse
    {
        if (!$siswaBerprestasi) {
            return response()->json(null, 404);
        }
        return response()->json([
            'foto'                  => $siswaBerprestasi->foto_url,
            'nama_lengkap'          => $siswaBerprestasi->nama_lengkap,
            'kelas'                 => $siswaBerprestasi->kelas,
            'jenis_prestasi'        => $siswaBerprestasi->jenis_prestasi,
            'peringkat'             => $siswaBerprestasi->peringkat,
            'tahun'                 => $siswaBerprestasi->tahun,
            'tingkat'               => $siswaBerprestasi->tingkat,
            'nama_penyelenggara'    => $siswaBerprestasi->nama_penyelenggara,
            'keterangan'            => $siswaBerprestasi->keterangan,
            'created_at'            => $siswaBerprestasi->created_at_format,
            'updated_at'            => $siswaBerprestasi->updated_at_format,
        ]);
    }

    public function updateSiswaBerprestasi ($request, $siswaBerprestasi) : void
    {
        $data = $request->only(['nama_lengkap', 'kelas', 'jenis_prestasi', 'peringkat', 'tahun', 'tingkat', 'nama_penyelenggara', 'keterangan']);

        if ($request->hasFile('foto')) {
            // todo : delete old foto
            if ($siswaBerprestasi->foto && Storage::disk('public')->exists($siswaBerprestasi->foto)) {
                Storage::disk('public')->delete($siswaBerprestasi->foto);
            }
            // todo store new photo
            $data['foto'] = $request->file('foto')->store('foto-siswa-berprestasi', 'public');
        }

        $siswaBerprestasi->update($data);
    }

    public function destroySiswaBerprestasi (SiswaBerprestasi $siswaBerprestasi) : void
    {
        if ($siswaBerprestasi->foto && Storage::disk('public')->exists($siswaBerprestasi->foto)) {
            Storage::disk('public')->delete($siswaBerprestasi->foto);
        }
        $siswaBerprestasi->delete();
    }
}
