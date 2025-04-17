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
    <x-slot:myStyle>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </x-slot:myStyle>

    <x-frond.navbar />

    {{-- ? Hero background to show transparent navbar --}}
    <section class="bg-gradient-to-r from-yellow-900 to-yellow-950 h-screen flex items-center justify-center">
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
                <img 
                    src="https://loremflickr.com/g/600/600/girl" 
                    alt="Kepala Sekolah SMK Uyelindo Kupang" 
                    class="rounded-xl shadow-md max-h-[500px] object-cover"
                    loading="lazy"
                />
            </div>
        </div>
    </section>
    {{-- ? sambutan kepala sekolah --}}

    {{-- ? keunggulan --}}
    <section id="features" class="px-2 space-y-6 py-8 md:py-12 lg:py-24 max-w-5xl mx-auto">
        <div class="mx-auto flex max-w-[58rem] flex-col items-center mb-20 space-y-4 text-center">
            <h2 class="font-heading text-3xl leading-[1.1] sm:text-3xl md:text-5xl">Keunggulan Kami</h2>
            <p class="max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">
                SMK Uyelindo Kupang memiliki berbagai keunggulan yang menjadikan kami pilihan tepat untuk pendidikan kejuruan Anda
            </p>
        </div>
        <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3">
            <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <div class="space-y-2">
                        <h3 class="font-bold">Fasilitas Modern</h3>
                        <p class="text-sm text-muted-foreground">Dilengkapi dengan laboratorium komputer, bengkel praktik, dan perpustakaan digital untuk mendukung pembelajaran</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <div class="space-y-2">
                        <h3 class="font-bold">Tenaga Pengajar Profesional</h3>
                        <p class="text-sm text-muted-foreground">Guru-guru berpengalaman dan tersertifikasi dalam bidangnya masing-masing</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <div class="space-y-2">
                        <h3 class="font-bold">Kerjasama Industri</h3>
                        <p class="text-sm text-muted-foreground">Menjalin kerjasama dengan berbagai perusahaan untuk program magang dan penempatan kerja</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <div class="space-y-2">
                        <h3 class="font-bold">Program Sertifikasi</h3>
                        <p class="text-sm text-muted-foreground">Menyediakan program sertifikasi kompetensi yang diakui secara nasional dan internasional</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <div class="space-y-2">
                        <h3 class="font-bold">Ekstrakurikuler Beragam</h3>
                        <p class="text-sm text-muted-foreground">Menyediakan berbagai kegiatan ekstrakurikuler untuk mengembangkan bakat dan minat siswa</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <div class="space-y-2">
                        <h3 class="font-bold">Lingkungan Kondusif</h3>
                        <p class="text-sm text-muted-foreground">Suasana belajar yang nyaman dan aman dengan fasilitas pendukung yang lengkap</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ? keunggulan --}}

    {{-- ? program keahlian --}}
    <section>
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <!-- Title -->
            <div class="mx-auto flex max-w-3xl flex-col items-center text-center">
                <h2 class="text-3xl font-bold md:text-5xl">
                Program Keahlian Unggulan SMK
                </h2>
                <p class="mx-auto mb-8 mt-4 text-gray-500 md:mb-12">
                Pilih program keahlian yang sesuai dengan minat dan bakatmu untuk meraih masa depan yang cerah. Kami menyediakan program keahlian yang relevan dengan kebutuhan industri.
                </p>
            </div>
            <!-- Content -->
            <ul class="grid gap-5 sm:grid-cols-2 md:gap-4">
                <!-- Item -->
                <li class="rounded-md bg-yellow-100">
                    <img 
                        src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" 
                        alt="Teknik Komputer dan Jaringan" 
                        class="w-full object-cover rounded-lg"
                        loading="lazy"
                    />
                    <!-- Divider -->
                    <div class="p-8">
                        <p class="mb-3 text-2xl font-semibold">
                            Teknik Komputer dan Jaringan
                        </p>
                        <p class="text-sm text-gray-500">
                            Program keahlian yang membekali siswa dengan keterampilan di bidang teknologi informasi, jaringan komputer, dan sistem keamanan digital. Lulusan TKJ sangat dicari oleh industri dengan peluang karir yang luas sebagai network engineer, system administrator, atau teknisi IT profesional dengan prospek yang bagus.
                        </p>
                    </div>
                </li>
                <!-- Item -->
                <li class="rounded-md bg-yellow-100">
                    <img 
                        src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" 
                        alt="Teknik Komputer dan Jaringan" 
                        class="w-full object-cover rounded-lg"
                        loading="lazy"
                    />
                    <div class="p-8">
                        <!-- Divider -->
                        <p class="mb-3 text-2xl font-semibold">
                            Rekayasa Perangkat Lunak
                        </p>
                        <p class="text-sm text-gray-500">
                            Program keahlian yang fokus pada pengembangan aplikasi, website, dan software modern. Siswa akan mempelajari bahasa pemrograman terkini, database, dan metodologi pengembangan perangkat lunak profesional. Lulusan RPL memiliki peluang karir yang sangat menjanjikan sebagai software developer, web programmer, atau mobile app developer.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    {{-- ? program keahlian --}}

    {{-- ? testimonial --}}
    <section class="bg-slate-50">
        <div class="container mx-auto max-w-6xl px-4 py-10">
            <h3 class="text-gray-800 py-10 text-5xl text-center font-bold">Apa Kata Mereka?</h3>
            <div class="md:columns-2 lg:columns-3 gap-6 p-4 sm:p-1 mt-2">
                @foreach ($testimonials as $testimoni)
                <div class="animate-in zoom-in duration-200">
                    <div class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-white hover:ring-2 ring-yellow-200 hover:ring-yellow-300 transform duration-200 hover:shadow-yellow-300 hover:shadow-md z-0 relative">
                        <div class="flex flex-col break-inside-avoid-page z-0 relative">
                            <div class="flex justify-between">
                                <div class="flex space-x-6">
                                    <div class="flex space-x-4 flex-shrink-0 w-52">
                                        <img 
                                            src="https://randomuser.me/api/portraits/men/51.jpg"
                                            class="w-10 h-10 rounded-full"
                                            loading="lazy"
                                        />
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
        
                            <p class="whitespace-pre-line break-inside-avoid-page">
                                {{ $testimoni['message'] }}
                            </p>
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
        </div>
    </section>
    {{-- ? testimonial --}}

    {{-- ? berita --}}
    <section>
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <div class="flex flex-col items-center">
            <h2 class="text-center text-3xl font-bold md:text-5xl">Berita Terbaru Sekolah</h2>
              <p class="mb-8 mt-4 text-center text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16">Informasi dan kegiatan terkini seputar sekolah kami</p>
                <!-- Content -->
                <div class="mb-6 grid gap-4 sm:grid-cols-2 sm:justify-items-stretch md:mb-10 md:grid-cols-3 lg:mb-12 lg:gap-6">
                    <a href="{{ route('berita.detail') }}" class="flex flex-col gap-4 rounded-md border border-solid border-yellow-400 px-4 py-8 md:p-0">
                        <img 
                            src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" 
                            alt="" 
                            class="h-60 object-cover"
                            loading="lazy"
                        />
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
                    <a href="{{ route('berita.detail') }}" class="flex flex-col gap-4 rounded-md border border-solid border-yellow-400 px-4 py-8 md:p-0">
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
                    <a href="{{ route('berita.detail') }}" class="flex flex-col gap-4 rounded-md border border-solid border-yellow-400 px-4 py-8 md:p-0">
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
    <section class="bg-slate-50">
        <div class="container mx-auto max-w-6xl px-4 py-10">
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
        </div>
    </section>
    {{-- ? galeri foto --}}

    {{-- ? guru & staf --}}
    <section>
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
          <!-- Title -->
          <h2 class="text-center text-3xl font-bold md:text-5xl">Guru & Staf Kami</h2>
          <p class="mx-auto mb-8 mt-4 text-center text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16">
            Kenali para pendidik dan staf dedikasi kami yang berkomitmen untuk memberikan pendidikan berkualitas
          </p>
      
          <!-- Swiper Container -->
          <div class="swiper guruStafSlider">
            <div class="swiper-wrapper">
              <!-- Setiap .swiper-slide adalah satu card -->
              <!-- Contoh slide -->
              <div class="swiper-slide">
                <div class="mx-auto flex w-full flex-col items-center gap-4 py-8 text-center md:px-8 md:py-4 lg:px-12">
                  <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074"
                    alt=""
                    class="mb-4 inline-block h-40 w-40 rounded-full object-cover" />
                  <p class="font-bold">John Robert</p>
                  <p class="text-center text-sm text-gray-500">Webflow Developer</p>
                  <div class="mt-4 flex">
                    <a href="#" class="mr-2 inline-block h-8 w-8"><img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947193e6cf6a_FacebookLogo%20(4).svg" alt="" /></a>
                    <a href="#" class="inline-block h-8 w-8"><img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a94e916e6cf66_InstagramLogo%20(4).svg" alt="" /></a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="mx-auto flex w-full flex-col items-center gap-4 py-8 text-center md:px-8 md:py-4 lg:px-12">
                    <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" alt="" class="mb-4 inline-block h-40 w-40 rounded-full object-cover " />
                    <p class="font-bold">Annisyah Matah</p>
                    <p class="text-center text-sm text-gray-500">
                      Webflow Developer
                    </p>
                    <div class="mt-4 flex">
                      <a href="javascript:void(0);" class="mr-2 inline-block h-8 w-8 max-w-full text-black">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947193e6cf6a_FacebookLogo%20(4).svg" alt="" class="inline-block" />
                      </a>
                      <a href="javascript:void(0);" class="inline-block h-8 w-8 max-w-full text-black">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a94e916e6cf66_InstagramLogo%20(4).svg" alt="" class="inline-block" />
                      </a>
                    </div>
                  </div>
              </div>
      
              <div class="swiper-slide">
                <div class="mx-auto flex w-full flex-col items-center gap-4 py-8 text-center md:px-8 md:py-4 lg:px-12">
                  <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074"
                    alt=""
                    class="mb-4 inline-block h-40 w-40 rounded-full object-cover" />
                  <p class="font-bold">John Robert</p>
                  <p class="text-center text-sm text-gray-500">Webflow Developer</p>
                  <div class="mt-4 flex">
                    <a href="#" class="mr-2 inline-block h-8 w-8"><img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947193e6cf6a_FacebookLogo%20(4).svg" alt="" /></a>
                    <a href="#" class="inline-block h-8 w-8"><img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a94e916e6cf66_InstagramLogo%20(4).svg" alt="" /></a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="mx-auto flex w-full flex-col items-center gap-4 py-8 text-center md:px-8 md:py-4 lg:px-12">
                    <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" alt="" class="mb-4 inline-block h-40 w-40 rounded-full object-cover " />
                    <p class="font-bold">Annisyah Matah</p>
                    <p class="text-center text-sm text-gray-500">
                      Webflow Developer
                    </p>
                    <div class="mt-4 flex">
                      <a href="javascript:void(0);" class="mr-2 inline-block h-8 w-8 max-w-full text-black">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947193e6cf6a_FacebookLogo%20(4).svg" alt="" class="inline-block" />
                      </a>
                      <a href="javascript:void(0);" class="inline-block h-8 w-8 max-w-full text-black">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a94e916e6cf66_InstagramLogo%20(4).svg" alt="" class="inline-block" />
                      </a>
                    </div>
                  </div>
              </div>
      
              <div class="swiper-slide">
                <div class="mx-auto flex w-full flex-col items-center gap-4 py-8 text-center md:px-8 md:py-4 lg:px-12">
                  <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074"
                    alt=""
                    class="mb-4 inline-block h-40 w-40 rounded-full object-cover" />
                  <p class="font-bold">John Robert</p>
                  <p class="text-center text-sm text-gray-500">Webflow Developer</p>
                  <div class="mt-4 flex">
                    <a href="#" class="mr-2 inline-block h-8 w-8"><img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947193e6cf6a_FacebookLogo%20(4).svg" alt="" /></a>
                    <a href="#" class="inline-block h-8 w-8"><img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a94e916e6cf66_InstagramLogo%20(4).svg" alt="" /></a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="mx-auto flex w-full flex-col items-center gap-4 py-8 text-center md:px-8 md:py-4 lg:px-12">
                    <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" alt="" class="mb-4 inline-block h-40 w-40 rounded-full object-cover " />
                    <p class="font-bold">Annisyah Matah</p>
                    <p class="text-center text-sm text-gray-500">
                      Webflow Developer
                    </p>
                    <div class="mt-4 flex">
                      <a href="javascript:void(0);" class="mr-2 inline-block h-8 w-8 max-w-full text-black">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947193e6cf6a_FacebookLogo%20(4).svg" alt="" class="inline-block" />
                      </a>
                      <a href="javascript:void(0);" class="inline-block h-8 w-8 max-w-full text-black">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a94e916e6cf66_InstagramLogo%20(4).svg" alt="" class="inline-block" />
                      </a>
                    </div>
                  </div>
              </div>
      
              <div class="swiper-slide">
                <div class="mx-auto flex w-full flex-col items-center gap-4 py-8 text-center md:px-8 md:py-4 lg:px-12">
                  <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074"
                    alt=""
                    class="mb-4 inline-block h-40 w-40 rounded-full object-cover" />
                  <p class="font-bold">John Robert</p>
                  <p class="text-center text-sm text-gray-500">Webflow Developer</p>
                  <div class="mt-4 flex">
                    <a href="#" class="mr-2 inline-block h-8 w-8"><img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947193e6cf6a_FacebookLogo%20(4).svg" alt="" /></a>
                    <a href="#" class="inline-block h-8 w-8"><img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a94e916e6cf66_InstagramLogo%20(4).svg" alt="" /></a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="mx-auto flex w-full flex-col items-center gap-4 py-8 text-center md:px-8 md:py-4 lg:px-12">
                    <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" alt="" class="mb-4 inline-block h-40 w-40 rounded-full object-cover " />
                    <p class="font-bold">Annisyah Matah</p>
                    <p class="text-center text-sm text-gray-500">
                      Webflow Developer
                    </p>
                    <div class="mt-4 flex">
                      <a href="javascript:void(0);" class="mr-2 inline-block h-8 w-8 max-w-full text-black">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a947193e6cf6a_FacebookLogo%20(4).svg" alt="" class="inline-block" />
                      </a>
                      <a href="javascript:void(0);" class="inline-block h-8 w-8 max-w-full text-black">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/6458c625291a94e916e6cf66_InstagramLogo%20(4).svg" alt="" class="inline-block" />
                      </a>
                    </div>
                  </div>
              </div>
      
              <!-- Ulangi .swiper-slide untuk setiap item lainnya -->
              <!-- ... copy semua item lainnya di sini dalam .swiper-slide ... -->
      
            </div>
      
            <!-- Navigation (optional) -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
      
            <!-- Pagination (optional) -->
            <div class="my-10">
                <div class="swiper-pagination"></div>
            </div>
          </div>

            <div class="flex justify-center mt-10">
                <a href="{{ route('guru-staf') }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
                    Lihat Semua Foto
                </a>
            </div>
        </div>
    </section>
    {{-- ? guru & staf --}}

    <x-frond.footer />

    {{-- ? banner --}}
    <x-frond.mini-banner />

    <x-slot:myScript>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            const swiper = new Swiper('.guruStafSlider', {
              loop: true,
              grabCursor: true,
              spaceBetween: 20,
              autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
              breakpoints: {
                320: {
                  slidesPerView: 1,
                },
                640: {
                  slidesPerView: 2,
                },
                1024: {
                  slidesPerView: 3,
                },
                1280: {
                  slidesPerView: 4,
                },
              },
            });
        </script>  

    </x-slot:myScript>
</x-layouts.frond.app>
