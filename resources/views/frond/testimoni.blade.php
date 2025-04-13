<x-layouts.frond.app
    title="Testimoni SMK Uyelindo Kupang - Cerita Alumni dan Orang Tua Siswa"
    metaDescription="Simak testimoni dari alumni, siswa, dan orang tua tentang pengalaman mereka di SMK Uyelindo Kupang. Bukti nyata kualitas pendidikan vokasi kami."
    metaKeywords="Testimoni SMK Uyelindo, Alumni SMK Kupang, Cerita Alumni Sekolah Vokasi, Pengalaman Sekolah SMK"
    metaOgTitle="Testimoni Alumni & Orang Tua - SMK Uyelindo Kupang"
    metaOgDescription="Pengalaman dan testimoni alumni, siswa, dan orang tua tentang pendidikan dan pembelajaran di SMK Uyelindo Kupang."
    {{-- metaImage="{{ asset('assets/images/preview-testimoni.jpg') }}" --}}
    metaUrl="{{ url('/testimoni') }}"
    metaTwitterTitle="Testimoni SMK Uyelindo Kupang"
    metaTwitterDescription="Testimoni alumni dan orang tua siswa SMK Uyelindo Kupang tentang pendidikan berkualitas dan lingkungan pembelajaran yang positif."
    >
    <x-frond.navbar />

    <!-- Testimonial Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Apa Kata Mereka?</h2>
                <p class="text-gray-600">Testimoni dari para siswa dan orang tua tentang SMK Uyelindo Kupang</p>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial Card 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330" alt="Testimonial 1" class="w-16 h-16 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="text-xl font-semibold text-gray-800">Sarah Johnson</h4>
                            <p class="text-gray-600">Siswa Kelas XII</p>
                        </div>
                    </div>
                    <p class="text-gray-700">"Belajar di SMK Uyelindo membuka banyak kesempatan bagi saya. Fasilitas lengkap dan guru-guru yang kompeten membuat proses belajar menjadi menyenangkan."</p>
                </div>
    
                <!-- Testimonial Card 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d" alt="Testimonial 2" class="w-16 h-16 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="text-xl font-semibold text-gray-800">Michael Chen</h4>
                            <p class="text-gray-600">Alumni 2022</p>
                        </div>
                    </div>
                    <p class="text-gray-700">"Pengalaman praktik industri yang diberikan sangat berharga. Sekarang saya sudah bekerja di perusahaan IT terkemuka berkat bekal yang saya dapat di SMK Uyelindo."</p>
                </div>
    
                <!-- Testimonial Card 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2" alt="Testimonial 3" class="w-16 h-16 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="text-xl font-semibold text-gray-800">Maria Putri</h4>
                            <p class="text-gray-600">Orang Tua Siswa</p>
                        </div>
                    </div>
                    <p class="text-gray-700">"Saya sangat puas dengan perkembangan anak saya selama bersekolah di sini. Tidak hanya akademis, karakter dan kedisiplinannya juga terbentuk dengan baik."</p>
                </div>
            </div>
        </div>
    </section>
    
    <x-frond.footer />
</x-layouts.frond.app>
