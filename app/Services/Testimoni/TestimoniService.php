<?php

namespace App\Services\Testimoni;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\EloquentDataTable;
use App\Services\Testimoni\TestimoniServiceInterface;

class TestimoniService implements TestimoniServiceInterface
{
    public function getTahun () : array
    {
        return Testimoni::select('tahun_lulus')
                    ->distinct()
                    ->orderBy('tahun_lulus', 'desc')
                    ->pluck('tahun_lulus')
                    ->toArray();
    }

    public function getAll () : JsonResponse
    {
        $model = Testimoni::query()->latest();
        return $this->renderDataTable($model);
    }

    private function renderDataTable ($model) : JsonResponse
    {
        return (new EloquentDataTable($model))
        ->addIndexColumn()
        ->addColumn('Photo', function (Testimoni $testimoni) {
            return view('yajra-datatable.testimoni.photo', compact('testimoni'))->render();
        })
        ->addColumn('Nama Lengkap', function (Testimoni $testimoni) {
            return $testimoni->nama_lengkap_limit;
        })
        ->addColumn('Tahun Lulus', function (Testimoni $testimoni) {
            return $testimoni->tahun_lulus;
        })
        ->addColumn('Status', function (Testimoni $testimoni) {
            return $testimoni->status
            ? '<span class="badge badge-success">Publish</span>'
            : '<span class="badge badge-danger">Draft</span>';
        })
        ->addColumn('Pekerjaan', function (Testimoni $testimoni) {
            return $testimoni->pekerjaan_limit;
        })
        ->addColumn('Tanggal Buat', function (Testimoni $testimoni) {
            return $testimoni->created_at_format;
        })
        ->addColumn('Tanggal Pembaharuan', function (Testimoni $testimoni) {
            return $testimoni->updated_at_format;
        })
        ->addColumn('Aksi', function (Testimoni $testimoni) {
            return view('yajra-datatable.testimoni.action', compact('testimoni'))->render();
        })
        ->filter( function ($query) {
            // * search just nama_lengkap
            if (request()->has('search')) {
                $query->where('nama_lengkap', 'like', "%".request('search')['value']."%");
            }
            // * status active or draft
            if (request()->has('status')) {
                $query->where('status', request('status'));
            }
            // * year
            if (request()->has('tahun')) {
                $query->where('tahun_lulus', request('tahun'));
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

    public function storeTestimoni (Request $request) : void
    {
        $avatarPath = null;
        $publishStatus = false;

        if(isset($request->status)) {
            $publishStatus = true;
        }

        if ($request->file('avatar')) {
            $avatarPath = $request->file('avatar')->store('testimoni', 'public');
        }

        $requestData = $request->only('avatar', 'nama_lengkap', 'tahun_lulus', 'pekerjaan', 'content', 'status');
        $requestData['avatar']      = $avatarPath;
        $requestData['status']      = $publishStatus;

        Testimoni::create($requestData);
    }

    public function showTestimoni (Testimoni $testimoni)
    {
        if (!$testimoni) {
            return response()->json(null, 404);
        }

        return response()->json([
            'avatar'        => $testimoni->avatar_url,
            'nama'          => $testimoni->nama_lengkap,
            'tahun'         => $testimoni->tahun_lulus,
            'pekerjaan'     => $testimoni->pekerjaan,
            'content'       => $testimoni->content,
            'status'        => $testimoni->status,
            'created_at'    => $testimoni->created_at_format,
            'updated_at'    => $testimoni->updated_at_format,
        ]);
    }

    public function updateTestimoni (Request $request, Testimoni $testimoni) : void
    {
        $avatarPath = $testimoni->avatar;
        $publishStatus = $testimoni->status;

        if($request->filled('status')) {
            $publishStatus = true;
        } else {
            $publishStatus = false;
        }

        if ($request->hasFile('avatar')) {
            // ? Jika ada poster yang sudah ada, hapus dari penyimpanan
            if ($avatarPath && Storage::disk('public')->exists($avatarPath)) {
                Storage::disk('public')->delete($avatarPath);
            }

            $avatarPath = $request->file('avatar')->store('testimoni', 'public');
        }

        $requestData = $request->only('avatar', 'nama_lengkap', 'tahun_lulus', 'pekerjaan', 'content', 'status');
        $requestData['avatar']      = $avatarPath;
        $requestData['status']      = $publishStatus;

        $testimoni->update($requestData);
    }

    public function destroyTestimoni (Testimoni $testimoni) : void
    {
        if ($testimoni->avatar && Storage::disk('public')->exists($testimoni->avatar)) {
            Storage::disk('public')->delete($testimoni->avatar);
        }
        $testimoni->delete();
    }
}
