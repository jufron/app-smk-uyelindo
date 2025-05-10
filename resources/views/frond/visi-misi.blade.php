<x-layouts.frond.app
    title="Visi dan Misi SMK Uyelindo Kupang - Menjadi Sekolah Unggul di NTT"
    metaDescription="Temukan visi dan misi SMK Uyelindo Kupang dalam mencetak lulusan yang siap kerja, berkarakter, dan mampu bersaing secara global."
    metaKeywords="Visi SMK Uyelindo, Misi SMK Uyelindo, Tujuan Sekolah, Pendidikan Vokasi Kupang, SMK Unggulan NTT"
    metaOgTitle="Visi & Misi SMK Uyelindo Kupang"
    metaOgDescription="SMK Uyelindo Kupang memiliki visi dan misi untuk menciptakan lulusan yang berkualitas, berkarakter, dan siap menghadapi dunia kerja."
    {{-- metaImage="{{ asset('assets/images/visi-misi-preview.jpg') }}" --}}
    metaUrl="{{ url('/visi-misi') }}"
    metaTwitterTitle="Visi Misi SMK Uyelindo Kupang - Lulusan Siap Kerja & Berdaya Saing"
    metaTwitterDescription="Baca visi dan misi resmi SMK Uyelindo Kupang dalam membangun pendidikan kejuruan yang unggul di NTT."
    >
    <x-frond.navbar />

    <section class="my-10 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up">Visi dan Misi SMK Uyelindo Kupang</h1>

                <div class="my-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="summernote-content">
                        {!! $visi_misi ?? 'Data Tidak Ada' !!}
                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-frond.footer />

    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="50" />
</x-layouts.frond.app>
