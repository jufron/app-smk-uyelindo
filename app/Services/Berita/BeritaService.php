<?php

namespace App\Services\Berita;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\EloquentDataTable;
use App\Services\Berita\BeritaServiceInterface;

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
        ->filter( function ($query) {
            // * search just judul
            if (request()->has('search')) {
                $query->where('judul', 'like', "%".request('search')['value']."%");
            }
            // * status active or draft
            if (request()->has('status')) {
                $query->where('status', request('status'));
            }
            // * kategory
            if (request()->has('kategory_id')) {
                $query->where('kategory_id', request('kategory_id'));
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

    public function storeBerita (Request $request) : void
    {
        $posterPath = null;
        $publishStatus = false;

        if(isset($request->status)) {
            $publishStatus = true;
        }

        if ($request->file('poster')) {
            $posterPath = $request->file('poster')->store('berita', 'public');
        }

        $requestData = $request->only('user_id', 'poster', 'judul', 'slug', 'content', 'kategory_id',  'status');

        $requestData['poster']      = $posterPath;
        $requestData['user_id']     = Auth::user()->id;
        $requestData['slug']        = str()->slug($requestData['judul']);
        $requestData['status']      = $publishStatus;

        Berita::create($requestData);
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

    public function updateBerita ($request, $berita) : void
    {
        $posterPath = $berita->poster;
        $publishStatus = $berita->status;

        if($request->filled('status')) {
            $publishStatus = true;
        } else {
            $publishStatus = false;
        }

        if ($request->hasFile('poster')) {
            // ? Jika ada poster yang sudah ada, hapus dari penyimpanan
            if ($posterPath && Storage::disk('public')->exists($posterPath)) {
                Storage::disk('public')->delete($posterPath);
            }

            $posterPath = $request->file('poster')->store('berita', 'public');
        }

        $requestData = $request->only('user_id', 'poster', 'judul', 'slug', 'content', 'kategory_id',  'status');

        $requestData['poster']      = $posterPath;
        $requestData['user_id']     = Auth::user()->id;
        $requestData['slug']        = str()->slug($requestData['judul']);
        $requestData['status']      = $publishStatus;

        $berita->update($requestData);
    }

    public function destroyBerita (Berita $berita) : void
    {
        if ($berita->poster && Storage::disk('public')->exists($berita->poster)) {
            Storage::disk('public')->delete($berita->poster);
        }
        $berita->delete();
    }
}
