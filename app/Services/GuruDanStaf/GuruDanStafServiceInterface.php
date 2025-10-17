<?php

namespace App\Services\GuruDanStaf;

use App\Models\GuruAndStaf;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

interface GuruDanStafServiceInterface
{
    public function getAll () : JsonResponse;

    public function storeGuruAndStaf (Request $request) : void;

    public function showGuruAndStaf (GuruAndStaf $guruAndStaf) : JsonResponse;

    public function updateGuruAndStaf ($request, $guruAndStaf) : void;

    public function destroyGuruAndStaf (GuruAndStaf $guruAndStaf) : void;
}
