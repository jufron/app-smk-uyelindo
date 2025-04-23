<?php

namespace App\Services\Berita;

use App\Models\Berita;
use Yajra\DataTables\EloquentDataTable;
use App\Services\Berita\BeritaServiceInterface;
use Illuminate\Http\JsonResponse;

class BeritaService implements BeritaServiceInterface
{
    public function getAll () : JsonResponse
    {
        $model = Berita::with(['kategory:id,nama','user:id,name,email'])->latest();
        return $this->renderDataTable($model);
    }

    private function renderDataTable ($model) : JsonResponse
    {
        return (new EloquentDataTable($model))
        ->addIndexColumn()
        ->addColumn('Photo', function (Berita $berita) {
            return view('yajra-datatable.berita.photo', compact('berita'))->render();
        })
        ->addColumn('Judul', function (Berita $berita) {
            return $berita->judul_limit;
        })
        ->addColumn('Status', function (Berita $berita) {
            return $berita->status
            ? '<span class="badge badge-success">Publish</span>'
            : '<span class="badge badge-danger">Draft</span>';
        })
        ->addColumn('Kategory', function (Berita $berita) {
            return $berita->kategory->nama;
        })
        ->addColumn('Tanggal Buat', function (Berita $berita) {
            return $berita->created_at_format;
        })
        ->addColumn('Tanggal Pembaharuan', function (Berita $berita) {
            return $berita->updated_at_format;
        })
        ->addColumn('Aksi', function (Berita $berita) {
            return view('yajra-datatable.berita.action', compact('berita'))->render();
        })
        ->rawColumns(['Photo', 'Status', 'Aksi'])
        ->toJson();
    }

    public function showBerita (Berita $berita) : JsonResponse
    {
        if (!$berita) {
            return response()->json(null, 404);
        }

        return response()->json([
            'poster'        => $berita->poster_url,
            'judul'         => $berita->judul,
            'content'       => $berita->content,
            'kategory_id'   => $berita->kategory->nama,
            'status'        => $berita->status,
            'user_id'       => $berita->user->name,
            'created_at'    => $berita->created_at_format,
            'updated_at'    => $berita->updated_at_format,
        ]);
    }
}
