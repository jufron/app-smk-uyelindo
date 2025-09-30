<?php

namespace App\Services\SiswaBerprestasi;

use App\Models\SiswaBerprestasi;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\EloquentDataTable;
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
            // * search just judul
            // $search = request('search')['value'] ?? null;
            // if ($search !== null && $search !== '') {
            //     // Hanya cari di data yang deskripsi-nya tidak null
            //     $query->whereNotNull('deskripsi')
            //         ->where('deskripsi', 'like', "%$search%");
            // }

            // if (request()->has('search')) {
            //     $query->where('deskripsi', 'like', "%".request('search')['value']."%");
            // }

            // * status active or draft
            if (request()->has('status')) {
                $query->where('status', request('status'));
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
}
