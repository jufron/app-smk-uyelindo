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

    {{-- ? Hero background to show transparent navbar --}}
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
    {{-- ? Hero background to show transparent navbar --}}

    {{-- ? sambutan kepala sekolah --}}
    <section class="flex pt-12 px-6 md:px-20 items-center justify-center bg-hero md:h-screen overflow-hidden">
        <div class="flex flex-col gap-6 md:flex-row items-center max-w-8xl">
            <div class="w-full md:w-1/2 lg:pr-32">
                <h2 class="text-4xl lg:text-5xl text-center md:text-left text-yellow-300 leading-tight font-semibold">
                    Sambutan Kepala Sekolah
                </h2>
                <h3 class="mt-10 md:mt-10 text-md lg:text-xl md:text-left text-gray-700 font-light tracking-wider leading-relaxed">
                    Selamat datang di website resmi SMK Uyelindo Kupang. Sebagai kepala sekolah, saya merasa bangga
                    menyambut Anda untuk mengenal lebih dekat lingkungan pembelajaran kami yang berbasis vokasi dan
                    berorientasi pada dunia kerja. Kami berkomitmen mencetak lulusan yang unggul, terampil, dan siap bersaing
                    di era industri modern.
                </h3>
                <p class="mt-10 text-gray-800 font-medium text-md">
                    <span class="block">Hormat kami,</span>
                    <span class="block mt-1">Suryani Benga Tokan S.Kom</span>
                    <span class="block">Kepala SMK Uyelindo Kupang</span>
                </p>
            </div>
            <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                <img src="https://loremflickr.com/g/600/600/girl" alt="Kepala Sekolah SMK Uyelindo Kupang" class="rounded-xl shadow-md max-h-[500px] object-cover">
            </div>
        </div>
    </section>
    {{-- ? sambutan kepala sekolah --}}

    {{-- ? testimonial --}}
    <section class="container mx-auto max-w-6xl px-4 py-10">
        <h3 class="text-gray-800 py-10 text-5xl text-center font-bold">Apa Kata Mereka?</h3>
        <div class="md:columns-2 lg:columns-3 gap-6 p-4 sm:p-1 mt-2">
            @foreach ($testimonials as $testimoni)
            <div class="animate-in zoom-in duration-200">
                <div
                    class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-white hover:ring-2 ring-gray-300 hover:ring-yellow-300 transform duration-200 hover:shadow-yellow-300 hover:shadow-md z-0 relative">
                    <div class="flex flex-col break-inside-avoid-page z-0 relative">
                        <div class="flex justify-between">
                            <div class="flex space-x-6">
                                <div class="flex space-x-4 flex-shrink-0 w-52">
                                    <img src="https://randomuser.me/api/portraits/men/51.jpg"
                                        class="w-10 h-10 rounded-full">
                                    <div>
                                        <div class="font-semibold">
                                            {{ $testimoni['name'] }}
                                        </div>
                                        <div class="text-sm">
                                            {{ $testimoni['position'] }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <a href="#" target="_blank" class="whitespace-pre-line break-inside-avoid-page">
                            {{ $testimoni['message'] }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
        <div class="flex justify-center mt-10">
            <a href="{{ route('testimoni') }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
                Lihat Semua Testimoni
            </a>
        </div>
    </section>
    {{-- ? testimonial --}}

    {{-- ? berita --}}
    <section>
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <!-- Component -->
            <div class="flex flex-col items-center">
            <h2 class="text-center text-3xl font-bold md:text-5xl">Berita Terbaru Sekolah</h2>
              <p class="mb-8 mt-4 text-center text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16">Informasi dan kegiatan terkini seputar sekolah kami</p>
                <!-- Content -->
                <div class="mb-6 grid gap-4 sm:grid-cols-2 sm:justify-items-stretch md:mb-10 md:grid-cols-3 lg:mb-12 lg:gap-6">
                    <a href="javascript:void(0);" class="flex flex-col gap-4 rounded-md border border-solid border-yellow-400 px-4 py-8 md:p-0">
                        <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" alt="" class="h-60 object-cover" />
                        <div class="px-6 py-4">
                        <p class="mb-4 text-sm font-semibold uppercase text-gray-500">
                            lifestyle
                        </p>
                        <p class="mb-4 text-xl font-semibold">
                            The latest news with Flowspark
                        </p>
                        <p class="mb-6 text-sm text-gray-500 sm:text-base lg:mb-8">
                            Lorem ipsum dolor sit amet,  elit ut aliquam, purus sit
                            amet luctus venenatis elit ut aliquam, purus sit amet luctus
                            venenatis
                        </p>
                        <div class="flex">
                            <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPLaceholder%20Image%20Secondary.svg?alt=media&token=b8276192-19ff-4dd9-8750-80bc5f7d6844" alt="" class="mr-4 h-10 w-10 rounded-full object-cover" />
                            <div class="flex flex-col">
                            <h6 class="text-base font-bold">Laila Bahar</h6>
                            <div class="flex flex-col lg:flex-row">
                                <p class="text-sm text-gray-500">Sept 28, 2022</p>
                                <p class="mx-2 hidden text-sm text-gray-500 lg:flex">
                                -
                                </p>
                                <p class="text-sm text-gray-500">6 mins read</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </a>
                    <a href="javascript:void(0);" class="flex flex-col gap-4 rounded-md border border-solid border-yellow-400 px-4 py-8 md:p-0">
                        <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" alt="" class="h-60 object-cover" />
                        <div class="px-6 py-4">
                        <p class="mb-4 text-sm font-semibold uppercase text-gray-500">lifestyle</p>
                        <p class="mb-4 text-xl font-semibold">The latest news with Flowspark</p>
                        <p class="mb-6 text-sm text-gray-500 sm:text-base lg:mb-8">
                            Lorem ipsum dolor sit amet,  elit ut aliquam, purus sit
                            amet luctus venenatis elit ut aliquam, purus sit amet luctus
                            venenatis
                        </p>
                        <div class="flex">
                            <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPLaceholder%20Image%20Secondary.svg?alt=media&token=b8276192-19ff-4dd9-8750-80bc5f7d6844" alt="" class="mr-4 h-10 w-10 rounded-full object-cover" />
                            <div class="flex flex-col">
                            <h6 class="text-base font-bold">Laila Bahar</h6>
                            <div class="flex flex-col lg:flex-row">
                                <p class="text-sm text-gray-500">Sept 28, 2022</p>
                                <p class="mx-2 hidden text-sm text-gray-500 lg:flex">
                                -
                                </p>
                                <p class="text-sm text-gray-500">6 mins read</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </a>
                    <a href="javascript:void(0);" class="flex flex-col gap-4 rounded-md border border-solid border-yellow-400 px-4 py-8 md:p-0">
                        <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" alt="" class="h-60 object-cover" />
                        <div class="px-6 py-4">
                        <p class="mb-4 text-sm font-semibold uppercase text-gray-500">lifestyle</p>
                        <p class="mb-4 text-xl font-semibold">The latest news with Flowspark</p>
                        <p class="mb-6 text-sm text-gray-500 sm:text-base lg:mb-8">
                            Lorem ipsum dolor sit amet,  elit ut aliquam, purus sit
                            amet luctus venenatis elit ut aliquam, purus sit amet luctus
                            venenatis
                        </p>
                        <div class="flex">
                            <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPLaceholder%20Image%20Secondary.svg?alt=media&token=b8276192-19ff-4dd9-8750-80bc5f7d6844" alt="" class="mr-4 h-10 w-10 rounded-full object-cover" />
                            <div class="flex flex-col">
                            <h6 class="text-base font-bold">Laila Bahar</h6>
                            <div class="flex flex-col lg:flex-row">
                                <p class="text-sm text-gray-500">Sept 28, 2022</p>
                                <p class="mx-2 hidden text-sm text-gray-500 lg:flex">
                                -
                                </p>
                                <p class="text-sm text-gray-500">6 mins read</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </a>
                </div>
                <!-- Button -->
                <a href="{{ route('berita') }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
                    Berita Lebih
                </a>
            </div>
        </div>
    </section>
    {{-- ? berita --}}

    {{-- ? galeri foto --}}
    <section class="container mx-auto max-w-6xl px-4 py-10">
        <h3 class="text-gray-800 py-10 text-5xl text-center font-bold">Galery Foto</h3>
        <div class="columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-3 lg:columns-4 [&>img:not(:first-child)]:mt-8">
            <img src="https://images.unsplash.com/photo-1472491235688-bdc81a63246e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxjYXR8ZW58MHwwfHx8MTcyMTgyMjE3OXww&ixlib=rb-4.0.3&q=80&w=1080"/>
            <img src="https://images.unsplash.com/photo-1478098711619-5ab0b478d6e6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxjYXR8ZW58MHwwfHx8MTcyMTgyMjE3OXww&ixlib=rb-4.0.3&q=80&w=1080"/>
            <img src="https://images.unsplash.com/photo-1668491195456-9341d9cf3977?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxjYXQlMjB3aGl0ZXxlbnwwfDF8fHwxNzIxODIyMzU3fDA&ixlib=rb-4.0.3&q=80&w=1080"/>
            <img src="https://images.unsplash.com/photo-1515002246390-7bf7e8f87b54?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxM3x8Y2F0fGVufDB8MHx8fDE3MjE4MjIxNzl8MA&ixlib=rb-4.0.3&q=80&w=1080"/>
            <img src="https://images.unsplash.com/photo-1511044568932-338cba0ad803?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxjYXR8ZW58MHwwfHx8MTcyMTgyMjE3OXww&ixlib=rb-4.0.3&q=80&w=1080"/>
            <img src="https://images.unsplash.com/photo-1475518112798-86ae358241eb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMHx8Y2F0fGVufDB8MHx8fDE3MjE4MjIxNzl8MA&ixlib=rb-4.0.3&q=80&w=1080"/>
            <img src="https://images.unsplash.com/photo-1515002246390-7bf7e8f87b54?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxM3x8Y2F0fGVufDB8MHx8fDE3MjE4MjIxNzl8MA&ixlib=rb-4.0.3&q=80&w=1080"/>
        </div>

        <div class="flex justify-center mt-10">
            <a href="{{ route('galeri-foto') }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
                Lihat Semua di Galery Foto
            </a>
        </div>
    </section>
    {{-- ? galeri foto --}}

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
