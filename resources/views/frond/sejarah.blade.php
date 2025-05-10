<x-layouts.frond.app
    title="Sejarah SMK Uyelindo Kupang - Perjalanan dan Pencapaian"
    metaDescription="Pelajari sejarah SMK Uyelindo Kupang dari awal pendirian hingga menjadi sekolah kejuruan unggulan di Nusa Tenggara Timur."
    metaKeywords="Sejarah SMK Uyelindo, Asal Usul SMK Kupang, Perjalanan Sekolah, Profil Sekolah, Pendidikan Vokasi Kupang"
    metaOgTitle="Sejarah SMK Uyelindo Kupang"
    metaOgDescription="SMK Uyelindo Kupang telah menorehkan banyak prestasi sejak didirikan. Simak perjalanan sekolah kami dalam membangun pendidikan vokasi di Kupang."
    {{-- metaImage="{{ asset('assets/images/sejarah-preview.jpg') }}" --}}
    metaUrl="{{ url('/sejarah') }}"
    metaTwitterTitle="Sejarah Berdirinya SMK Uyelindo Kupang"
    metaTwitterDescription="Ketahui lebih jauh tentang sejarah berdirinya SMK Uyelindo Kupang dan perkembangannya dari masa ke masa."
    >
    <x-frond.navbar />

    <section class="my-10">
        <div class="bg-white py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <h1 class="text-4xl font-bold text-gray-900 mb-8 text-center">Sejarah SMK Uyelindo Kupang</h1>
                    <div class="prose prose-lg mx-auto">
                        <div class="summernote-content">
                            {!! $sejarah ?? 'Data Tidak Ada' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frond.footer />

    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="100" />
</x-layouts.frond.app>
