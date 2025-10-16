<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\SiswaBerprestasiRequest;
use App\Models\SiswaBerprestasi;
use App\Services\SiswaBerprestasi\SiswaBerprestasiServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SiswaBerprestasiController extends Controller
{
    public function __construct(
        protected SiswaBerprestasiServiceInterface $siswaBerprestasiService,
    ) {}

    public function getLatest () : JsonResponse
    {
        return $this->siswaBerprestasiService->getAll();
    }

    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('dashboard.siswa-berprestasi.siswa-berprestasi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('dashboard.siswa-berprestasi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SiswaBerprestasiRequest $request) : RedirectResponse
    {
        $this->siswaBerprestasiService->storeSiswaBerprestasi($request);
        notify()->success('Berhasil Menambahkan Data');
        return redirect()->route('dashboard.siswa-berprestasi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SiswaBerprestasi $siswaBerprestasi) : JsonResponse
    {
        return $this->siswaBerprestasiService->showSiswaBerprestasi($siswaBerprestasi);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiswaBerprestasi $siswaBerprestasi) : View
    {
        return view('dashboard.siswa-berprestasi.ubah', compact('siswaBerprestasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiswaBerprestasi $siswaBerprestasi) : RedirectResponse
    {
        $this->siswaBerprestasiService->updateSiswaBerprestasi($request, $siswaBerprestasi);
        notify()->success('Berhasil Mengubah Data');
        return redirect()->route('dashboard.siswa-berprestasi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiswaBerprestasi $siswaBerprestasi) : RedirectResponse
    {
        $this->siswaBerprestasiService->destroySiswaBerprestasi($siswaBerprestasi);
        notify()->success('Berhasil Menghapus Data');
        return redirect()->route('dashboard.siswa-berprestasi.index');
    }
}
