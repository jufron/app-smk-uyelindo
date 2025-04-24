<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\{
    BeritaController,
    KategoryController
};

Route::get('/', DashboardController::class)->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

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
