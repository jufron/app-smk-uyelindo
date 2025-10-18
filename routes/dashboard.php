<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\{
    BeritaController,
    GaleriFotoController,
    GuruDanStafController,
    KategoryController,
    PenerimaanSiswaBaruController,
    PengaturanAplikasiController,
    PertanyaanPenerimaanSiswaController,
    SiswaBerprestasiController,
    TestimoniController
};

Route::get('/', DashboardController::class)->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// todo ------------------------------------ pengaturan aplikasi -------------------------------------------------
Route::prefix('pengaturan-aplikasi')->controller(PengaturanAplikasiController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard.pengaturan-aplikasi.index');
    Route::get('/umum', 'createUmum')->name('dashboard.pengaturan-aplikasi-umum.create');
    Route::get('/kontak', 'createKontak')->name('dashboard.pengaturan-aplikasi-kontak.create');
    Route::get('/ppdb', 'createPpdb')->name('dashboard.pengaturan-aplikasi-ppdb.create');

    Route::post('/umum', 'storeUmum')->name('dashboard.pengaturan-aplikasi-umum.store');
    Route::post('/kontak', 'storeKontak')->name('dashboard.pengaturan-aplikasi-kontak.store');
    Route::post('/ppdb', 'storePpdb')->name('dashboard.pengaturan-aplikasi-ppdb.store');
});


// todo ------------------------------------ galery foto -------------------------------------------------
Route::get('galery-foto/fetch', [GaleriFotoController::class, 'getLatest'])->name('dashboard.galery-foto.fetch');
Route::resource('galery-foto', GaleriFotoController::class)
    ->parameters(['galery-foto' => 'galeri'])
    ->names([
        'index'     => 'dashboard.galery-foto.index',
        'create'    => 'dashboard.galery-foto.create',
        'store'     => 'dashboard.galery-foto.store',
        'show'      => 'dashboard.galery-foto.show',
        'edit'      => 'dashboard.galery-foto.edit',
        'update'    => 'dashboard.galery-foto.update',
        'destroy'   => 'dashboard.galery-foto.destroy',
    ]);

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

// todo ------------------------------------ guru & staf -------------------------------------------------
Route::get('guru-&-staf/fetch', [GuruDanStafController::class, 'getLatest'])->name('dashboard.guru-staf.fetch');
Route::resource('guru-&-staf', GuruDanStafController::class)
    ->parameters(['guru-&-staf' => 'guruAndStaf'])
    ->names([
        'index'     => 'dashboard.guru-staf.index',
        'create'    => 'dashboard.guru-staf.create',
        'store'     => 'dashboard.guru-staf.store',
        'show'      => 'dashboard.guru-staf.show',
        'edit'      => 'dashboard.guru-staf.edit',
        'update'    => 'dashboard.guru-staf.update',
        'destroy'   => 'dashboard.guru-staf.destroy',
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

// todo ------------------------------------ siswa berprestasi -------------------------------------------------
Route::get('siswa-berprestasi/fetch', [SiswaBerprestasiController::class, 'getLatest'])->name('dashboard.siswa-berprestasi.fetch');
Route::resource('siswa-berprestasi', SiswaBerprestasiController::class)
    ->parameters(['siswa-berprestasi' => 'siswaBerprestasi'])
    ->names([
        'index'     => 'dashboard.siswa-berprestasi.index',
        'create'    => 'dashboard.siswa-berprestasi.create',
        'store'     => 'dashboard.siswa-berprestasi.store',
        'show'      => 'dashboard.siswa-berprestasi.show',
        'edit'      => 'dashboard.siswa-berprestasi.edit',
        'update'    => 'dashboard.siswa-berprestasi.update',
        'destroy'   => 'dashboard.siswa-berprestasi.destroy'
    ]);

// todo ------------------------------------ PPDB -------------------------------------------------
Route::get('penerimaan-peserta-didik-baru/fetch', [PenerimaanSiswaBaruController::class, 'getLatest'])->name('dashboard.penerimaan-peserta-didik-baru.fetch');
Route::resource('penerimaan-peserta-didik-baru', PenerimaanSiswaBaruController::class)
    ->parameters(['penerimaan-peserta-didik-baru' => 'daftarSiswaBaru'])
    ->names([
        'index'     => 'dashboard.penerimaan-peserta-didik-baru.index',
        'create'    => 'dashboard.penerimaan-peserta-didik-baru.create',
        'store'     => 'dashboard.penerimaan-peserta-didik-baru.store',
        'show'      => 'dashboard.penerimaan-peserta-didik-baru.show',
        'edit'      => 'dashboard.penerimaan-peserta-didik-baru.edit',
        'update'    => 'dashboard.penerimaan-peserta-didik-baru.update',
        'destroy'   => 'dashboard.penerimaan-peserta-didik-baru.destroy'
    ]);

// todo ------------------------------------ daftar pertanyaan ppdb -------------------------------------------------
Route::resource('daftar-pertanyaan-ppdb', PertanyaanPenerimaanSiswaController::class)
    ->parameters(['daftar-pertanyaan-ppdb' => 'pertanyaanPendaftaran'])
    ->names([
        'index'     => 'dashboard.daftar-pertanyaan-ppdb.index',
        'create'    => 'dashboard.daftar-pertanyaan-ppdb.create',
        'store'     => 'dashboard.daftar-pertanyaan-ppdb.store',
        'show'      => 'dashboard.daftar-pertanyaan-ppdb.show',
        'edit'      => 'dashboard.daftar-pertanyaan-ppdb.edit',
        'update'    => 'dashboard.daftar-pertanyaan-ppdb.update',
        'destroy'   => 'dashboard.daftar-pertanyaan-ppdb.destroy'
    ]);

