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

    <section>
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20 mt-10">
            <!-- Component -->
            <div class="flex flex-col items-center">
                <h2 class="text-center text-3xl font-bold md:text-5xl">
                Berita & Informasi SMK Uyelindo Kupang
                </h2>
                <p class="mb-8 mt-4 text-center text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16">
                Temukan berita terkini, prestasi, dan kegiatan sekolah kami
                </p>
                <!-- Content -->
                <div class="mb-6 grid gap-4 sm:grid-cols-2 sm:justify-items-stretch md:mb-10 md:grid-cols-3 lg:mb-12 lg:gap-6">
                    <a href="{{ route('berita.detail') }}" class="flex flex-col gap-4 rounded-md border border-solid border-yellow-300 px-4 py-8 md:p-0">
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
                    <a href="{{ route('berita.detail') }}" class="flex flex-col gap-4 rounded-md border border-solid border-yellow-300 px-4 py-8 md:p-0">
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
                    <a href="{{ route('berita.detail') }}" class="flex flex-col gap-4 rounded-md border border-solid border-yellow-300 px-4 py-8 md:p-0">
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
                </div>
            </div>
        </div>
    </section>

    <x-frond.footer />

    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="50" />
</x-layouts.frond.app>
