<x-layouts.frond.app
    title="Jurusan SMK Uyelindo Kupang - Program Keahlian Berkualitas"
    metaDescription="Temukan berbagai jurusan atau program keahlian di SMK Uyelindo Kupang yang dirancang untuk menyiapkan siswa siap kerja dan kuliah."
    metaKeywords="Jurusan SMK, Program Keahlian SMK, SMK Uyelindo Kupang, Kompetensi Keahlian, SMK Vokasi, Pendidikan Kejuruan"
    metaOgTitle="Jurusan di SMK Uyelindo Kupang - Program Keahlian Unggulan"
    metaOgDescription="Kenali jurusan-jurusan yang tersedia di SMK Uyelindo Kupang, masing-masing dengan fasilitas dan kurikulum yang mendukung kesuksesan siswa."
    {{-- metaImage="{{ asset('assets/images/preview-jurusan.jpg') }}" --}}
    metaUrl="{{ url('/jurusan') }}"
    metaTwitterTitle="Jurusan SMK Uyelindo Kupang - Program Kejuruan & Vokasi"
    metaTwitterDescription="Informasi lengkap tentang program keahlian dan jurusan di SMK Uyelindo Kupang. Didesain untuk menyiapkan lulusan yang kompeten dan siap kerja."
    >
    <x-frond.navbar />

    <section>
        <div class="my-10 mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <!-- Title -->
            <div class="mx-auto flex max-w-3xl flex-col items-center text-center">
                <h2 class="text-3xl font-bold md:text-5xl" data-aos="fade-up">
                    Program Keahlian Unggulan SMK
                </h2>
                <p class="mx-auto mb-8 mt-4 text-gray-500 md:mb-12" data-aos="fade-up" data-aos-delay="100">
                    Pilih program keahlian yang sesuai dengan minat dan bakatmu untuk meraih masa depan yang cerah. Kami menyediakan program keahlian yang relevan dengan kebutuhan industri.
                </p>
            </div>
            <!-- Content -->
            <ul class="grid gap-5 sm:grid-cols-2 md:gap-4">
                <!-- Item -->
                <li class="rounded-md bg-yellow-100" data-aos="fade-up">
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
                <li class="rounded-md bg-yellow-100" data-aos="fade-up" data-aos-delay="100">
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

    <x-frond.footer />
    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="50" />
</x-layouts.frond.app>
