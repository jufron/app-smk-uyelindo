<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Berita;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BeritaRequest;
use App\Models\Kategory;
use App\Services\Berita\BeritaServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class BeritaController extends Controller
{
    public function __construct(
        protected BeritaServiceInterface $beritaService,
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('dashboard.berita.berita', [
            'kategory'  => Kategory::latest()->get()
        ]);
    }

    public function getLatest () : JsonResponse
    {
        return $this->beritaService->getAll();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('dashboard.berita.tambah', [
            'kategory'  => Kategory::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BeritaRequest $request) : RedirectResponse
    {
        $this->beritaService->storeBerita($request);
        notify()->success('Berhasil Menambahkan Data');
        return redirect()->route('dashboard.berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita) : JsonResponse
    {
        return $this->beritaService->showBerita($berita);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita) : View
    {
        return view('dashboard.berita.ubah', [
            'berita'    => $berita,
            'kategory'  => Kategory::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BeritaRequest $request, Berita $berita) : RedirectResponse
    {
        $this->beritaService->updateBerita($request, $berita);
        notify()->success('Berhasil Memperbaharui Data');
        return redirect()->route('dashboard.berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita) : RedirectResponse
    {
        $this->beritaService->destroyBerita($berita);
        notify()->success('Berhasil Menghapus Data');
        return redirect()->route('dashboard.berita.index');
    }
}
