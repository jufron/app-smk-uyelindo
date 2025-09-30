<x-layouts.dashboard.app title="Tambah Galeri Foto">
    {{-- * my style --}}
    <x-slot:myStyle>

    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Galeri Foto</div>
        </div>

        <form action="{{ route('dashboard.galery-foto.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="col-md-5">
                    <img
                        src="{{ asset('img/defaultsvg.svg') }}"
                        class="bg-secondary card-img-top rounded-lg"
                        id="photo_preview"
                        alt="Preview-galeri-foto"
                        loading="lazy"
                        width="100%"
                    />
                </div>
                <div class="col-md-5">
                    <x-dashboard.input-file
                        label="Foto"
                        name="foto"
                        onchange="previewImage(event)"
                    />
                </div>
                <div class="col-md-12">
                    @error('deskripsi')
                    <div class="alert alert-danger my-2" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <x-dashboard.input-textarea
                        label="Deskripsi Foto"
                        name="deskripsi"
                        rows="5"
                        value="{{ old('deskripsi') }}"
                        placeholder="Masukan Deskripsi Foto Anda"
                    />
                </div>
                <div class="col-md-12">
                    <x-dashboard.input-switches
                        label="Publish foto"
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
        {{-- my script faleri foto --}}
        <script src="{{ asset('js/dashboard/addOrUpdateGaleriFoto.js') }}"></script>
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
