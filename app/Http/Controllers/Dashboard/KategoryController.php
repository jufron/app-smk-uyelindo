<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\KategoryRequest;
use App\Models\Kategory;

class KategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $kategory = Kategory::query()->latest()->get();
        return view('dashboard.kategory-berita.kategory', compact('kategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('dashboard.kategory-berita.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KategoryRequest $request) : RedirectResponse
    {
        Kategory::create([
            'nama'      => $request->nama,
            'slug'      => null,
            'deskripsi' => $request->deskripsi
        ]);
        notify()->success('Berhasil Menambahkan Data');
        return redirect()->route('dashboard.kategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategory $kategory)
    {
        if (!$kategory) {
            return response()->json(null, 404);
        }

        return response()->json([
            'nama_kategory'     => $kategory->nama,
            'deskripsi'         => $kategory->deskripsi,
            'created_at'        => $kategory->created_at_format,
            'updated_at'        => $kategory->updated_at_format
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategory $kategory) : View
    {
        return view('dashboard.kategory-berita.ubah', compact('kategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KategoryRequest $request, Kategory $kategory) : RedirectResponse
    {
        $kategory->update([
            'nama'      => $request->nama,
            'slug'      => null,
            'deskripsi' => $request->deskripsi
        ]);
        notify()->success('Berhasil Memperbaharui Data');
        return redirect()->route('dashboard.kategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategory $kategory) : RedirectResponse
    {
        $kategory->delete();
        notify()->success('Berhasil Menghapus Data');
        return redirect()->route('dashboard.kategory.index');
    }
}
