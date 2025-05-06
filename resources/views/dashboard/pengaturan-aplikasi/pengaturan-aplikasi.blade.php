<x-layouts.dashboard.app title="pertanyaan pendaftaran">
    {{-- * my style --}}
    <x-slot:myStyle>

    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Pengaturan Applikasi</h4>
        </div>
        <div class="card-body">
            <h1 class="fw-bold text-uppercase">Pengaturan Umum</h1>
            <hr class="border-primary opacity-75 my-2">
            {{-- ? kata sambutan kepala sekolah --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Kata Sambutan Kepala Sekolah
                </div>
                <div class="col-md-6 col-xl-8">
                    {{ $sambutan_kepala_sekolah ?? 'Data Tidak Ada' }}
                </div>
            </div>
            {{-- ? nama kepala sekolah --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Nama Kepala Sekolah
                </div>
                <div class="col-md-6 col-xl-8">
                    {{ $nama_kepala_sekolah ?? 'Data Tidak Ada' }}
                </div>
            </div>
            {{-- ? foto kepala sekolah --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Foto Kepala Sekolah
                </div>
                <div class="col-md-6 col-xl-8">
                    <img
                        src="{{ $foto_kepala_sekolah ? asset('storage/' . $foto_kepala_sekolah) : asset('img/defaultsvg.svg') }}"
                        width="200px"
                        alt="foto-kepala-sekola"
                        loading="lazy"
                    />
                </div>
            </div>
            {{-- ? sejarah --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Sejarah
                </div>
                <div class="col-md-6 col-xl-8">
                    {{ $sejarah ?? 'Data Tidak Ada' }}
                </div>
            </div>
            {{-- ? visi misi --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Visi Misi
                </div>
                <div class="col-md-6 col-xl-8">
                    {{ $visi_misi ?? 'Data Tidak Ada' }}
                </div>
            </div>
            {{-- ? struktur organisasi --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Struktur Organisasi
                </div>
                <div class="col-md-6 col-xl-8">
                    <img
                        src="{{ $struktur_organisasi ? asset('storage/' . $struktur_organisasi) : asset('img/defaultsvg.svg') }}"
                        width="400px"
                        alt="foto-kepala-sekola"
                        loading="lazy"
                    />
                </div>
            </div>
            {{-- ? umum --}}
            <a href="{{ route('dashboard.pengaturan-aplikasi-umum.create') }}" class="btn btn-success my-4">Ubah</a>

            <h1 class="fw-bold text-uppercase mt-5">Kontak</h1>
            <hr class="border-primary opacity-75 my-2">
            {{-- ? email --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Email
                </div>
                <div class="col-md-6 col-xl-8">
                    {{ $email ?? 'Data Tidak Ada' }}
                </div>
            </div>
            {{-- ? telepon --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Telepon
                </div>
                <div class="col-md-6 col-xl-8">
                    {{ $telepon ?? 'Data Tidak Ada' }}
                </div>
            </div>
            {{-- ? telepon whatsapp --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Telepon Whatsapp
                </div>
                <div class="col-md-6 col-xl-8">
                    {{ $telepon_whatsapp ?? 'Data Tidak Ada' }}
                </div>
            </div>
            {{-- ?? facebook --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Facebook
                </div>
                <div class="col-md-6 col-xl-8">
                    {{ $facebook ?? 'Data Tidak Ada' }}
                </div>
            </div>
            {{-- ? instagram --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Instagram
                </div>
                <div class="col-md-6 col-xl-8">
                    {{ $instagram ?? 'Data Tidak Ada' }}
                </div>
            </div>
            {{-- ? youtube --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Youtube
                </div>
                <div class="col-md-6 col-xl-8">
                    {{ $youtube ?? 'Data Tidak Ada' }}
                </div>
            </div>
            {{-- ? tik tok --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Tik Tok
                </div>
                <div class="col-md-6 col-xl-8">
                    {{ $tik_tok ?? 'Data Tidak Ada' }}
                </div>
            </div>
            {{-- ? kontak --}}
            <a href="{{ route('dashboard.pengaturan-aplikasi-kontak.create') }}" class="btn btn-success my-4">Ubah</a>

            <h1 class="fw-bold text-uppercase mt-5">PPDB</h1>
            <hr class="border-primary opacity-75 my-2">
            {{-- ? Brosur Pendaftaran --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Brosur Pendaftaran
                </div>
                <div class="col-md-6 col-xl-8">
                    <img
                        src="{{ $brosur_pendaftaran ? asset('storage/' . $brosur_pendaftaran) : asset('img/defaultsvg.svg') }}"
                        width="200px"
                        alt="foto-kepala-sekola"
                        loading="lazy"
                    />
                </div>
            </div>
            {{-- ? Tanggal Pendaftaran Gelombang 1 --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Tanggal Pendaftaran Gelombang 1
                </div>
                <div class="col-md-6 col-xl-8">
                    <div>
                        {{ $tanggal_pendaftaran_gelombang_1_awal ?? 'Data Tidak Ada' }}
                    </div>
                    <div>
                        {{ $tanggal_pendaftaran_gelombang_1_akhir ?? 'Data Tidak Ada' }}
                    </div>
                </div>
            </div>
            {{-- ? Tanggal Pendaftaran Gelombang 2 --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Tanggal Pendaftaran Gelombang 2
                </div>
                <div class="col-md-6 col-xl-8">
                    <div>
                        {{ $tanggal_pendaftaran_gelombang_2_awal ?? 'Data Tidak Ada' }}
                    </div>
                    <div>
                        {{ $tanggal_pendaftaran_gelombang_2_akhir ?? 'Data Tidak Ada' }}
                    </div>
                </div>
            </div>
            {{-- ? Tanggal Pendaftaran Gelombang 3 --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Tanggal Pendaftaran Gelombang 3
                </div>
                <div class="col-md-6 col-xl-8">
                    <div>
                        {{ $tanggal_pendaftaran_gelombang_3_awal ?? 'Data Tidak Ada' }}
                    </div>
                    <div>
                        {{ $tanggal_pendaftaran_gelombang_3_akhir ?? 'Data Tidak Ada' }}
                    </div>
                </div>
            </div>
            {{-- ? ppdb --}}
            <a href="{{ route('dashboard.pengaturan-aplikasi-ppdb.create') }}" class="btn btn-success my-4">Ubah</a>
        </div>
    </div>
    {{-- todo content ... --}}

    {{-- * my script --}}
    <x-slot:myScript>

    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
