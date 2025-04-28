<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\PertanyaanPendaftaran;
use App\Models\Testimoni;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
    public function dataTestimoni ()
    {
        return (object)[
           [
               'image' => null,
               'position' => 'Alumni 2019',
               'message' => 'Sekolah ini memberikan pengalaman belajar yang luar biasa dan mempersiapkan saya untuk masa depan yang lebih baik. Saya sangat bersyukur bisa menempuh pendidikan di sekolah ini.',
               'name' => 'Ahmad Rizki'
           ],
           [
               'image' => null,
               'position' => 'Alumni 2020',
               'message' => 'Para guru sangat kompeten.',
               'name' => 'Sarah Amelia'
           ],
           [
               'image' => null,
               'position' => 'Alumni 2021',
               'message' => 'Fasilitas sekolah sangat mendukung proses pembelajaran dan pengembangan diri siswa. Kegiatan ekstrakurikuler yang beragam membuat saya bisa mengembangkan bakat dan minat dengan maksimal.',
               'name' => 'Budi Santoso'
           ],
           [
               'image' => null,
               'position' => 'Alumni 2018',
               'message' => 'Lingkungan belajar yang nyaman.',
               'name' => 'Dina Putri'
           ],
           [
               'image' => null,
               'position' => 'Alumni 2022',
               'message' => 'Saya mendapatkan banyak ilmu dan pengalaman berharga selama bersekolah disini. Terima kasih kepada semua guru yang telah membimbing dengan penuh kesabaran dan dedikasi tinggi.',
               'name' => 'Reza Pratama'
           ],
           [
               'image' => null,
               'position' => 'Alumni 2017',
               'message' => 'Sekolah terbaik.',
               'name' => 'Maya Sari'
           ],
           [
               'image' => null,
               'position' => 'Alumni 2017',
               'message' => 'Pengalaman belajar di sekolah ini sangat berkesan dan membentuk karakter saya menjadi pribadi yang lebih baik. Terima kasih atas semua ilmu dan nilai-nilai kehidupan yang diajarkan.',
               'name' => 'Andi Permana'
           ],
           [
               'image' => null,
               'position' => 'Alumni 2017',
               'message' => 'Guru-guru yang profesional.',
               'name' => 'Siti Nurhaliza'
           ],
           [
               'image' => null,
               'position' => 'Alumni 2017',
               'message' => 'Sekolah ini memiliki standar pendidikan yang sangat tinggi dan berhasil mengantarkan para siswanya menuju kesuksesan. Saya bangga bisa menjadi bagian dari sejarah sekolah ini.',
               'name' => 'Indra Kusuma'
           ]
       ];
    }

    public function index () : View
    {
        // * cache 6 how
        $beritaCache = Cache::remember('berita_terbaru', 60*60*6, function() {
            return Berita::with('user:id,name', 'kategory:id,nama')
                    ->where('status', true)
                    ->latest()
                    ->limit(3)
                    ->get();
        });

        $testimoniCache = Cache::remember('testimoni_terbaru', 60*60*6, function() {
            return Testimoni::query()->latest()->limit(9)->get();
        });

        return view('frond.index', [
            'berita_terbaru'    => $beritaCache,
            'testimoni_terbaru' => $testimoniCache,
        ]);
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
        $beritaCache = Cache::remember('daftar_berita', 60*60*6, function() {
            return Berita::with('user:id,name', 'kategory:id,nama')
                    ->where('status', true)
                    ->latest()
                    ->cursorPaginate(10);
        });

        return view('frond.berita', [
            'berita_terbaru'    => $beritaCache
        ]);
    }

    public function findBerita (Berita $berita) : View
    {
        return view('frond.detail-berita', compact('berita'));
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
        $daftarTestimoniCache = Cache::remember('daftar_testimoni', 60*60*6, function() {
            return Testimoni::query()
                        ->latest()
                        ->cursorPaginate(20);
        });

        return view('frond.testimoni', [
            'daftar_testimoni'  => $daftarTestimoniCache
        ]);
    }

    public function siswaPrestasi () : View
    {
        return view('frond.siswa-prestasi');
    }

    public function ppdb () : View
    {
        $pertanyaanPendaftaran = Cache::remember('pertanyaan_pendaftaran', 60*60*6, function() {
            return PertanyaanPendaftaran::query()->get();
        });

        return view('frond.ppdb', [
            'pertanyaan_pendaftaran' => $pertanyaanPendaftaran
        ]);
    }

    public function kontak () : View
    {
        return view('frond.kontak');
    }
}
