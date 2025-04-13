<x-layouts.frond.app
    title="Jurusan SMK Uyelindo Kupang - Program Keahlian Berkualitas"
    metaDescription="Temukan berbagai jurusan atau program keahlian di SMK Uyelindo Kupang yang dirancang untuk menyiapkan siswa siap kerja dan kuliah."
    metaKeywords="Jurusan SMK, Program Keahlian SMK, SMK Uyelindo Kupang, Kompetensi Keahlian, SMK Vokasi, Pendidikan Kejuruan"
    metaOgTitle="Jurusan di SMK Uyelindo Kupang - Program Keahlian Unggulan"
    metaOgDescription="Kenali jurusan-jurusan yang tersedia di SMK Uyelindo Kupang, masing-masing dengan fasilitas dan kurikulum yang mendukung kesuksesan siswa."
    metaImage="{{ asset('assets/images/preview-jurusan.jpg') }}"
    metaUrl="{{ url('/jurusan') }}"
    metaTwitterTitle="Jurusan SMK Uyelindo Kupang - Program Kejuruan & Vokasi"
    metaTwitterDescription="Informasi lengkap tentang program keahlian dan jurusan di SMK Uyelindo Kupang. Didesain untuk menyiapkan lulusan yang kompeten dan siap kerja."
    >
    <x-frond.navbar />

    <!-- Jurusan Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Jurusan Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="RPL" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Rekayasa Perangkat Lunak</h3>
                        <p class="text-gray-600 mb-4">Program keahlian yang fokus pada pengembangan software, aplikasi, dan sistem informasi.</p>
                        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Jurusan Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="TKJ" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Teknik Komputer dan Jaringan</h3>
                        <p class="text-gray-600 mb-4">Program keahlian yang mempelajari tentang perangkat keras komputer dan jaringan.</p>
                        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <!-- Jurusan Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Multimedia" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Multimedia</h3>
                        <p class="text-gray-600 mb-4">Program keahlian yang fokus pada pengembangan konten digital, desain grafis, dan animasi.</p>
                        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frond.footer />
</x-layouts.frond.app>