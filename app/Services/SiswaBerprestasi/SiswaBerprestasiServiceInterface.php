<?php

namespace App\Services\SiswaBerprestasi;

use App\Models\SiswaBerprestasi;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

interface SiswaBerprestasiServiceInterface
{
    public function getAll () : JsonResponse;

    public function storeSiswaBerprestasi (Request $request) : void;

    public function showSiswaBerprestasi (SiswaBerprestasi $siswaBerprestasi) : JsonResponse;

    public function updateSiswaBerprestasi ($request, $siswaBerprestasi) : void;

    public function destroySiswaBerprestasi (SiswaBerprestasi $siswaBerprestasi) : void;
}
