<x-layouts.dashboard.app title="Tambah Berita">
    {{-- * my style --}}
    <x-slot:myStyle>
        {{-- ? summernote CSS  --}}
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">

        {{-- ? style from table summernote editor --}}
        <style>
            table.table-bordered th,
            table.table-bordered td {
                border: 1px solid black !important;
            }
        </style>
    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Berita</div>
        </div>

        <form action="{{ route('dashboard.berita.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="col-md-5">
                    <img
                        src="{{ asset('img/defaultsvg.svg') }}"
                        class="bg-secondary card-img-top rounded-lg"
                        id="photo_preview"
                        alt="Preview-poster-image"
                        loading="lazy"
                        width="100%"
                    />
                </div>
                <div class="col-md-5">
                    <x-dashboard.input-file
                        label="Poster"
                        name="poster"
                        onchange="previewImage(event)"
                    />
                </div>
                <div class="col-md-12">
                    @error('content')
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <x-dashboard.input-textarea
                        label="Deskripsi Berita"
                        name="content"
                        rows="5"
                        value="{{ old('content') }}"
                        placeholder="Masukan Deskripsi Berita"
                    />
                </div>
                <div class="col-md-12">
                    <x-dashboard.input-switches
                        label="Publish Berita"
                        name="status"
                        checked="{{ old('status') }}"
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

    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
