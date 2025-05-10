<x-layouts.frond.app
    title="Struktur Organisasi SMK Uyelindo Kupang - Kepemimpinan Sekolah"
    metaDescription="Lihat struktur organisasi SMK Uyelindo Kupang. Menampilkan susunan kepala sekolah, wakil, dan staf pendukung dalam mendukung operasional dan pengembangan pendidikan."
    metaKeywords="Struktur Organisasi SMK, Kepemimpinan Sekolah, Manajemen SMK Uyelindo, Susunan Organisasi Sekolah, Guru dan Staf SMK"
    metaOgTitle="Struktur Organisasi SMK Uyelindo Kupang"
    metaOgDescription="SMK Uyelindo Kupang memiliki struktur organisasi yang solid, mencakup kepala sekolah, waka, guru produktif, guru normatif, serta staf tata usaha."
    {{-- metaImage="{{ asset('assets/images/struktur-organisasi-preview.jpg') }}" --}}
    metaUrl="{{ url('/struktur-organisasi') }}"
    metaTwitterTitle="Struktur Organisasi SMK Uyelindo Kupang - Tim Pengelola Sekolah"
    metaTwitterDescription="Kenali jajaran pimpinan dan pengelola SMK Uyelindo Kupang yang bertanggung jawab dalam operasional dan pendidikan."
    >
    <x-frond.navbar />

    <section class="my-10 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up">Struktur Organisasi SMK Uyelindo Kupang</h1>

                <p class="text-gray-600 text-center mb-8" data-aos="fade-up" data-aos-delay="100">
                    SMK Uyelindo Kupang dikelola oleh tim profesional yang berdedikasi tinggi dalam mengembangkan pendidikan berkualitas. Struktur organisasi kami dirancang untuk memastikan pelaksanaan pendidikan yang efektif dan efisien, dengan pembagian tugas dan tanggung jawab yang jelas di setiap tingkatan.
                </p>
                
                <div class="flex justify-center mb-8" data-aos="zoom-in" data-aos-delay="200">
                    <img 
                        src="{{ asset('img/defaultsvg.svg') }}" 
                        alt="Struktur Organisasi SMK Uyelindo Kupang"
                        class="max-w-full h-auto rounded-lg"
                        loading="lazy"
                    />
                </div>
            </div>
        </div>
    </section>

    <x-frond.footer />
    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="50" />
</x-layouts.frond.app>
