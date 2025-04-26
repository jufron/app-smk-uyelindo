<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\{
    BeritaController,
    KategoryController,
    TestimoniController
};

Route::get('/', DashboardController::class)->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// todo ------------------------------------ kategory -------------------------------------------------
Route::resource('kategory', KategoryController::class)
    ->names([
        'index'     => 'dashboard.kategory.index',
        'create'    => 'dashboard.kategory.create',
        'store'     => 'dashboard.kategory.store',
        'show'      => 'dashboard.kategory.show',
        'edit'      => 'dashboard.kategory.edit',
        'update'    => 'dashboard.kategory.update',
        'destroy'   => 'dashboard.kategory.destroy',
    ]);


// todo ------------------------------------ berita -------------------------------------------------
Route::get('berita/fetch', [BeritaController::class, 'getLatest'])->name('dashboard.berita.fetch');
Route::resource('berita', BeritaController::class)
    ->parameters(['berita' => 'berita'])
    ->names([
        'index'     => 'dashboard.berita.index',
        'create'    => 'dashboard.berita.create',
        'store'     => 'dashboard.berita.store',
        'show'      => 'dashboard.berita.show',
        'edit'      => 'dashboard.berita.edit',
        'update'    => 'dashboard.berita.update',
        'destroy'   => 'dashboard.berita.destroy',
    ]);

// todo ------------------------------------ testimoni -------------------------------------------------
Route::get('testimoni/fetch', [TestimoniController::class, 'getLatest'])->name('dashboard.testimoni.fetch');
Route::resource('testimoni', TestimoniController::class)
    ->names([
        'index'     => 'dashboard.testimoni.index',
        'create'    => 'dashboard.testimoni.create',
        'store'     => 'dashboard.testimoni.store',
        'show'      => 'dashboard.testimoni.show',
        'edit'      => 'dashboard.testimoni.edit',
        'update'    => 'dashboard.testimoni.update',
        'destroy'   => 'dashboard.testimoni.destroy'
    ]);
