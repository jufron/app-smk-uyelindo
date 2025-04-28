<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\PertanyaanPendaftaran;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\PertanyaanPendaftaranRequest;

class PertanyaanPenerimaanSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('dashboard.pertanyaan-pendaftaran.daftar-pertanyaan', [
            'pertanyaanPendaftaran' => PertanyaanPendaftaran::query()->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('dashboard.pertanyaan-pendaftaran.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PertanyaanPendaftaranRequest $request) : RedirectResponse
    {
        PertanyaanPendaftaran::create($request->all());
        Cache::forget('pertanyaan_pendaftaran');
        notify()->success('Berhasil Menambahkan Data');
        return redirect()->route('dashboard.daftar-pertanyaan-ppdb.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PertanyaanPendaftaran $pertanyaanPendaftaran) : JsonResponse
    {
        if (!$pertanyaanPendaftaran) {
            return response()->json(null, 404);
        }

        return response()->json([
            'pertanyaan'        => $pertanyaanPendaftaran->pertanyaan,
            'jawaban'           => $pertanyaanPendaftaran->jawaban,
            'created_at'        => $pertanyaanPendaftaran->created_at_format,
            'updated_at'        => $pertanyaanPendaftaran->updated_at_format
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PertanyaanPendaftaran $pertanyaanPendaftaran)
    {
        return view('dashboard.pertanyaan-pendaftaran.ubah', compact('pertanyaanPendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PertanyaanPendaftaranRequest $request, PertanyaanPendaftaran $pertanyaanPendaftaran) : RedirectResponse
    {
        $pertanyaanPendaftaran->update($request->all());
        Cache::forget('pertanyaan_pendaftaran');
        notify()->success('Berhasil Memperbaharui Data');
        return redirect()->route('dashboard.daftar-pertanyaan-ppdb.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PertanyaanPendaftaran $pertanyaanPendaftaran) : RedirectResponse
    {
        $pertanyaanPendaftaran->delete();
        Cache::forget('pertanyaan_pendaftaran');
        notify()->success('Berhasil Menghapus Data');
        return redirect()->route('dashboard.daftar-pertanyaan-ppdb.index');
    }
}
