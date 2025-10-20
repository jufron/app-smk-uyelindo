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

    {{-- ? hero section --}}
    <section>
        <div class="mx-auto w-full max-w-7xl overflow-hidden px-5 py-10 md:px-10 lg:px-20 lg:py-20">
            <!-- Component -->
            <div class="flex flex-col items-center gap-y-16 py-10 sm:gap-y-20 lg:py-20">
                <!-- Hero Title -->
                <div class="max-w-3xl">
                    <h1 class="m-5 text-center text-3xl font-bold sm:text-4xl md:text-5xl lg:text-6xl" data-aos="fade-up" data-aos-duration="1000">Penerimaan Peserta Didik Baru (PPDB) Tahun Ajaran {{ now()->format('Y') }}/{{ now()->addYear()->format('Y') }} </h1>
                    <p class="mx-auto mb-6 text-center text-sm text-[#636262] sm:px-8 sm:text-xl md:px-24 lg:mb-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Jadilah bagian dari generasi unggul dengan pendidikan vokasi berkualitas. Kami siapkan kamu menjadi tenaga profesional yang siap bersaing di dunia kerja dengan keahlian teknologi terkini.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- ? hero section --}}

    {{-- ? gelombang pendaftaran --}}
    <section class="bg-yellow-100">
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <!-- Title -->
            <div class="flex flex-col items-center text-center">
                <h2 class="text-3xl font-bold md:text-5xl" data-aos="fade-up" data-aos-duration="1000">
                    Gelombang Pendaftaran
                </h2>
                <p class="mb-8 mt-4 max-w-lg text-base text-gray-500 md:mb-12 md:text-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    Daftarkan diri Anda sekarang dan pilih gelombang pendaftaran yang sesuai dengan jadwal Anda
                </p>
            </div>
            <!-- Content -->
            <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-3 md:gap-4">
                <!-- Item -->
                <div class="grid gap-6 rounded-md border border-solid border-yellow-500 p-8 md:p-10" data-aos="fade-up" data-aos-duration="1000">
                    <div class="h-16 w-16 rounded-full bg-orange-950 flex items-center justify-center">
                        <span class="text-2xl font-bold text-yellow-300">1</span>
                    </div>
                    <h3 class="text-xl font-semibold">Gelombang I</h3>
                    <p class="text-sm text-gray-500">
                        Pendaftaran: {{ $tanggal_pendaftaran_gelombang_1_awal }} - {{ $tanggal_pendaftaran_gelombang_1_akhir }}<br>
                        Biaya Pendaftaran: Rp 200.000<br>
                        Dapatkan potongan biaya pendaftaran 20%
                    </p>
                </div>
                <!-- Item -->
                <div class="grid gap-6 rounded-md border border-solid border-yellow-500 p-8 md:p-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class=" h-16 w-16 rounded-full bg-orange-950 flex items-center justify-center">
                        <span class="text-2xl font-bold text-yellow-300">2</span>
                    </div>
                    <h3 class="text-xl font-semibold">Gelombang II</h3>
                    <p class="text-sm text-gray-500">
                        Pendaftaran: {{ $tanggal_pendaftaran_gelombang_2_awal }} - {{ $tanggal_pendaftaran_gelombang_2_akhir }}<br>
                        Biaya Pendaftaran: Rp 200.000<br>
                        Dapatkan potongan biaya pendaftaran 10%
                    </p>
                </div>
                <!-- Features Item -->
                <div class="grid gap-6 rounded-md border border-solid border-yellow-500 p-8 md:p-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="h-16 w-16 rounded-full bg-orange-950 flex items-center justify-center">
                        <span class="text-2xl font-bold text-yellow-300">3</span>
                    </div>
                    <h3 class="text-xl font-semibold">Gelombang III</h3>
                    <p class="text-sm text-gray-500">
                        Pendaftaran: {{ $tanggal_pendaftaran_gelombang_3_awal }} - {{ $tanggal_pendaftaran_gelombang_3_akhir }}<br>
                        Biaya Pendaftaran: Rp 200.000<br>
                        Kuota terbatas!
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- ? gelombang pendaftaran --}}

    {{-- ? alur pendaftaran --}}
    <section>
        <!-- Container -->
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <!-- Title -->
            <h2 class="text-center text-3xl font-bold md:text-5xl" data-aos="fade-up" data-aos-duration="1000">
                Alur Pendaftaran
            </h2>
            <p class="mx-auto mb-8 mt-4 max-w-lg text-center text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                Ikuti langkah-langkah pendaftaran berikut untuk menjadi calon siswa SMK Uyelindo Kupang
            </p>
            <!-- Content -->
            <div class="mx-auto grid max-w-xl gap-6">
                <!-- Item -->
                <div class="flex items-center justify-center rounded-sm bg-gray-100 px-6 py-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="mr-6 flex h-14 w-14 flex-none items-center justify-center rounded-sm bg-white">
                        <p class="text-sm font-bold sm:text-xl">1</p>
                    </div>
                    <p class="text-sm sm:text-base">
                        Melakukan pendaftaran online melalui website dengan mengisi formulir yang telah disediakan
                    </p>
                </div>
                <!-- Item -->
                <div class="flex items-center justify-center rounded-sm bg-gray-100 px-6 py-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="mr-6 flex h-14 w-14 flex-none items-center justify-center rounded-sm bg-white">
                        <p class="text-sm font-bold sm:text-xl">2</p>
                    </div>
                    <p class="text-sm sm:text-base">
                        Melakukan pembayaran biaya pendaftaran dan mengupload bukti pembayaran
                    </p>
                </div>
                <!-- Item -->
                <div class="flex items-center justify-center rounded-sm bg-gray-100 px-6 py-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="mr-6 flex h-14 w-14 flex-none items-center justify-center rounded-sm bg-white">
                        <p class="text-sm font-bold sm:text-xl">3</p>
                    </div>
                    <p class="text-sm sm:text-base">
                        Melengkapi berkas persyaratan dan mengunggah dokumen yang dibutuhkan
                    </p>
                </div>
                <!-- Item -->
                <div class="flex items-center justify-center rounded-sm bg-gray-100 px-6 py-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="mr-6 flex h-14 w-14 flex-none items-center justify-center rounded-sm bg-white">
                        <p class="text-sm font-bold sm:text-xl">4</p>
                    </div>
                    <p class="text-sm sm:text-base">
                        Menunggu pengumuman hasil seleksi dan melakukan daftar ulang jika dinyatakan diterima
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- ? alur pendaftaran --}}

    {{-- ? presyaratan --}}
    <section class="container relative mx-auto py-12 px-2 ">

        <h2 class="text-center text-3xl font-bold md:text-5xl" data-aos="fade-up" data-aos-duration="1000">
            Persyaratan
        </h2>
        <p class="mx-auto mb-8 mt-4 max-w-lg text-center text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            Berikut adalah persyaratan yang harus dipenuhi untuk mendaftar sebagai calon siswa SMK Uyelindo Kupang. Pastikan Anda telah mempersiapkan semua dokumen yang dibutuhkan sebelum melakukan pendaftaran.
        </p>

        <div class="my-6" data-aos="fade-up" data-aos-duration="1000">
            <div
                class="rounded-t-2xl bg-yellow-500/80  w-full cursor-pointer select-none border-2 px-4 py-4 text-gray-100 transition duration-300 hover:text-white">
                <h4 class="text-lg font-medium">Persyaratan Administrasi</h4>
            </div>
            <div
                class="inline-flex w-full rounded-b-2xl border-x-2 border-b-2 border-dashed border-yellow-600/30 bg-yellow-100/50 px-4 py-4 text-teal-800">
                <h5>
                    1. Fotokopi Ijazah/Surat Keterangan Lulus (SKL) yang telah dilegalisir (scan dalam format PDF, max 2MB)
                    <br>
                    2. Fotokopi Akta Kelahiran (scan dalam format PDF, max 1MB)
                    <br>
                    3. Fotokopi Kartu Keluarga (scan dalam format PDF, max 1MB)
                    <br>
                    4. Pas Foto 3x4 berlatar belakang merah (4 lembar, scan dalam format JPG/PNG, max 500KB per file)
                    <br>
                    5. Fotokopi Raport semester 1-5 (scan dalam format PDF, max 2MB per semester)
                    <br>
                    6. Sertifikat prestasi/penghargaan jika ada (scan dalam format PDF, max 1MB per file)
                </h5>
            </div>
        </div>
        <div class="my-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div
                class="rounded-t-2xl bg-yellow-500/80 w-full cursor-pointer select-none border-2 px-4 py-4 text-gray-100 transition duration-300 hover:text-white">
                <h4 class="text-lg font-medium">Persyaratan Usia</h4>
            </div>
            <div
                class="inline-flex w-full rounded-b-2xl border-x-2 border-b-2 border-dashed border-yellow-600/30 bg-yellow-100/50 px-4 py-4 text-teal-800">
                <h5>
                    1. Maksimal berusia 21 tahun pada saat pendaftaran
                    <br>
                    2. Minimal berusia 15 tahun pada saat pendaftaran
                </h5>
            </div>
        </div>
        <div class="my-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <div
                class="rounded-t-2xl bg-yellow-500/80 w-full cursor-pointer select-none border-2 px-4 py-4 text-gray-100 transition duration-300 hover:text-white">
                <h4 class="text-lg font-medium">Persyaratan Akademik</h4>
            </div>
            <div
                class="inline-flex w-full rounded-b-2xl border-x-2 border-b-2 border-dashed border-yellow-600/30 bg-yellow-100/50 px-4 py-4 text-teal-800">
                <h5>
                    1. Lulus SMP/MTs/Sederajat
                    <br>
                    2. Nilai rata-rata raport minimal 7.0
                    <br>
                    3. Tidak buta warna (untuk jurusan tertentu)
                </h5>
            </div>
        </div>

    </section>
    {{-- ? presyaratan --}}

    {{-- ? program keahlian --}}
    <section>
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <!-- Title -->
            <div class="mx-auto flex max-w-3xl flex-col items-center text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-3xl font-bold md:text-5xl">
                    Program Keahlian Unggulan SMK
                </h2>
                <p class="mx-auto mb-8 mt-4 text-gray-500 md:mb-12">
                    Pilih program keahlian yang sesuai dengan minat dan bakatmu untuk meraih masa depan yang cerah. Kami menyediakan program keahlian yang relevan dengan kebutuhan industri.
                </p>
            </div>
            <!-- Content -->
            <ul class="grid gap-5 sm:grid-cols-2 md:gap-4" data-aos="fade-up" data-aos-duration="1000">
                <!-- Item -->
                <li class="rounded-md bg-yellow-100 p-8 md:p-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <!-- Divider -->
                    <p class="mb-3 text-2xl font-semibold">
                        Teknik Komputer dan Jaringan
                    </p>
                    <p class="text-sm text-gray-500">
                        Program keahlian yang membekali siswa dengan keterampilan di bidang teknologi informasi, jaringan komputer, dan sistem keamanan digital. Lulusan TKJ sangat dicari oleh industri dengan peluang karir yang luas sebagai network engineer, system administrator, atau teknisi IT profesional dengan prospek yang bagus.
                    </p>
                </li>
                <!-- Item -->
                <li class="rounded-md bg-yellow-100 p-8 md:p-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <!-- Divider -->
                    <p class="mb-3 text-2xl font-semibold">
                        Rekayasa Perangkat Lunak
                    </p>
                    <p class="text-sm text-gray-500">
                        Program keahlian yang fokus pada pengembangan aplikasi, website, dan software modern. Siswa akan mempelajari bahasa pemrograman terkini, database, dan metodologi pengembangan perangkat lunak profesional. Lulusan RPL memiliki peluang karir yang sangat menjanjikan sebagai software developer, web programmer, atau mobile app developer.
                    </p>
                </li>
            </ul>
        </div>
    </section>
    {{-- ? program keahlian --}}

    {{-- ? biaya pendaftaran --}}
    <section class="bg-yellow-100 py-10">
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <div class="mx-auto flex max-w-3xl flex-col items-center text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-3xl font-bold md:text-5xl" data-aos="fade-up" data-aos-duration="1000">Biaya Pendaftaran</h2>
                <p class="mx-auto mb-8 mt-4 text-gray-500 md:mb-12" data-aos="fade-up" data-aos-duration="1000">
                    Informasi rincian biaya pendaftaran untuk calon peserta didik baru
                </p>
            </div>
            <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-3 md:gap-4">
                <div class="rounded-md bg-white p-8 md:p-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <p class="mb-3 text-2xl font-semibold">Biaya Formulir</p>
                    <p class="text-3xl font-bold text-yellow-400 mb-4">Rp. 100.000</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>✓ Formulir Pendaftaran</li>
                        <li>✓ Map Pendaftaran</li>
                        <li>✓ Kartu Peserta Test</li>
                    </ul>
                </div>
                <div class="rounded-md bg-white p-8 md:p-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <p class="mb-3 text-2xl font-semibold">Uang Gedung</p>
                    <p class="text-3xl font-bold text-yellow-400 mb-4">Rp. 2.500.000</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>✓ Pembangunan</li>
                        <li>✓ Fasilitas Sekolah</li>
                        <li>✓ Pengembangan Sarana</li>
                    </ul>
                </div>
                <div class="rounded-md bg-white p-8 md:p-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <p class="mb-3 text-2xl font-semibold">SPP Bulanan</p>
                    <p class="text-3xl font-bold text-yellow-400 mb-4">Rp. 300.000</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>✓ Biaya Operasional</li>
                        <li>✓ Kegiatan Pembelajaran</li>
                        <li>✓ Ekstrakurikuler</li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                <p class="text-sm text-gray-500">* Biaya dapat dibayarkan secara tunai atau cicilan</p>
                <p class="text-sm text-gray-500">* Tersedia beasiswa untuk siswa berprestasi dan tidak mampu</p>
            </div>
        </div>
    </section>
    {{-- ? biaya pendaftaran --}}

    {{--? form pendaftaran --}}
    @if (!$pendaftaran_dibuka && $tanggal_berikutnya)
    <section class="py-28 container mx-auto">
        <div class="mx-auto flex max-w-3xl flex-col items-center text-center">
            <h2 class="text-3xl font-bold md:text-4xl mb-8" data-aos="fade-up" data-aos-duration="1000">Pendaftaran akan dibuka dalam:</h2>
            <p class="mx-auto mb-8 mt-4 text-gray-500 md:mb-12" data-aos="fade-up" data-aos-duration="1000">
                Silahkan lengkapi data diri Anda dengan benar untuk melanjutkan proses pendaftaran sebagai calon peserta didik baru
            </p>
            <div id="countdown" data-aos="fade-up" data-aos-duration="1000" class="text-5xl font-bold text-yellow-500 mt-14"></div>
        </div>
    </section>
    @else
    <section class="py-20 container mx-auto">
        <div class="mx-auto flex max-w-3xl flex-col items-center text-center">
            <h2 class="text-3xl font-bold md:text-5xl" data-aos="fade-up" data-aos-duration="1000">Form Pendaftaran Online</h2>
            <p class="mx-auto mb-8 mt-2 text-gray-500 md:mb-12" data-aos="fade-up" data-aos-duration="1000">
                Mohon maaf, pendaftaran belum dibuka untuk saat ini. Silahkan tunggu hingga waktu pendaftaran dimulai. Kami akan memberikan informasi lebih lanjut melalui website ini.
            </p>
        </div>

        <form class="mx-5 md:mx-0" action="{{ route('ppdb.store') }}" method="POST" x-data="{ tinggalDengan: '' }">
            @csrf
            <label class="mt-10 mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
                Biodata Siswa Baru
            </label>
            <div class="grid grid-cols-2 lg:grid-cols-12 gap-4">
                {{-- ? nama_lengkap --}}
                <div class="col-span-2 lg:col-span-4">
                    <x-frond.input
                        name="nama_lengkap"
                        value="{{ old('nama_lengkap') }}"
                        label="Nama Lengkap"
                        placeholder="Masukan Nama Lengkap Anda"
                    />
                </div>
                {{-- ? nama_panggilan --}}
                <div class="col-span-2 lg:col-span-3">
                    <x-frond.input
                        name="nama_panggilan"
                        value="{{ old('nama_panggilan') }}"
                        label="Nama Panggilan"
                        placeholder="Masukan Nama Panggilan Anda"
                    />
                </div>
                {{-- ? email --}}
                <div class="col-span-2 lg:col-span-3">
                    <x-frond.input
                        name="email"
                        label="Email"
                        value="{{ old('email') }}"
                        placeholder="Masukan Email Anda"
                        type="email"
                    />
                </div>
                {{-- ? nisn --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-2">
                    <x-frond.input
                        name="nisn"
                        label="NISN"
                        value="{{ old('nisn') }}"
                        placeholder="Masukan NISN Anda"
                        type="number"
                    />
                </div>
                {{-- ? tanggal lahir (date input) --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-3">
                    <x-frond.input
                        name="tanggal_lahir"
                        label="Tanggal Lahir"
                        value="{{ old('tanggal_lahir') }}"
                        placeholder="Masukan Tanggal Lahur Anda"
                        type="date"
                    />
                </div>
                {{-- ? tempat_lahir --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-2">
                    <x-frond.input
                        name="tempat_lahir"
                        value="{{ old('tempat_lahir') }}"
                        label="Tempat Lahir"
                        placeholder="Masukan tempat lahir"
                    />
                </div>
                {{-- ? jenis_kelamin --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-2">
                    <x-frond.input-select name="jenis_kelamin" label="Jenis Kelamin">
                        <option value="" disabled selected>Pilih</option>
                        <option value="laki-laki" @if (old('jenis_kelamin') == 'laki-laki') selected @endif>Laki-Laki</option>
                        <option value="perempuan" @if (old('jenis_kelamin') == 'perempuan') selected @endif>Perempuan</option>
                    </x-frond.input-select>
                </div>
                {{-- ? agama (select input) --}}
                <div class="col-spann-2 sm:col-span-1 lg:col-span-2">
                    <x-frond.input-select name="agama" label="Agama">
                        <option value="" disabled selected>Pilih Agama</option>
                        <option value="islam" @if(old('agama') === 'islam') selected @endif>Islam</option>
                        <option value="kristen" @if(old('agama') === 'kristen') selected @endif>Kristen</option>
                        <option value="katolik" @if(old('agama') === 'katolik') selected @endif>Katolik</option>
                        <option value="hindu" @if(old('agama') === 'hindu') selected @endif>Hindu</option>
                        <option value="buddha" @if(old('agama') === 'buddha') selected @endif>Buddha</option>
                        <option value="konghucu" @if(old('agama') === 'konghucu') selected @endif>Konghucu</option>
                    </x-frond.input-select>
                </div>
                {{-- ? alamat_siswa --}}
                <div class="col-span-2 lg:col-span-4">
                    <x-frond.input
                        name="alamat_siswa"
                        value="{{ old('alamat_siswa') }}"
                        label="Alamat Siswa"
                        placeholder="Masukan Alamat Rumah Anda"
                    />
                </div>
                {{-- ? alamat_sekolah_sebelumnya --}}
                <div class="col-span-2 lg:col-span-4">
                    <x-frond.input
                        name="alamat_sekolah_sebelumnya"
                        value="{{ old('alamat_sekolah_sebelumnya') }}"
                        label="Alamat Sekolah Sebelumnya"
                        placeholder="Masukan Alamat Rumah Anda"
                    />
                </div>
                {{-- ? anak_ke --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-2">
                    <x-frond.input-select name="anak_ke" label="Anak Ke">
                        <option value="" disabled selected>Pilih</option>
                        <option value="1" @if(old('anak_ke') === '1') selected @endif>1</option>
                        <option value="2" @if(old('anak_ke') === '2') selected @endif>2</option>
                        <option value="3" @if(old('anak_ke') === '3') selected @endif>3</option>
                        <option value="4" @if(old('anak_ke') === '4') selected @endif>4</option>
                        <option value="5" @if(old('anak_ke') === '5') selected @endif>5</option>
                        <option value="6" @if(old('anak_ke') === '6') selected @endif>6</option>
                        <option value="7" @if(old('anak_ke') === '7') selected @endif>7</option>
                        <option value="8" @if(old('anak_ke') === '8') selected @endif>8</option>
                        <option value="9" @if(old('anak_ke') === '9') selected @endif>9</option>
                        <option value="10" @if(old('anak_ke') === '10') selected @endif>10</option>
                        <option value="10+" @if(old('anak_ke') === '10+') selected @endif>10+</option>
                    </x-frond.input-select>
                </div>
                {{-- ? status anak dalam keluarga (select input)  --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-2">
                    <x-frond.input-select name="status_anak" label="Status Anak">
                        <option value="" disabled selected>Pilih</option>
                        <option value="anak kandung" @if(old('status_anak') === 'anak kandung') selected @endif>Anak Kandung</option>
                        <option value="anak angkat" @if(old('status_anak') === 'anak angkat') selected @endif>Anak Angkat</option>
                        <option value="anak tiri" @if(old('status_anak') === 'anak tiri') selected @endif>Anak Tiri</option>
                        <option value="lainya" @if(old('status_anak') === 'lainya') selected @endif>Lainya</option>
                    </x-frond.input-select>
                </div>
                {{-- ? nomor_telepon_siswa --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-3">
                    <x-frond.input
                        name="nomor_telepon_siswa"
                        value="{{ old('nomor_telepon_siswa') }}"
                        label="No Hp Siswa (Whatsaap)"
                        placeholder="contoh 081..."
                        type="number"
                    />
                </div>
                {{-- ? jumlah_saudara_kandung --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-3">
                    <x-frond.input-select name="jumlah_saudara_kandung" label="Jumlah Saudara Kandung">
                        <option value="" disabled selected>Pilih</option>
                        <option value="1" @if(old('jumlah_saudara_kandung') == '1') selected @endif>1</option>
                        <option value="2" @if(old('jumlah_saudara_kandung') == '2') selected @endif>2</option>
                        <option value="3" @if(old('jumlah_saudara_kandung') == '3') selected @endif>3</option>
                        <option value="4" @if(old('jumlah_saudara_kandung') == '4') selected @endif>4</option>
                        <option value="5" @if(old('jumlah_saudara_kandung') == '5') selected @endif>5</option>
                        <option value="6" @if(old('jumlah_saudara_kandung') == '6') selected @endif>6</option>
                        <option value="7" @if(old('jumlah_saudara_kandung') == '7') selected @endif>7</option>
                        <option value="8" @if(old('jumlah_saudara_kandung') == '8') selected @endif>8</option>
                        <option value="9" @if(old('jumlah_saudara_kandung') == '9') selected @endif>9</option>
                        <option value="10" @if(old('jumlah_saudara_kandung') == '10') selected @endif>10</option>
                        <option value="10+" @if(old('jumlah_saudara_kandung') == '10+') selected @endif>10+</option>
                    </x-frond.input-select>
                </div>

                {{-- ? tinggal_dengan --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-2">
                    <label for="tinggal_dengan" class="mb-3 block text-base font-medium text-[#07074D]">
                        Tinggal Dengan
                    </label>
                    <select
                        name="tinggal_dengan"
                        id="tinggal_dengan"
                        class="w-full rounded-md border border-yellow-200 bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:ring-yellow-300 focus:border-yellow-300 focus:shadow-md appearance-none"
                        x-model="tinggalDengan"
                        >
                        <option value="" disabled selected>Pilih</option>
                        <option value="orang tua" @if(old('tinggal_dengan') == 'orang tua') selected @endif>Orang Tua</option>
                        <option value="wali murid" @if(old('tinggal_dengan') == 'wali murid') selected @endif>Wali Murid</option>
                    </select>
                </div>
            </div>
            <br>
            <br>
            <br>
            {{-- ? orang tua --}}
            <label
                class="mt-10 mb-5 block text-base font-semibold text-[#07074D] sm:text-xl"
                x-show="tinggalDengan === 'orang_tua' "
                x-cloak
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                >
                Orang Tua
            </label>
            <div
                class="grid grid-cols-2 lg:grid-cols-12 gap-4"
                x-show="tinggalDengan === 'orang tua' "
                x-cloak
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                >
                {{-- ?nama_lengkap_ayah --}}
                <div class="col-span-2 lg:col-span-4">
                    <x-frond.input
                        name="nama_lengkap_ayah"
                        value="{{ old('nama_lengkap_ayah') }}"
                        label="Nama Lengkap Ayah"
                        placeholder="Masukan Nama Lengkap Ayah"
                    />
                </div>
                {{-- ? pekerjaan_ayah --}}
                <div class="col-span-2 lg:col-span-3">
                    <x-frond.input
                        name="pekerjaan_ayah"
                        value="{{ old('pekerjaan_ayah') }}"
                        label="Pekerjaan Ayah"
                        placeholder="Masukan Pekerjaan Ayah"
                    />
                </div>
                {{-- ? pendidikan_ayah --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-2">
                    <x-frond.input-select name="pendidikan_ayah" label="Pendidikan Ayah">
                        <option value="" disabled selected>Pilih</option>
                        <option value="sd" @if (old('pendidikan_ayah') == 'sd') selected @endif>SD</option>
                        <option value="smp" @if (old('pendidikan_ayah') == 'smp') selected @endif>SMP</option>
                        <option value="sma/smk" @if (old('pendidikan_ayah') == 'sma/smk') selected @endif>SMA/SMK</option>
                        <option value="d1" @if (old('pendidikan_ayah') == 'd1') selected @endif>D1</option>
                        <option value="d2" @if (old('pendidikan_ayah') == 'd2') selected @endif>D2</option>
                        <option value="d3" @if (old('pendidikan_ayah') == 'd3') selected @endif>D3</option>
                        <option value="d4" @if (old('pendidikan_ayah') == 'd4') selected @endif>D4</option>
                        <option value="s1" @if (old('pendidikan_ayah') == 's1') selected @endif>S1</option>
                        <option value="s2" @if (old('pendidikan_ayah') == 's2') selected @endif>S2</option>
                        <option value="s3" @if (old('pendidikan_ayah') == 's3') selected @endif>S3</option>
                    </x-frond.input-select>
                </div>
                {{-- ? nama_lengkap_ibu --}}
                <div class="col-span-2 lg:col-span-4">
                    <x-frond.input
                        name="nama_lengkap_ibu"
                        value="{{ old('nama_lengkap_ibu') }}"
                        label="Nama Lengkap Ibu"
                        placeholder="Masukan Nama Lengkap Ibu"
                    />
                </div>
                {{-- ? pekerjaan_ibu --}}
                <div class="col-span-2 lg:col-span-3">
                    <x-frond.input
                        name="pekerjaan_ibu"
                        value="{{ old('pekerjaan_ibu') }}"
                        label="Pekerjaan Ibu"
                        placeholder="Masukan Pekerjaan Ibu"
                    />
                </div>
                {{-- ? pendidikan_ibu --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-2">
                    <x-frond.input-select name="pendidikan_ibu" label="Pendidikan Ibu">
                        <option value="" disabled selected>Pilih</option>
                        <option value="sd" @if (old('pendidikan_ibu') == 'sd') selected @endif>SD</option>
                        <option value="smp" @if (old('pendidikan_ibu') == 'smp') selected @endif>SMP</option>
                        <option value="sma/smk" @if (old('pendidikan_ibu') == 'sma/smk') selected @endif>SMA/SMK</option>
                        <option value="d1" @if (old('pendidikan_ibu') == 'd1') selected @endif>D1</option>
                        <option value="d2" @if (old('pendidikan_ibu') == 'd2') selected @endif>D2</option>
                        <option value="d3" @if (old('pendidikan_ibu') == 'd3') selected @endif>D3</option>
                        <option value="d4" @if (old('pendidikan_ibu') == 'd4') selected @endif>D4</option>
                        <option value="s1" @if (old('pendidikan_ibu') == 's1') selected @endif>S1</option>
                        <option value="s2" @if (old('pendidikan_ibu') == 's2') selected @endif>S2</option>
                        <option value="s3" @if (old('pendidikan_ibu') == 's3') selected @endif>S3</option>
                    </x-frond.input-select>
                </div>
                {{-- ? nomor_telepon_orang_tua --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-4">
                    <x-frond.input
                        name="nomor_hp_ortu"
                        label="No Hp Orang TUa"
                        value="{{ old('nomor_telepon_orang_tua') }}"
                        placeholder="contoh 081..."
                        type="number"
                    />
                </div>
                {{-- ? alamat_orang_tua --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-4">
                    <x-frond.input
                        name="alamat_orang_tua"
                        label="Alamat Orang Tua"
                        value="{{ old('alamat_orang_tua') }}"
                        placeholder="Alamat Orang Tua"
                    />
                </div>
            </div>

            {{-- ? input wali siswa --}}
            <label
                class="mt-10 mb-5 block text-base font-semibold text-[#07074D] sm:text-xl"
                x-show="tinggalDengan === 'wali_murid'"
                x-cloak
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                >
                Wali Siswa
            </label>
            <div
                class="grid grid-cols-2 lg:grid-cols-12 gap-4"
                x-show="tinggalDengan === 'wali murid'"
                x-cloak
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                >
                {{-- ? nama_lengkap_wali_murid --}}
                <div class="col-span-2 lg:col-span-4">
                    <x-frond.input
                        name="nama_lengkap_wali_murid"
                        label="Nama Lengkap Wali Siswa"
                        value="{{ old('nama_lengkap_wali_murid') }}"
                        placeholder="Masukan Nama Lengkap Wali Siswa"
                    />
                </div>
                {{-- ? pekerjaan_wali_murid --}}
                <div class="col-span-2 lg:col-span-3">
                    <x-frond.input
                        name="pekerjaan_wali_murid"
                        label="Pekerjaan Wali Siswa"
                        value="{{ old('pekerjaan_wali_murid') }}"
                        placeholder="Masukan Pekerjaan Wali Siswa"
                    />
                </div>
                {{-- ? hubungan_dengan_siswa --}}
                <div class="col-span-2 lg:col-span-3">
                    <x-frond.input-select name="hubungan_dengan_siswa" label="Hubungan Dengan Siswa">
                        <option value="" disabled selected>Pilih Hubungan</option>
                        <option value="kakek" @if (old('hubungan_dengan_siswa') == 'kakek') selected @endif>Kakek</option>
                        <option value="nenek" @if (old('hubungan_dengan_siswa') == 'nenek') selected @endif>Nenek</option>
                        <option value="paman" @if (old('hubungan_dengan_siswa') == 'paman') selected @endif>Paman</option>
                        <option value="bibi" @if (old('hubungan_dengan_siswa') == 'bibi') selected @endif>Bibi</option>
                        <option value="saudara" @if (old('hubungan_dengan_siswa') == 'saudara') selected @endif>Saudara</option>
                        <option value="lainya" @if (old('hubungan_dengan_siswa') == 'lainya') selected @endif>Lainya</option>
                    </x-frond.input-select>
                </div>
                {{-- ? alamat_wali_siswa --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-4">
                    <x-frond.input
                        name="alamat_wali_siswa"
                        label="Alamat Wali Siswa"
                        value="{{ old('alamat_wali_siswa') }}"
                        placeholder="Alamat Wali Siswa"
                    />
                </div>
                {{-- ? nomor_hp_wali --}}
                <div class="col-span-2 sm:col-span-1 lg:col-span-4">
                    <x-frond.input
                        name="nomor_hp_wali"
                        label="No Hp Wali"
                        value="{{ old('nomor_hp_wali') }}"
                        placeholder="contoh 081..."
                        type="number"
                    />
                </div>
            </div>
            {{-- @dump($errors->all()) --}}
            <button class="mt-10 hover:shadow-form rounded-md bg-yellow-300 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                Kirim
            </button>
        </form>
    </section>
    @endif
    {{--? form pendaftaran --}}

    {{-- ? pertanyaan yang sering ditanyakan --}}
    <div class="py-10">
        <div class="max-w-screen-md mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-between">
            <div class="text-center">
                <h3 class="text-5xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900" data-aos="fade-up" data-aos-duration="1000">
                    Pertanyaan yang Sering <span class="text-yellow-300">Ditanyakan</span>
                </h3>
            </div>

            <div class="mt-20">
                <ul class="">
                    @foreach ($pertanyaan_pendaftaran as $pp)
                    <li class="text-left mb-10" data-aos="fade-up" data-aos-duration="1000">
                        <div class="flex flex-row items-start mb-5">
                            <div
                                class="hidden sm:flex items-center justify-center p-3 mr-3 rounded-full bg-yellow-400 text-white border-4 border-white text-xl font-semibold">
                                <svg width="30px" fill="white" height="30px" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g data-name="Layer 2">
                                        <g data-name="menu-arrow">
                                            <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                            <path
                                                d="M17 9A5 5 0 0 0 7 9a1 1 0 0 0 2 0 3 3 0 1 1 3 3 1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-1.1A5 5 0 0 0 17 9z">
                                            </path>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="bg-gray-100 p-5 px-10 w-full flex items-center">
                                <h4 class="text-md leading-6 font-medium text-gray-900">
                                    {{ $pp->pertanyaan }}
                                ?</h4>
                            </div>
                        </div>

                        <div class="flex flex-row items-start">
                            <div class="bg-yellow-100 p-5 px-10 w-full flex items-center">
                                <p class="text-gray-700 text-sm">
                                    {{ $pp->jawaban }}
                                </p>
                            </div>
                            <div
                                class="hidden sm:flex items-center justify-center p-3 ml-3 rounded-full bg-yellow-400 text-white border-4 border-white text-xl font-semibold">
                                <svg height="25px" fill="white" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                    y="0px" viewBox="0 0 295.238 295.238" style="enable-background:new 0 0 295.238 295.238;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path d="M277.462,0.09l-27.681,20.72l-27.838,64.905h-22.386l-8.79-19.048h5.743c10.505,0,19.048-8.452,19.048-18.957V28.571h9.524V0H196.51v28.571h9.524V47.71c0,5.248-4.271,9.433-9.524,9.433h-10.138L174.2,30.81l14.581-7.267L141.038,3.095l-11.224,39.281c-0.305-23.371-19.386-42.29-42.829-42.29c-23.633,0-42.857,19.224-42.857,42.857c0,14.281,7.233,27.676,19.048,35.595v7.176H51.643L50.9,89.619c-2.314,12.005-2.529,24.343-0.638,36.648l-32.486,57.905l35.876,8.195v60.014h47.619v42.857h114.286v-66.357c33.333-23.581,52.371-61.495,52.343-101.943l0.01-17.371c0-6.548-0.605-13.276-1.824-19.905l-0.705-3.948h-9.348l21.429-51.338V0.09z M206.033,19.138V9.614h9.524v9.524H206.033z M189.067,85.714h-18.062l-8.657-19.048h17.929L189.067,85.714z M147.219,16.119l18.929,8.11l-4.467,2.19l14.2,30.724h-17.862l-11.605-25.471l-4.262,2.152L147.219,16.119z M160.543,85.715h-21.176v-9.433c0-5.252,4.271-9.614,9.524-9.614h2.995v-0.001L160.543,85.715z M141.843,44.652l5.776,12.71c-9.905,0.667-17.776,8.848-17.776,18.919v9.433h-19.048v-7.176c9.529-6.386,15.995-16.352,18.176-27.452L141.843,44.652z M53.653,42.948c0-18.376,14.957-33.333,33.333-33.333c18.376,0,33.333,14.957,33.333,33.333c0,11.829-6.39,22.881-16.671,28.838l-2.376,1.371v12.557h-9.524V56.352c5.529-1.971,9.524-7.21,9.524-13.41c0-7.876-6.41-14.286-14.286-14.286c-7.876,0-14.286,6.411-14.286,14.287c0,6.2,3.995,11.438,9.524,13.41v29.362H72.7V73.157l-2.376-1.376C60.043,65.824,53.653,54.776,53.653,42.948z M86.986,47.71c-2.629,0-4.762-2.139-4.762-4.762c0-2.629,2.133-4.762,4.762-4.762c2.629,0,4.762,2.133,4.762,4.762S89.615,47.71,86.986,47.71z M257.366,95.239c0.691,4.761,1.039,9.59,1.039,14.285l0.01,17.405c0.029,38.148-18.795,73.871-50.286,95.552l-2.095,1.429v61.805h-95.238v-42.857h-47.62v-58.086l-30.862-7.043l27.876-49.7l-0.271-1.7c-1.771-10.419-1.871-21.567-0.333-31.09h3.59h47.619H257.366z M245.714,85.714H232.3l23.738-55.343l10.557,5.257L245.714,85.714z M267.938,25.714l-5.267-2.633l5.267-3.943V25.714z"></path>                                                <path d="M96.51,123.81c-7.876,0-14.286-4.762-14.286-14.286H72.7c0,14.286,10.681,23.81,23.81,23.81 c13.129,0,23.81-9.524,23.81-23.81h-9.524C110.795,119.048,104.386,123.81,96.51,123.81z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    {{-- ? pertanyaan yang sering ditanyakan --}}

    <x-frond.footer />

    @if (!$pendaftaran_dibuka && $tanggal_berikutnya)
    <x-slot:myScript>
        <script>
            const countdownDate = new Date("{{ \Carbon\Carbon::parse($tanggal_berikutnya)->toIso8601String() }}").getTime();

            const countdownInterval = setInterval(function () {
                const now = new Date().getTime();
                const distance = countdownDate - now;

                if (distance < 0) {
                    clearInterval(countdownInterval);
                    document.getElementById("countdown").innerHTML = "Pendaftaran telah dibuka!, Silahkan Di refresh Halamanya";
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("countdown").innerHTML = `${days} Hari ${hours} Jam ${minutes} Menit ${seconds} Detik`;
            }, 1000);
        </script>
    </x-slot:myScript>
    @endif
</x-layouts.frond.app>
