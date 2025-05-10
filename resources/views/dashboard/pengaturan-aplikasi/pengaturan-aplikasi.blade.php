<x-layouts.dashboard.app title="pertanyaan pendaftaran">
    {{-- * my style --}}
    <x-slot:myStyle>
        <style>
            .summernote-content ul,
            .summernote-content ol {
                margin: 10px 0 10px 20px;
            }

            .summernote-content ol {
                list-style-type: decimal !important;
                margin-left: 20px !important;
            }

            .summernote-content ul {
                list-style-type: disc !important;
                margin-left: 20px !important;
            }

            .summernote-content li {
                margin-bottom: 5px;
            }

            .summernote-content table {
                border-collapse: collapse;
                width: 100%;
                max-width: 100%;
                margin: 10px 0;
            }

            /* class="table table-bordered" */
            .summernote-content .table.table-bordered {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .summernote-content th,
            .summernote-content td {
                border: 1px solid #a4a1a1;
                padding: 8px;
                white-space: nowrap; /* Mencegah teks dalam sel tabel turun ke baris berikutnya */
            }

            .summernote-content th {
                background-color: #f4f4f4;
                font-weight: bold;
            }

            .summernote-content h1,
            .summernote-content h2,
            .summernote-content h3,
            .summernote-content h4,
            .summernote-content h5,
            .summernote-content h6 {
                margin-bottom: 0.5em;
            }

            /* Pastikan heading tetap terlihat */
            .summernote-content h1 {
                font-size: 2em;
                font-weight: bold;
            }

            .summernote-content h2 {
                font-size: 1.75em;
                font-weight: bold;
            }

            .summernote-content h3 {
                font-size: 1.5em;
                font-weight: bold;
            }

            .summernote-content h4 {
                font-size: 1.25em;
                font-weight: bold;
            }

            .summernote-content h5 {
                font-size: 1.125em;
                font-weight: bold;
            }

            .summernote-content h6 {
                font-size: 1em;
                font-weight: bold;
            }

            .summernote-content p {
                margin-bottom: 1em;
            }

            /* Style untuk teks besar/kecil tetap sesuai */
            .summernote-content small {
                font-size: 0.875em;
            }

            .summernote-content big {
                font-size: 1.25em;
            }

            .summernote-content img {
                margin: 10px;
            }

        </style>
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
                    <div class="summernote-content">
                        {!! $sejarah ?? 'Data Tidak Ada' !!}
                    </div>
                </div>
            </div>
            {{-- ? visi misi --}}
            <div class="row my-3">
                <div class="col-md-6 col-xl-4 fw-bold">
                    Visi Misi
                </div>
                <div class="col-md-6 col-xl-8">
                    <div class="summernote-content">
                        {!! $visi_misi ?? 'Data Tidak Ada' !!}
                    </div>
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
                    Pop Up Brosur & Pendaftaran
                </div>
                <div class="col-md-6 col-xl-8">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="popup_pendaftaran" {{ $popup_pendaftaran ? 'checked' : '' }} disabled>
                        <label class="form-check-label" for="popup_pendaftaran">{{ $popup_pendaftaran ? 'Enable' : 'Disable' }}</label>
                    </div>
                </div>
            </div>
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
