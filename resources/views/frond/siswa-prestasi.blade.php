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

    <section>
        <!-- Container -->
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-24 lg:py-32">
            <h2 class="text-center text-3xl font-bold md:text-5xl" data-aos="fade-up">
                Siswa Berprestasi SMK Uyelindo
            </h2>
            <p class="mx-auto mb-8 mt-4 text-center text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16" data-aos="fade-up" data-aos-delay="100">
                Prestasi gemilang yang telah diraih oleh siswa-siswi terbaik kami dalam berbagai bidang
            </p>
            <!-- Content -->
            <div class="mx-auto grid justify-items-center gap-5 sm:grid-cols-2 md:grid-cols-3 md:gap-8 lg:grid-cols-4 lg:justify-items-stretch">
                @foreach ($siswa_berprestasi_latest as $siswa_berprestasi)
                <div class="flex max-w-sm flex-col items-center gap-4 rounded-md border border-solid border-yellow-300 px-8 py-6 md:max-w-full" data-aos="fade-up">
                    <img
                        src="{{ $siswa_berprestasi->foto ? asset('storage/' . $siswa_berprestasi->foto) : asset('img/defaultsvg.svg') }}"
                        alt="foto-siswa-berprestasi"
                        class="mb-4 inline-block h-52 w-full object-cover"
                    />
                    <p class="font-bold">{{ $siswa_berprestasi->nama_lengkap }}</p>
                    <p class="text-sm text-gray-500">{{ $siswa_berprestasi->tahun }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-frond.footer />
    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="50" />
</x-layouts.frond.app>
