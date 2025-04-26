<x-layouts.dashboard.app title="Ubah testimoni">
    {{-- * my style --}}
    <x-slot:myStyle>
        
    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">Ubah Testimoni</div>
        </div>

        <form action="{{ route('dashboard.testimoni.update', $testimoni) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="card-body">
                <div class="col-md-5">
                    <img
                        src="{{ $testimoni->avatar ? asset('storage/' . $testimoni->avatar) : asset('img/defaultsvg.svg') }}"
                        class="bg-secondary card-img-top rounded-lg"
                        id="photo_preview"
                        alt="Preview-poster-image"
                        loading="lazy"
                        width="100%"
                    />
                </div>
                <div class="col-md-5">
                    <x-dashboard.input-file
                        label="Foto"
                        name="avatar"
                        onchange="previewImage(event)"
                    />
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Nama Lengkap"
                            name="nama_lengkap"
                            value="{{ old('nama_lengkap', $testimoni->nama_lengkap) }}"
                            placeholder="Masukan Nama Lengkap Anda"
                        />
                    </div>
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Tahun Lulus"
                            name="tahun_lulus"
                            value="{{ old('tahun_lulus', $testimoni->tahun_lulus) }}"
                            placeholder="Masukan Tahun Lulus Anda"
                        />
                    </div>
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Pekerjaan"
                            name="pekerjaan"
                            value="{{ old('pekerjaan', $testimoni->pekerjaan) }}"
                            placeholder="Masukan Pekerjaan Anda (Tidak Wajub)"
                        />
                    </div>
                </div>
                <div class="col-md-12">
                    <x-dashboard.input-textarea
                        label="Testimoni Anda"
                        name="content"
                        rows="5"
                        value="{{ old('content', $testimoni->content) }}"
                        placeholder="Masukan Testimoni Anda"
                    />
                </div>
                <div class="col-md-12">
                    <x-dashboard.input-switches
                        label="Publish Testimoni"
                        name="status"
                        checked="{{ old('status', $testimoni->status) }}"
                    />
                </div>
            </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success">Perbaharui</button>
            </div>
        </form>
    </div>
    {{-- todo content ... --}}

    {{-- * my script --}}
    <x-slot:myScript>
        <script src="{{ asset('js/dashboard/addOrUpdateTestimoni.js') }}"></script>
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
