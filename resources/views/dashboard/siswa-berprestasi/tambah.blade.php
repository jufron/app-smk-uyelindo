<x-layouts.dashboard.app title="Tambah Siswa Berprestasi">
    {{-- * my style --}}
    <x-slot:myStyle>

    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Siswa Berprestasi</div>
        </div>

        <form action="{{ route('dashboard.siswa-berprestasi.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="col-md-2">
                    <img
                        src="{{ asset('img/defaultsvg.svg') }}"
                        class="bg-secondary card-img-top rounded-lg"
                        id="photo_preview"
                        alt="Preview-galeri-foto"
                        loading="lazy"
                        width="100%"
                    />
                </div>
                {{-- ? foto --}}
                <div class="col-md-5">
                    <x-dashboard.input-file
                        label="Foto"
                        name="foto"
                        onchange="previewImage(event)"
                    />
                </div>
                <div class="row">
                    {{-- ? nama lengkap --}}
                    <div class="col-md-5">
                        <x-dashboard.input
                            label="Nama Lengkap"
                            name="nama_lengkap"
                            value="{{ old('nama_lengkap') }}"
                            placeholder="Masukan Nama Lengkap"
                        />
                    </div>
                    {{-- ? kelas --}}
                    <div class="col-md-2">
                        <x-dashboard.input-select label="Kelas" name="kelas">
                            <option value="X" @if (old('kelas') == 'X') selected @endif>X</option>
                            <option value="XI" @if (old('kelas') == 'XI') selected @endif>XI</option>
                            <option value="XII" @if (old('kelas') == 'XII') selected @endif>XII</option>
                        </x-dashboard.input-select>
                    </div>
                    {{-- ? jenis prestasi --}}
                    <div class="col-md-3">
                        <x-dashboard.input-select label="Jenis Prestasi" name="jenis_prestasi">
                            <option value="Akademik" @if (old('jenis_prestasi') == 'Akademik') selected @endif>Akademik</option>
                            <option value="Non Akademik" @if (old('jenis_prestasi') == 'Non Akademik') selected @endif>Non Akademik</option>
                        </x-dashboard.input-select>
                    </div>
                    {{-- ? peringkat --}}
                    <div class="col-md-2">
                        <x-dashboard.input-select label="Peringkat" name="peringkat">
                            <option value="Juara 1" @if (old('peringkat') == 'Juara 1') selected @endif>Juara 1</option>
                            <option value="Juara 2" @if (old('peringkat') == 'Juara 2') selected @endif>Juara 2</option>
                            <option value="Juara 3" @if (old('peringkat') == 'Juara 3') selected @endif>Juara 3</option>
                            <option value="Harapan 1" @if (old('peringkat') == 'Harapan 1') selected @endif>Harapan 1</option>
                            <option value="Harapan 2" @if (old('peringkat') == 'Harapan 2') selected @endif>Harapan 2</option>
                            <option value="Harapan 3" @if (old('peringkat') == 'Harapan 3') selected @endif>Harapan 3</option>
                        </x-dashboard.input-select>
                    </div>
                    {{-- ? tahun --}}
                    <div class="col-md-2">
                        <x-dashboard.input
                            label="Tahun"
                            name="tahun"
                            type="number"
                            value="{{ old('tahun') }}"
                            placeholder="Masukan Tahun"
                        />
                    </div>
                    {{-- ? tingkat --}}
                    <div class="col-md-3">
                        <x-dashboard.input-select label="Tingkat" name="tingkat">
                            <option value="Kecamatan" @if (old('tingkat') == 'Kecamatan') selected @endif>Kecamatan</option>
                            <option value="Kabupaten" @if (old('tingkat') == 'Kabupaten') selected @endif>Kabupaten</option>
                            <option value="Provinsi" @if (old('tingkat') == 'Provinsi') selected @endif>Provinsi</option>
                            <option value="Nasional" @if (old('tingkat') == 'Nasional') selected @endif>Nasional</option>
                            <option value="Internasional" @if (old('tingkat') == 'Internasional') selected @endif>Internasional</option>
                        </x-dashboard.input-select>
                    </div>
                    {{-- ? nama penyelenggara --}}
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Nama Penyelenggara"
                            name="nama_penyelenggara"
                            value="{{ old('nama_penyelenggara') }}"
                            placeholder="Masukan Nama Penyelenggara"
                        />
                    </div>
                    {{-- ? keterangan --}}
                    <div class="col-md-12">
                        @error('keterangan')
                        <div class="alert alert-danger my-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                        <x-dashboard.input-textarea
                            label="Keterangan"
                            name="keterangan"
                            rows="5"
                            value="{{ old('keterangan') }}"
                            placeholder="Masukan keterangan"
                        />
                    </div>
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
        <script src="{{ asset('js/dashboard/editOrUpdateSiswaBerprestasi.js') }}"></script>
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
