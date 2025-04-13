<x-layouts.frond.app
    title="Prestasi Siswa SMK Uyelindo Kupang - Pencapaian dan Keberhasilan Siswa"
    metaDescription="Simak pencapaian dan prestasi siswa SMK Uyelindo Kupang yang telah mengukir berbagai keberhasilan dalam bidang akademik maupun non-akademik."
    metaKeywords="Prestasi Siswa SMK Uyelindo, Pencapaian Akademik Siswa, Keberhasilan Siswa SMK Kupang, Siswa Berprestasi"
    metaOgTitle="Prestasi Siswa SMK Uyelindo Kupang"
    metaOgDescription="Temukan berbagai prestasi luar biasa yang telah diraih oleh siswa-siswa SMK Uyelindo Kupang dalam berbagai bidang, baik akademik maupun non-akademik."
    {{-- metaImage="{{ asset('assets/images/preview-prestasi.jpg') }}" --}}
    metaUrl="{{ url('/siswa-prestasi') }}"
    metaTwitterTitle="Prestasi Siswa SMK Uyelindo Kupang"
    metaTwitterDescription="Prestasi dan pencapaian siswa SMK Uyelindo Kupang dalam berbagai bidang, baik akademik maupun non-akademik."
    >
    <x-frond.navbar />

    <!-- Prestasi Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Siswa Berprestasi</h2>
                <p class="text-gray-600">Prestasi gemilang yang telah diraih oleh siswa-siswi kami</p>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Prestasi Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://source.unsplash.com/random/800x600/?achievement,trophy" alt="Prestasi 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Juara 1 Olimpiade Matematika</h3>
                        <p class="text-gray-600 mb-4">Ahmad Fadhil - Kelas XII IPA 1</p>
                        <p class="text-gray-700">Meraih juara pertama dalam Olimpiade Matematika tingkat Nasional tahun 2023</p>
                    </div>
                </div>
    
                <!-- Prestasi Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://source.unsplash.com/random/800x600/?achievement,medal" alt="Prestasi 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Juara 2 Lomba Karya Ilmiah</h3>
                        <p class="text-gray-600 mb-4">Siti Aisyah - Kelas XI IPA 2</p>
                        <p class="text-gray-700">Meraih juara kedua dalam Lomba Karya Ilmiah Remaja tingkat Provinsi</p>
                    </div>
                </div>
    
                <!-- Prestasi Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://source.unsplash.com/random/800x600/?achievement,competition" alt="Prestasi 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Juara 1 Lomba Debat Bahasa Inggris</h3>
                        <p class="text-gray-600 mb-4">Muhammad Rizki - Kelas X IPS 1</p>
                        <p class="text-gray-700">Meraih juara pertama dalam Kompetisi Debat Bahasa Inggris antar SMA</p>
                    </div>
                </div>
            </div>
    
            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
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
