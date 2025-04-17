<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::controller(PagesController::class)->group( function () {
    Route::get('/', 'index')->name('index');
    Route::get('sejarah', 'sejarah')->name('sejarah');
    Route::get('visi-misi', 'visiMisi')->name('visi-misi');
    Route::get('struktur-organisasi', 'strukturOrganisasi')->name('struktur-organisasi');
    Route::get('berita', 'berita')->name('berita');
    Route::get('berita-detail', 'findBerita')->name('berita.detail');
    Route::get('jurusan', 'jurusan')->name('jurusan');
    Route::get('galeri-foto', 'galeriFoto')->name('galeri-foto');
    Route::get('guru-staf', 'guruDanStaf')->name('guru-staf');
    Route::get('fasilitas', 'fasilitas')->name('fasilitas');
    Route::get('testimoni', 'testimoni')->name('testimoni');
    Route::get('siswa-prestasi', 'siswaPrestasi')->name('siswa-prestasi');
    Route::get('ppdbb', 'ppdb')->name('ppdb');
    Route::get('kontak', 'kontak')->name('kontak');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
