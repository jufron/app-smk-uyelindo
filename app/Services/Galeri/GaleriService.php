<?php

namespace App\Services\Galeri;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\EloquentDataTable;
use App\Services\Galeri\GaleriServiceInterface;

class GaleriService implements GaleriServiceInterface
{
    public function getAll () : JsonResponse
    {
        $model = Galeri::query()->latest();
        return $this->renderDataTable($model);
    }

    private function renderDataTable ($model) : JsonResponse
    {
        return (new EloquentDataTable($model))
        ->addIndexColumn()
        ->addColumn('Photo', function (Galeri $galeri) {
            return view('yajra-datatable.galeri.photo', compact('galeri'))->render();
        })
        ->addColumn('Deskripsi', function (Galeri $galeri) {
            return $galeri->deskripsi_limit ?? '-';
        })
        ->addColumn('Status', function (Galeri $galeri) {
            return $galeri->status
            ? '<span class="badge badge-success">Publish</span>'
            : '<span class="badge badge-danger">Draft</span>';
        })
        ->addColumn('Tanggal Buat', function (Galeri $galeri) {
            return $galeri->created_at_format;
        })
        ->addColumn('Tanggal Pembaharuan', function (Galeri $galeri) {
            return $galeri->updated_at_format;
        })
        ->addColumn('Aksi', function (Galeri $galeri) {
            return view('yajra-datatable.galeri.action', compact('galeri'))->render();
        })
        ->filter( function ($query) {
            // * search just judul
            $search = request('search')['value'] ?? null;

            if ($search !== null && $search !== '') {
                // Hanya cari di data yang deskripsi-nya tidak null
                $query->whereNotNull('deskripsi')
                    ->where('deskripsi', 'like', "%$search%");
            }

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

    public function storeGaleri (Request $request) : void
    {
        $data = $request->only(['deskripsi', 'status']);

        $data['status'] = $request->has('status') ? true : false;

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('galeri', 'public');
        }

        Galeri::create($data);
    }

    public function showGaleri (Galeri $galeri) : JsonResponse
    {
        if (!$galeri) {
            return response()->json(null, 404);
        }
        return response()->json([
            'foto' => $galeri->foto_url,
        ]);
    }

    public function updateGaleri ($request, $galeri) : void
    {
        $data = $request->only(['deskripsi', 'status']);

        $data['status'] = $request->has('status') ? true : false;

        if ($request->hasFile('foto')) {
            // delete old photo
            if ($galeri->foto && Storage::disk('public')->exists($galeri->foto)) {
                Storage::disk('public')->delete($galeri->foto);
            }
            // store new photo
            $data['foto'] = $request->file('foto')->store('galeri', 'public');
        }

        $galeri->update($data);
    }

    public function destroyGaleri (Galeri $galeri) : void
    {
        if ($galeri->foto && Storage::disk('public')->exists($galeri->foto)) {
            Storage::disk('public')->delete($galeri->foto);
        }
        $galeri->delete();
    }
}
