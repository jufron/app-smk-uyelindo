<x-layouts.frond.app
    title="Galeri Foto SMK Uyelindo Kupang - Dokumentasi Kegiatan Sekolah"
    metaDescription="Lihat galeri foto resmi SMK Uyelindo Kupang. Dokumentasi berbagai kegiatan siswa, guru, dan event sekolah yang inspiratif."
    metaKeywords="Galeri SMK, Foto Sekolah, Dokumentasi Kegiatan, Kegiatan SMK Uyelindo, Foto Siswa, Event Sekolah, SMK Kupang"
    metaOgTitle="Galeri Foto SMK Uyelindo Kupang"
    metaOgDescription="Kumpulan foto kegiatan dan event di SMK Uyelindo Kupang. Saksikan semangat dan prestasi siswa melalui dokumentasi visual kami."
    {{-- metaImage="{{ asset('assets/images/preview-galeri.jpg') }}" --}}
    metaUrl="{{ url('/galeri') }}"
    metaTwitterTitle="Galeri SMK Uyelindo Kupang - Dokumentasi Kegiatan Sekolah"
    metaTwitterDescription="Kumpulan foto dari kegiatan belajar mengajar, lomba, upacara, dan event lainnya di SMK Uyelindo Kupang."
    >
    <x-frond.navbar />

    <!-- Galeri Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center my-12" data-aos="fade-up">
                <h2 class="text-5xl font-bold text-gray-800 mb-5">Galeri Foto</h2>
                <p class="text-gray-600">Dokumentasi kegiatan dan momen berkesan di SMK Uyelindo Kupang</p>
            </div>

            <div class="columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-3 lg:columns-4 [&>img:not(:first-child)]:mt-8">
                @forelse ($daftar_galeri_foto as $galeri)
                <img
                    data-aos="zoom-in"
                    src="{{ asset("storage/$galeri->foto") }}"
                    data-aos-delay="{{ $loop->iteration * 100 }}"
                    alt="Galeri Foto SMK Uyelindo Kupang"
                />
                @empty
                <p class="text-center text-gray-500">Belum ada foto di galeri.</p>
                @endforelse
            </div>

            {{-- link --}}
            {{ $daftar_galeri_foto->links() }}
            {{-- link --}}
        </div>
    </section>

    <x-frond.footer />
    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="100" />
</x-layouts.frond.app>
