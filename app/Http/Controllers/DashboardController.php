<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        notify()->success('Welcome to dashboard');
        return view('dashboard.index');
    }
}
