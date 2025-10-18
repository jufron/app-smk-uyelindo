<x-layouts.frond.app
    title="Guru dan Staf SMK Uyelindo Kupang - Tenaga Pendidik & Kependidikan Profesional"
    metaDescription="Kenali para guru dan staf SMK Uyelindo Kupang. Tenaga pendidik yang kompeten dan berdedikasi tinggi dalam mendampingi siswa menuju masa depan cerah."
    metaKeywords="Guru SMK Uyelindo, Staf Sekolah, Tenaga Pendidik, Pendidikan Kupang, Guru Vokasi, Profil Guru"
    metaOgTitle="Daftar Guru dan Staf SMK Uyelindo Kupang"
    metaOgDescription="Profil lengkap guru dan staf SMK Uyelindo Kupang yang membentuk ekosistem pendidikan berkualitas dan ramah bagi siswa."
    metaImage="{{ asset('assets/images/preview-guru.jpg') }}"
    metaUrl="{{ url('/guru-staf') }}"
    metaTwitterTitle="Guru & Staf SMK Uyelindo - Profesional dan Berdedikasi"
    metaTwitterDescription="Lihat profil para guru dan staf pengajar SMK Uyelindo Kupang yang mendampingi siswa dengan penuh semangat dan kompetensi."
    >
    <x-frond.navbar />

    <!-- Hero Section -->
    <section class="my-10">
        <div class="bg-gray-100 py-16">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold text-center text-gray-800 mb-8" data-aos="fade-up">Guru & Staf SMK Uyelindo Kupang</h1>
                <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="100">
                    Kenali para pendidik dan tenaga kependidikan yang berdedikasi dalam membimbing siswa-siswi kami menuju masa depan yang cerah.
                </p>
            </div>
        </div>
    </section>

    <section class="my-10">
        <!-- Content -->
        <div class="grid grid-cols-1 justify-items-center gap-5 sm:grid-cols-2 sm:justify-items-stretch md:grid-cols-3 lg:grid-cols-4 md:gap-4 lg:gap-6">
            <!-- Item -->
            @foreach ($guru_dan_staf_latest as $guruDanStaf)
            <div class="mx-auto flex w-full flex-col items-center gap-4 py-8 text-center md:px-8 md:py-4 lg:px-12" data-aos="fade-up">
                <img
                    src="{{ $guruDanStaf->foto ? asset('storage/' . $guruDanStaf->foto) : asset('img/defaultsvg.svg') }}"
                    alt="foto guru dan staf"
                    class="mb-4 inline-block h-40 w-40 rounded-full object-cover"
                />
                <p class="font-bold">{{ $guruDanStaf->nama_lengkap }}</p>
                <p class="text-center text-sm text-gray-500">
                    {{ $guruDanStaf->nama_lengkap }}
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
            @endforeach
        </div>

    </section>

    <x-frond.footer />
    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="100" />
</x-layouts.frond.app>
