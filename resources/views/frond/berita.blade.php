<x-layouts.frond.app
    title="Berita SMK Uyelindo Kupang - Info & Kegiatan Sekolah"
    metaDescription="Baca berita terbaru dari SMK Uyelindo Kupang. Update kegiatan sekolah, prestasi siswa, pengumuman penting, dan informasi akademik lainnya."
    metaKeywords="Berita SMK, Info Sekolah, Kegiatan SMK Uyelindo, Pengumuman Sekolah, Prestasi Siswa, SMK Kupang"
    metaOgTitle="Berita SMK Uyelindo Kupang - Update Kegiatan & Informasi Terkini"
    metaOgDescription="Lihat berita dan informasi terbaru dari SMK Uyelindo Kupang, termasuk kegiatan siswa, pengumuman resmi, dan acara sekolah."
    {{-- metaImage="{{ asset('assets/images/preview-berita.jpg') }}" --}}
    metaUrl="{{ url('/berita') }}"
    metaTwitterTitle="Berita SMK Uyelindo Kupang - Info Terkini Sekolah"
    metaTwitterDescription="Dapatkan informasi terkini dari SMK Uyelindo Kupang seputar kegiatan belajar mengajar, prestasi, dan pengumuman resmi sekolah."
    >
    <x-frond.navbar />

    <section class="bg-white py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="placeholder-image.jpg" alt="Berita" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-gray-500">12 Januari 2024</span>
                        <h3 class="text-xl font-semibold mt-2">Judul Berita</h3>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="inline-block mt-4 text-blue-600 hover:text-blue-800">Baca selengkapnya →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frond.footer />
</x-layouts.frond.app>