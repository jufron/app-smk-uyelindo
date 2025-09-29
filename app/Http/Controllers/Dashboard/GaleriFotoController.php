<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\GaleriFotoRequest;
use App\Models\Galeri;
use App\Services\Galeri\GaleriServiceInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class GaleriFotoController extends Controller
{
    public function __construct(
        protected GaleriServiceInterface $galeriService,
    ) {}

    public function getLatest () : JsonResponse
    {
        return $this->galeriService->getAll();
    }

    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('dashboard.galeri.galeri');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('dashboard.galeri.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GaleriFotoRequest $request) : RedirectResponse
    {
        $this->galeriService->storeGaleri($request);
        notify()->success('Berhasil Menambahkan Data');
        return redirect()->route('dashboard.galery-foto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri) : JsonResponse
    {
        return $this->galeriService->showGaleri($galeri);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri) : View
    {
        return view('dashboard.galeri.ubah', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GaleriFotoRequest $request, Galeri $galeri) : RedirectResponse
    {
        $this->galeriService->updateGaleri($request, $galeri);
        notify()->success('Berhasil Mengubah Data');
        return redirect()->route('dashboard.galery-foto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri) : RedirectResponse
    {
        $this->galeriService->destroyGaleri($galeri);
        notify()->success('Berhasil Menghapus Data');
        return redirect()->route('dashboard.galery-foto.index');
    }
}
