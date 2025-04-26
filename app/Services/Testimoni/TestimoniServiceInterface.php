<?php

namespace App\Services\Testimoni;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

interface TestimoniServiceInterface
{
    public function getTahun () : array;

    public function getAll () : JsonResponse;

    public function storeTestimoni (Request $request) : void;

    public function showTestimoni (Testimoni $testimoni);

    public function updateTestimoni (Request $request, Testimoni $testimoni) : void;

    public function destroyTestimoni (Testimoni $testimoni) : void;

}
