<x-layouts.dashboard.app title="ubah pengaturan aplikasi umum">
    {{-- * my style --}}
    <x-slot:myStyle>
        {{-- ? summernote CSS  --}}
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">

        <style>
            .note-editable ul {
                list-style-type: initial !important;
                padding-left: 1.5rem !important;
                margin-left: 0 !important;
            }

            .note-editable ol,
            .note-editable ol > li {
                list-style-type: decimal !important;
                padding-left: 1.5rem !important;
            }
        </style>
    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">Pengaturan Aplikasi Umum</div>
        </div>

        <form action="{{ route('dashboard.pengaturan-aplikasi-umum.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                {{-- ? sambutan kepala sekolah textarea --}}
                <div class="col-md-12">
                    <x-dashboard.input-textarea
                        label="Sambutan Kepala Sekolah"
                        name="sambutan_kepala_sekolah"
                        rows="5"
                        value="{{ old('sambutan_kepala_sekolah', $sambutan_kepala_sekolah) }}"
                        placeholder="Kalimt Sambutan Kepala Sekolah"
                    />
                </div>
                {{-- ? preview foto kepala sekolah --}}
                <div class="col-md-5">
                    <img
                        src="{{ asset('img/defaultsvg.svg') }}"
                        id="foto_kepala_sekolah_preview"
                        alt="Preview-foto-kepala-sekolah"
                        width="200px"
                        loading="lazy"
                    />
                </div>
                <div class="row">
                    {{-- ? input file foto kepala sekolah --}}
                    <div class="col-md-5">
                        <x-dashboard.input-file
                            label="Foto Kepala Sekolah"
                            name="foto_kepala_sekolah"
                            onchange="previewImage(event, 'foto_kepala_sekolah_preview')"
                        />
                    </div>
                    {{-- ? nama kepala sekolah input --}}
                    <div class="col-md-7">
                        <x-dashboard.input
                            label="Nama Kepala Sekolah"
                            name="nama_kepala_sekolah"
                            value="{{ old('nama_kepala_sekolah', $nama_kepala_sekolah) }}"
                            placeholder="Masukan Nama Kepala Sekolah"
                        />
                    </div>
                </div>

                <div class="col-md-12">
                    @error('sejarah')
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <x-dashboard.input-textarea
                        class="summernote-content"
                        label="Sejarah Sekolah"
                        name="sejarah"
                        rows="6"
                        value="{{ old('sejarah', $sejarah) }}"
                        placeholder="Masukan sejarah Sekolah"
                    />
                </div>
                <div class="col-md-12">
                    @error('visi_misi')
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <x-dashboard.input-textarea
                        label="Visi Misi Sekolah"
                        name="visi_misi"
                        rows="6"
                        value="{{ old('visi_misi', $visi_misi) }}"
                        placeholder="Masukan visi_misi Sekolah"
                    />
                </div>
                {{-- ? struktur_organisasi --}}
                <div class="col-md-5">
                    <img
                        src="{{ asset('img/defaultsvg.svg') }}"
                        id="struktur_organisasi_preview"
                        alt="Preview-poster-image"
                        width="400px"
                        loading="lazy"
                    />
                </div>
                {{-- ? input file foto kepala sekolah --}}
                <div class="col-md-5">
                    <x-dashboard.input-file
                        label="Struktur Organisasi"
                        name="struktur_organisasi"
                        onchange="previewImage(event, 'struktur_organisasi_preview')"
                    />
                </div>
            </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
    {{-- todo content ... --}}

    {{-- * my script --}}
    <x-slot:myScript>
        {{-- ? lib support summernote editor --}}
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

        <script src="{{ asset('js/dashboard/pengaturanAppUmum.js') }}"></script>
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
