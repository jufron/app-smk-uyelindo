<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\View\View;
use App\Models\GuruAndStaf;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\GuruDanStafRequest;
use App\Services\GuruDanStaf\GuruDanStafServiceInterface;

class GuruDanStafController extends Controller
{
    public function __construct(
        protected GuruDanStafServiceInterface $guruDanStafService,
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('dashboard.guru-&-staf.guru-&-staf');
    }

    public function getLatest () : JsonResponse
    {
        return $this->guruDanStafService->getAll();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('dashboard.guru-&-staf.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuruDanStafRequest $request) : RedirectResponse
    {
        $this->guruDanStafService->storeGuruAndStaf($request);
        notify()->success('Berhasil Menambahkan Data');
        return redirect()->route('dashboard.guru-staf.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(GuruAndStaf $guruAndStaf) : JsonResponse
    {
        return $this->guruDanStafService->showGuruAndStaf($guruAndStaf);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuruAndStaf $guruAndStaf) : View
    {
        return view('dashboard.guru-&-staf.ubah', compact('guruAndStaf'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GuruAndStaf $guruAndStaf) : RedirectResponse
    {
        $this->guruDanStafService->updateGuruAndStaf($request, $guruAndStaf);
        notify()->success('Berhasil Mengubah Data');
        return redirect()->route('dashboard.guru-staf.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(guruAndStaf $guruAndStaf) : RedirectResponse
    {
        $this->guruDanStafService->destroyGuruAndStaf($guruAndStaf);
        notify()->success('Berhasil Menghapus Data');
        return redirect()->route('dashboard.guru-staf.index');
    }
}
