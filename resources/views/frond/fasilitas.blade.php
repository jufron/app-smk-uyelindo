<x-layouts.frond.app
    title="Fasilitas SMK Uyelindo Kupang - Sarana & Prasarana Lengkap untuk Pendidikan Berkualitas"
    metaDescription="SMK Uyelindo Kupang menyediakan fasilitas pendidikan modern seperti ruang praktik, laboratorium, perpustakaan, dan sarana olahraga untuk mendukung kegiatan belajar siswa."
    metaKeywords="Fasilitas SMK Uyelindo, Sarana Sekolah, Laboratorium, Perpustakaan, Ruang Praktik, Sekolah Modern Kupang"
    metaOgTitle="Fasilitas Unggulan SMK Uyelindo Kupang"
    metaOgDescription="Lihat berbagai fasilitas yang dimiliki SMK Uyelindo Kupang dalam menunjang pembelajaran siswa secara optimal dan profesional."
    {{-- metaImage="{{ asset('assets/images/preview-fasilitas.jpg') }}" --}}
    metaUrl="{{ url('/fasilitas') }}"
    metaTwitterTitle="Fasilitas Lengkap SMK Uyelindo Kupang"
    metaTwitterDescription="Jelajahi fasilitas modern SMK Uyelindo Kupang yang mendukung proses belajar mengajar secara efektif."
    >
    <x-frond.navbar />

    <section id="features" class="px-2 space-y-6 py-8 md:py-12 lg:py-24 max-w-5xl mx-auto">
        <div class="mx-auto flex max-w-[58rem] flex-col items-center mb-20 space-y-4 text-center">
            <h2 class="font-heading text-3xl leading-[1.1] sm:text-3xl md:text-5xl" data-aos="fade-up">Fasilitas Lengkap untuk Masa Depan Cemerlang</h2>
            <p class="max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7" data-aos="fade-up" data-aos-delay="100">
                Nikmati fasilitas modern dan lengkap yang akan mendukung setiap langkah pendidikan Anda di SMK Uyelindo Kupang
            </p>
        </div>
        <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3">
            <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2" data-aos="fade-up">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <div class="space-y-2">
                        <h3 class="font-bold">Laboratorium Komputer Canggih</h3>
                        <p class="text-sm text-muted-foreground">Dilengkapi komputer terbaru dan software industri untuk mengasah keterampilan digital Anda</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2" data-aos="fade-up" data-aos-delay="100">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <div class="space-y-2">
                        <h3 class="font-bold">Perpustakaan Digital</h3>
                        <p class="text-sm text-muted-foreground">Akses ribuan buku dan sumber belajar digital untuk memperluas wawasan dan pengetahuan</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2" data-aos="fade-up" data-aos-delay="200">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <div class="space-y-2">
                        <h3 class="font-bold">Bengkel Praktik Modern</h3>
                        <p class="text-sm text-muted-foreground">Praktik langsung dengan peralatan industri standar untuk mempersiapkan Anda ke dunia kerja</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2" data-aos="fade-up" data-aos-delay="300">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <div class="space-y-2">
                        <h3 class="font-bold">Ruang Multimedia</h3>
                        <p class="text-sm text-muted-foreground">Studio produksi dan editing yang dilengkapi peralatan profesional untuk proyek multimedia</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2" data-aos="fade-up" data-aos-delay="400">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <div class="space-y-2">
                        <h3 class="font-bold">Fasilitas Olahraga</h3>
                        <p class="text-sm text-muted-foreground">Lapangan olahraga multifungsi dan gym untuk menjaga kebugaran dan mengembangkan bakat olahraga</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2" data-aos="fade-up" data-aos-delay="500">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                    <div class="space-y-2">
                        <h3 class="font-bold">Area Kolaborasi</h3>
                        <p class="text-sm text-muted-foreground">Ruang diskusi modern dan co-working space untuk mendukung pembelajaran kolaboratif dan inovatif</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frond.footer />
    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="50" />
</x-layouts.frond.app>
