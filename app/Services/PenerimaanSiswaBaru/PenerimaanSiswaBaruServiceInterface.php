<?php

namespace App\Services\PenerimaanSiswaBaru;

use App\Models\DaftarSiswaBaru;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

interface PenerimaanSiswaBaruServiceInterface
{
    public function getAll () : JsonResponse;

    public function storeDaftarSiswaBaru (Request $request) : void;

    public function showDaftarSiswaBaru (DaftarSiswaBaru $daftarSiswaBaru) : JsonResponse;

    public function updateDaftarSiswaBaru ($request, $daftarSiswaBaru) : void;

    public function destroyDaftarSiswaBaru (DaftarSiswaBaru $daftarSiswaBaru) : void;
}
