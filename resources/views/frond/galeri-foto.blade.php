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
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Galeri Foto</h2>
                <p class="text-gray-600">Dokumentasi kegiatan dan momen berkesan di SMK Uyelindo Kupang</p>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Gallery Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://source.unsplash.com/random/800x600/?school,education" alt="Kegiatan 1" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Judul Kegiatan 1</h3>
                        <p class="text-gray-600 text-sm">Deskripsi singkat tentang kegiatan atau momen yang diabadikan dalam foto ini.</p>
                    </div>
                </div>
    
                <!-- Gallery Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://source.unsplash.com/random/800x600/?school,education" alt="Kegiatan 2" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Judul Kegiatan 2</h3>
                        <p class="text-gray-600 text-sm">Deskripsi singkat tentang kegiatan atau momen yang diabadikan dalam foto ini.</p>
                    </div>
                </div>
    
                <!-- Gallery Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://source.unsplash.com/random/800x600/?school,education" alt="Kegiatan 3" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Judul Kegiatan 3</h3>
                        <p class="text-gray-600 text-sm">Deskripsi singkat tentang kegiatan atau momen yang diabadikan dalam foto ini.</p>
                    </div>
                </div>
            </div>
    
            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <nav class="inline-flex rounded-md shadow">
                    <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Previous
                    </a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        1
                    </a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        2
                    </a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        3
                    </a>
                    <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Next
                    </a>
                </nav>
            </div>
        </div>
    </section>
    
    <x-frond.footer />
</x-layouts.frond.app>