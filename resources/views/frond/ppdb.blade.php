<x-layouts.frond.app
    title="PPDB SMK Uyelindo Kupang - Penerimaan Peserta Didik Baru Tahun Ajaran {{ now()->format('Y') }}/{{ now()->addYear()->format('Y') }}"
    metaDescription="Informasi lengkap mengenai syarat, alur pendaftaran, dan jadwal Penerimaan Peserta Didik Baru (PPDB) di SMK Uyelindo Kupang."
    metaKeywords="PPDB SMK Uyelindo, Pendaftaran SMK Kupang, Pendaftaran Sekolah Vokasi, Pendaftaran Online SMK, Syarat Masuk SMK"
    metaOgTitle="PPDB SMK Uyelindo Kupang - Tahun Ajaran {{ now()->format('Y') }}/{{ now()->addYear()->format('Y') }}"
    metaOgDescription="Yuk daftar di SMK Uyelindo Kupang! Cek informasi pendaftaran siswa baru, syarat masuk, dan jadwal seleksi di halaman ini."
    {{-- metaImage="{{ asset('assets/images/preview-ppdb.jpg') }}" --}}
    metaUrl="{{ url('/ppdb') }}"
    metaTwitterTitle="Info Pendaftaran Siswa Baru SMK Uyelindo Kupang"
    metaTwitterDescription="PPDB SMK Uyelindo Kupang kini dibuka! Lihat cara daftar, syarat, dan program keahlian yang tersedia."
    >
    <x-frond.navbar />

    <!-- Hero Section -->
    <section class="bg-primary text-white py-16">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Penerimaan Peserta Didik Baru</h1>
                <p class="text-xl mb-8">SMK Uyelindo Kupang Tahun Ajaran {{ now()->format('Y') }}/{{ now()->addYear()->format('Y') }}</p>
                <a href="#daftar" class="bg-white text-primary px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Daftar Sekarang</a>
            </div>
        </div>
    </section>
    
    <!-- Informasi Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Informasi PPDB</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 border rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Jadwal Pendaftaran</h3>
                    <p>Pendaftaran dibuka dari tanggal XX sampai dengan XX</p>
                </div>
                <div class="text-center p-6 border rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Persyaratan</h3>
                    <ul class="text-left list-disc list-inside">
                        <li>Fotokopi Ijazah/SKL</li>
                        <li>Fotokopi Akta Kelahiran</li>
                        <li>Fotokopi Kartu Keluarga</li>
                        <li>Pas Foto 3x4</li>
                    </ul>
                </div>
                <div class="text-center p-6 border rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Biaya Pendaftaran</h3>
                    <p>Biaya pendaftaran sebesar Rp XXX.XXX</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Program Keahlian Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Program Keahlian</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Teknik Komputer dan Jaringan</h3>
                    <p>Deskripsi program keahlian dan prospek kerja</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Rekayasa Perangkat Lunak</h3>
                    <p>Deskripsi program keahlian dan prospek kerja</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Multimedia</h3>
                    <p>Deskripsi program keahlian dan prospek kerja</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Alur Pendaftaran Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Alur Pendaftaran</h2>
            <div class="max-w-3xl mx-auto">
                <div class="flex flex-col space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <h4 class="font-semibold">Registrasi Online</h4>
                            <p>Isi formulir pendaftaran online dengan data yang valid</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <h4 class="font-semibold">Upload Dokumen</h4>
                            <p>Upload semua dokumen persyaratan yang dibutuhkan</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <h4 class="font-semibold">Pembayaran</h4>
                            <p>Lakukan pembayaran biaya pendaftaran</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold">4</div>
                        <div>
                            <h4 class="font-semibold">Verifikasi</h4>
                            <p>Tunggu verifikasi dari pihak sekolah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Form Pendaftaran Section -->
    <section id="daftar" class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Formulir Pendaftaran</h2>
            <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label class="block mb-2">Nama Lengkap</label>
                        <input type="text" class="w-full p-2 border rounded" required>
                    </div>
                    <div>
                        <label class="block mb-2">NISN</label>
                        <input type="text" class="w-full p-2 border rounded" required>
                    </div>
                    <div>
                        <label class="block mb-2">Asal Sekolah</label>
                        <input type="text" class="w-full p-2 border rounded" required>
                    </div>
                    <div>
                        <label class="block mb-2">Program Keahlian yang Dipilih</label>
                        <select class="w-full p-2 border rounded" required>
                            <option value="">Pilih Program Keahlian</option>
                            <option value="tkj">Teknik Komputer dan Jaringan</option>
                            <option value="rpl">Rekayasa Perangkat Lunak</option>
                            <option value="mm">Multimedia</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-primary-dark transition">
                        Daftar Sekarang
                    </button>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Kontak Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Informasi Kontak</h2>
            <div class="text-center">
                <p class="mb-4">Untuk informasi lebih lanjut, silakan hubungi:</p>
                <p class="font-semibold">Panitia PPDB SMK Uyelindo Kupang</p>
                <p>Telp: (0380) XXXXXXX</p>
                <p>Email: ppdb@smkuyelindo.sch.id</p>
                <p>WhatsApp: +62 XXX-XXXX-XXXX</p>
            </div>
        </div>
    </section>

    <x-frond.footer />
</x-layouts.frond.app>
