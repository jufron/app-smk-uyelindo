<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Testimoni;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\TestimoniRequest;
use App\Services\Testimoni\TestimoniServiceInterface;

class TestimoniController extends Controller
{
    public function __construct(
        protected TestimoniServiceInterface $testimoniService,
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('dashboard.testimoni.testimoni', [
            'tahun' => $this->testimoniService->getTahun()
        ]);
    }

    public function getLatest () : JsonResponse
    {
        return $this->testimoniService->getAll();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('dashboard.testimoni.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimoniRequest $request) : RedirectResponse
    {
        $this->testimoniService->storeTestimoni($request);
        notify()->success('Berhasil Menambahkan Data');
        return redirect()->route('dashboard.testimoni.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni) : JsonResponse
    {
        return $this->testimoniService->showTestimoni($testimoni);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni) : View
    {
        return view('dashboard.testimoni.ubah', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimoniRequest $request, Testimoni $testimoni) : RedirectResponse
    {
        $this->testimoniService->updateTestimoni($request, $testimoni);
        notify()->success('Berhasil Memperbaharui Data');
        return redirect()->route('dashboard.testimoni.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni) : RedirectResponse
    {
        $this->testimoniService->destroyTestimoni($testimoni);
        notify()->success('Berhasil Menghapus Data');
        return redirect()->route('dashboard.testimoni.index');
    }
}
