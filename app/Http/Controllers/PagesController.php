<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function index () : View
    {
        return view('frond.index');
    }
    
    public function sejarah () : View
    {
        return view('frond.sejarah');
    }
    
    public function visiMisi () : View
    {
        return view('frond.visi-misi');
    }

    public function strukturOrganisasi () : View
    {
        return view('frond.struktur-organisasi');
    }
    
    public function berita () : View
    {
        return view('frond.berita');
    }

    public function beritaDetail ()
    {
        return 'hello detail berita';
    }

    public function jurusan () : View
    {
        return view('frond.jurusan');
    }

    public function galeriFoto () : View
    {
        return view('frond.galeri-foto');
    }
    
    public function guruDanStaf () : View
    {
        return view('frond.guru-&-staf');
    }

    public function fasilitas () : View
    {
        return view('frond.fasilitas');
    }

    public function testimoni () : View
    {
        return view('frond.testimoni');
    }

    public function siswaPrestasi () : View
    {
        return view('frond.siswa-prestasi');
    }

    public function ppdb () : View
    {
        return view('frond.ppdb');
    }

    public function kontak () : View
    {
        return view('frond.kontak');
    }
}
