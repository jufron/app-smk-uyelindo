<x-layouts.frond.app
    title="Fasilitas SMK Uyelindo Kupang - Sarana & Prasarana Lengkap untuk Pendidikan Berkualitas"
    metaDescription="SMK Uyelindo Kupang menyediakan fasilitas pendidikan modern seperti ruang praktik, laboratorium, perpustakaan, dan sarana olahraga untuk mendukung kegiatan belajar siswa."
    metaKeywords="Fasilitas SMK Uyelindo, Sarana Sekolah, Laboratorium, Perpustakaan, Ruang Praktik, Sekolah Modern Kupang"
    metaOgTitle="Fasilitas Unggulan SMK Uyelindo Kupang"
    metaOgDescription="Lihat berbagai fasilitas yang dimiliki SMK Uyelindo Kupang dalam menunjang pembelajaran siswa secara optimal dan profesional."
    {{-- metaImage="{{ asset('assets/images/preview-fasilitas.jpg') }}" --}}
    metaUrl="{{ url('/fasilitas') }}"
    metaTwitterTitle="Fasilitas Lengkap SMK Uyelindo Kupang"
    metaTwitterDescription="Jelajahi fasilitas modern SMK Uyelindo Kupang yang mendukung proses belajar mengajar secara efektif."
    >
    <x-frond.navbar />

    <!-- Fasilitas Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Fasilitas Sekolah</h2>
                <p class="text-gray-600">Berbagai fasilitas modern untuk mendukung proses pembelajaran</p>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Laboratorium Komputer -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3" alt="Laboratorium Komputer" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Laboratorium Komputer</h3>
                        <p class="text-gray-600">Dilengkapi dengan komputer modern dan software terkini untuk praktik pemrograman dan desain.</p>
                    </div>
                </div>
    
                <!-- Perpustakaan -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da" alt="Perpustakaan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Perpustakaan</h3>
                        <p class="text-gray-600">Koleksi buku lengkap dengan suasana nyaman untuk belajar dan membaca.</p>
                    </div>
                </div>
    
                <!-- Laboratorium Jaringan -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31" alt="Laboratorium Jaringan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Laboratorium Jaringan</h3>
                        <p class="text-gray-600">Fasilitas praktik jaringan komputer dengan peralatan standar industri.</p>
                    </div>
                </div>
    
                <!-- Ruang Praktik -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1598302936625-6075fbd98dd8" alt="Ruang Praktik" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Ruang Praktik</h3>
                        <p class="text-gray-600">Ruangan khusus untuk praktik kejuruan dengan peralatan lengkap.</p>
                    </div>
                </div>
    
                <!-- Lapangan Olahraga -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1543633550-f431af584afd" alt="Lapangan Olahraga" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Lapangan Olahraga</h3>
                        <p class="text-gray-600">Fasilitas olahraga outdoor untuk kegiatan fisik dan ekstrakurikuler.</p>
                    </div>
                </div>
    
                <!-- Ruang Multimedia -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c" alt="Ruang Multimedia" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Ruang Multimedia</h3>
                        <p class="text-gray-600">Studio multimedia modern untuk produksi konten digital dan editing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frond.footer />
</x-layouts.frond.app>