<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategory;
use App\Models\PertanyaanPendaftaran;
use App\Models\Testimoni;
use App\Services\Dashboard\DashboardServiceInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(
        protected DashboardServiceInterface $dashboardService
    ) {}

    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        notify()->success('Welcome to dashboard');
        return view('dashboard.index', [
            'kategory'                  => $this->dashboardService->kategoryAllCount(),
            'pertanyaan_ppdb'           => $this->dashboardService->pertanyaanPpdbAllCount(),
            'foto_galery'               => $this->dashboardService->galeriFotoAllCount(),
            'guru_dan_staf'             => 1,
            'siswa_prestasi'            => 1,
            'berita'                    => $this->dashboardService->beritaAllCount(),
            'berita_publish'            => $this->dashboardService->beritaPublishCount(),
            'berita_draft'              => $this->dashboardService->beritaDraftCount(),
            'testimoni'                 => $this->dashboardService->testimoniAllCount(),
            'testimoni_where_month'     => $this->dashboardService->testimoniWhereMonthCount(),
            'testimoni__publish'        => $this->dashboardService->testimoniPublishCount(),
            'testimoni_draft'           => $this->dashboardService->testimoniDraftCount(),
        ]);
    }
}
