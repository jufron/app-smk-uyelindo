<x-layouts.frond.app
    title="SMK Uyelindo Kupang - Sekolah Kejuruan Unggulan di NTT"
    metaDescription="Selamat datang di website resmi SMK Uyelindo Kupang. Menyediakan informasi lengkap mengenai program keahlian, pendaftaran siswa baru, berita terbaru, serta kegiatan sekolah."
    metaKeywords="SMK Uyelindo, SMK Kupang, Sekolah Kejuruan NTT, Pendaftaran SMK, Vokasi, Pendidikan Kupang"
    metaOgTitle="SMK Uyelindo Kupang - Sekolah Kejuruan Unggulan di NTT"
    metaOgDescription="SMK Uyelindo Kupang adalah sekolah kejuruan terbaik dengan berbagai jurusan dan fasilitas modern di NTT."
    {{-- metaImage="{{ asset('assets/images/preview.jpg') }}" --}}
    metaUrl="{{ url('/') }}"
    metaTwitterTitle="SMK Uyelindo Kupang - Info Pendaftaran, Jurusan & Berita"
    metaTwitterDescription="Website resmi SMK Uyelindo Kupang. Informasi lengkap tentang jurusan, berita sekolah, serta pendaftaran siswa baru."
>
    <x-frond.navbar />

    <!-- Hero background to show transparent navbar -->
    <section class="bg-gradient-to-r from-purple-800 to-indigo-700 h-screen flex items-center justify-center">
        <div class="text-center text-white px-4">
            <h1 class="md:mt-36 text-4xl font-extrabold sm:text-5xl md:text-6xl">
                SMK Uyelino Kupang
            </h1>
            <p class="mt-3 max-w-lg mx-auto text-base text-gray-200 sm:text-lg md:mt-5 md:text-xl">
                Selamat datang Web SMK Uyelindo Kupang – tempat di mana semangat belajar bertemu dengan keterampilan nyata.
            </p>
            <div class="mt-10">
                <a href="#" class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-white hover:bg-gray-100 md:py-4 md:text-lg md:px-10">
                    Daftar
                </a>
            </div>
        </div>
    </section>

    <section class="hero bg-cover bg-center text-white py-24">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di SMK Uyelindo Kupang</h1>
            <p class="text-xl mb-8">Sekolah Kejuruan Unggulan di Kupang yang Menyiapkan Siswa Siap Kerja & Siap Kuliah</p>
            <div class="flex justify-center gap-4">
                <a href="/pendaftaran" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg">Daftar Sekarang</a>
                <a href="/jurusan" class="bg-white hover:bg-gray-100 text-blue-600 font-bold py-3 px-6 rounded-lg">Lihat Jurusan</a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Mengapa Memilih SMK Uyelindo?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Kurikulum Industri</h3>
                    <p class="text-gray-600">Pembelajaran disesuaikan dengan kebutuhan industri terkini</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Fasilitas Modern</h3>
                    <p class="text-gray-600">Dilengkapi laboratorium dan peralatan praktik standar industri</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Kerjasama Industri</h3>
                    <p class="text-gray-600">Bermitra dengan perusahaan ternama untuk prakerin dan rekrutmen</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Program Keahlian Unggulan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    {{-- <img src="/assets/images/jurusan-rpl.jpg" alt="Rekayasa Perangkat Lunak" class="w-full h-48 object-cover"> --}}
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Rekayasa Perangkat Lunak</h3>
                        <p class="text-gray-600 mb-4">Pelajari pengembangan aplikasi, website, dan mobile apps</p>
                        <a href="/jurusan/rpl" class="text-blue-600 font-semibold hover:text-blue-800">Pelajari lebih lanjut →</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    {{-- <img src="/assets/images/jurusan-tkj.jpg" alt="Teknik Komputer dan Jaringan" class="w-full h-48 object-cover"> --}}
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Teknik Komputer dan Jaringan</h3>
                        <p class="text-gray-600 mb-4">Kuasai instalasi jaringan, server, dan keamanan sistem</p>
                        <a href="/jurusan/tkj" class="text-blue-600 font-semibold hover:text-blue-800">Pelajari lebih lanjut →</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    {{-- <img src="/assets/images/jurusan-mm.jpg" alt="Multimedia" class="w-full h-48 object-cover"> --}}
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Multimedia</h3>
                        <p class="text-gray-600 mb-4">Kembangkan kreativitas dalam desain grafis dan video editing</p>
                        <a href="/jurusan/multimedia" class="text-blue-600 font-semibold hover:text-blue-800">Pelajari lebih lanjut →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">Mulai Perjalanan Pendidikanmu di SMK Uyelindo</h2>
            <p class="text-xl mb-8">Daftar sekarang dan raih masa depan cerahmu bersama kami</p>
            <a href="/pendaftaran" class="bg-white text-blue-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-lg inline-block">Daftar Sekarang</a>
        </div>
    </section>
    <x-frond.footer />
</x-layouts.frond.app>
