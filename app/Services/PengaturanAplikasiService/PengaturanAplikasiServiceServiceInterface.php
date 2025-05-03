<?php

namespace App\Services\PengaturanAplikasiService;

use Illuminate\Http\Request;
use App\Models\PengaturanAplikasi;

interface PengaturanAplikasiServiceServiceInterface
{
    public function getPengaturanWhere($query) : ?string;

    public function storePengaturanAplikasiUmum (Request $request) : void;

    public function storePengaturanAplikasiKontak (Request $request) : void;

    public function storePengaturanAplikasiPpdb (Request $request) : void;
}
