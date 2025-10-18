<x-layouts.dashboard.app title="Ubah guru & staf">
    {{-- * my style --}}
    <x-slot:myStyle>

    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">Ubah Guru & Staf</div>
        </div>
        <form action="{{ route('dashboard.guru-staf.update', $guruAndStaf) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="card-body">
                {{-- ? preview image --}}
                <div class="col-md-2">
                    <img
                        src="{{ $guruAndStaf->foto ? asset('storage/' . $guruAndStaf->foto) : asset('img/defaultsvg.svg') }}"
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
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Nama Lengkap"
                            name="nama_lengkap"
                            value="{{ old('nama_lengkap', $guruAndStaf->nama_lengkap) }}"
                            placeholder="Masukan Nama Lengkap"
                        />
                    </div>
                    {{-- ? nip --}}
                    <div class="col-md-2">
                        <x-dashboard.input
                            label="NIP"
                            name="nip"
                            type="number"
                            value="{{ old('nip', $guruAndStaf->nip) }}"
                            placeholder="Masukan NUPTX"
                        />
                    </div>
                    {{-- ? nuptx --}}
                    <div class="col-md-3">
                        <x-dashboard.input
                            label="NUPTX"
                            name="nuptx"
                            type="number"
                            value="{{ old('nuptx', $guruAndStaf->nuptx) }}"
                            placeholder="Masukan NUPTX"
                        />
                    </div>
                    {{-- ? ptx --}}
                    <div class="col-md-3">
                        <x-dashboard.input
                            label="PTX"
                            name="ptx"
                            type="number"
                            value="{{ old('ptx', $guruAndStaf->ptx) }}"
                            placeholder="Masukan PTX"
                        />
                    </div>
                    {{-- ? status_kewarganegaraan --}}
                    <div class="col-md-3">
                        <x-dashboard.input-select label="Status Kewarganegaraan" name="status_kewarganegaraan">
                            <option value="warga indoneisa" @if (old('status_kewarganegaraan', $guruAndStaf->status_kewarganegaraan) == 'warga indoneisa') selected @endif>Warga Indonesia</option>
                            <option value="warga luar" @if (old('status_kewarganegaraan', $guruAndStaf->status_kewarganegaraan) == 'warga luar') selected @endif>Warga Luar</option>
                        </x-dashboard.input-select>
                    </div>
                    {{-- ? sk_pengangkatan --}}
                    <div class="col-md-3">
                        <x-dashboard.input
                            label="SK Pengangkatan"
                            name="sk_pengangkatan"
                            value="{{ old('sk_pengangkatan', $guruAndStaf->sk_pengangkatan) }}"
                            placeholder="Masukan SK Pengangkatan"
                        />
                    </div>
                    {{-- ? lembaga_pengangkatan --}}
                    <div class="col-md-3">
                        <x-dashboard.input
                            label="Lembaga Pengangkatan"
                            name="lembaga_pengangkatan"
                            value="{{ old('lembaga_pengangkatan', $guruAndStaf->lembaga_pengangkatan) }}"
                            placeholder="Masukan Lembaga Pengangkatan"
                        />
                    </div>
                    {{-- ? agama --}}
                    <div class="col-md-3">
                        <x-dashboard.input-select label="Agama" name="agama">
                            <option value="Islam" @if (old('agama', $guruAndStaf->agama) == 'Islam') selected @endif>Islam</option>
                            <option value="katholik" @if (old('agama', $guruAndStaf->agama) == 'katholik') selected @endif>Katholik</option>
                            <option value="protestan" @if (old('agama', $guruAndStaf->agama) == 'protestan') selected @endif>Protestan</option>
                            <option value="hindu" @if (old('agama', $guruAndStaf->agama) == 'hindu') selected @endif>Hindu</option>
                            <option value="budha" @if (old('agama', $guruAndStaf->agama) == 'budha') selected @endif>Budha</option>
                            <option value="konghucu" @if (old('agama', $guruAndStaf->agama) == 'konghucu') selected @endif>Konghucu</option>
                        </x-dashboard.input-select>
                    </div>
                    {{-- ? alamat --}}
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Alamat"
                            name="alamat"
                            value="{{ old('alamat', $guruAndStaf->alamat) }}"
                            placeholder="Masukan Alamat"
                        />
                    </div>
                    {{-- ? rt --}}
                    <div class="col-md-2">
                        <x-dashboard.input
                            label="RT"
                            name="rt"
                            type="number"
                            value="{{ old('rt', $guruAndStaf->rt) }}"
                            placeholder="RT"
                        />
                    </div>
                    {{-- ? rw --}}
                    <div class="col-md-2">
                        <x-dashboard.input
                            label="RW"
                            name="rw"
                            type="number"
                            value="{{ old('rw', $guruAndStaf->rw) }}"
                            placeholder="Rw"
                        />
                    </div>
                    {{-- ? nama_dusun --}}
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Nama Dusun"
                            name="nama_dusun"
                            value="{{ old('nama_dusun', $guruAndStaf->nama_dusun) }}"
                            placeholder="Masukan Nama Dusun"
                        />
                    </div>
                    {{-- ? desa_kelurahan --}}
                    <div class="col-md-3">
                        <x-dashboard.input
                            label="Desa/Kelurahan"
                            name="desa_kelurahan"
                            value="{{ old('desa_kelurahan', $guruAndStaf->desa_kelurahan) }}"
                            placeholder="Masukan Desa/Kelurahan"
                        />
                    </div>
                    {{-- ? kecamatan --}}
                    <div class="col-md-3">
                        <x-dashboard.input
                            label="Kecamatan"
                            name="kecamatan"
                            value="{{ old('kecamatan', $guruAndStaf->kecamatan) }}"
                            placeholder="Masukan Kecamatan"
                        />
                    </div>
                    {{-- ? kode_pos --}}
                    <div class="col-md-3">
                        <x-dashboard.input
                            label="Kode Pos"
                            name="kode_pos"
                            value="{{ old('kode_pos', $guruAndStaf->kode_pos) }}"
                            placeholder="Masukan Kode Pos"
                        />
                    </div>
                    {{-- ? telepon --}}
                    <div class="col-md-3">
                        <x-dashboard.input
                            label="Telepon"
                            name="telepon"
                            value="{{ old('telepon', $guruAndStaf->telepon) }}"
                            placeholder="Masukan Telepon"
                        />
                    </div>
                    {{-- ? email --}}
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Email"
                            name="email"
                            value="{{ old('email', $guruAndStaf->email) }}"
                            placeholder="Masukan Email"
                        />
                    </div>
                    {{-- ? sumber_gaji --}}
                    <div class="col-md-3">
                        <x-dashboard.input
                            label="Sumber Gaji"
                            name="sumber_gaji"
                            value="{{ old('sumber_gaji', $guruAndStaf->sumber_gaji) }}"
                            placeholder="Masukan Sumber Gaji"
                        />
                    </div>
                    {{-- ? nama_ibu_kandung --}}
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Nama Ibu Kandung"
                            name="nama_ibu_kandung"
                            value="{{ old('nama_iub_kandung', $guruAndStaf->nama_ibu_kandung) }}"
                            placeholder="Masukan Nama Ibu Kandung"
                        />
                    </div>
                    {{-- ? status_perkawinan --}}
                    <div class="col-md-3">
                        <x-dashboard.input-select label="Status Perkawinan" name="status_perkawinan">
                            <option value="belum menikah" @if (old('status_perkawinan', $guruAndStaf->status_perkawinan) == 'belum menikah') selected @endif>Belum Menikah</option>
                            <option value="sudah menikah" @if (old('status_perkawinan', $guruAndStaf->status_perkawinan) == 'sudah menikah') selected @endif>Sudah Menikah</option>
                            <option value="janda" @if (old('status_perkawinan', $guruAndStaf->status_perkawinan) == 'janda') selected @endif>Janda</option>
                            <option value="duda" @if (old('status_perkawinan', $guruAndStaf->status_perkawinan) == 'duda') selected @endif>Duda</option>
                        </x-dashboard.input-select>
                    </div>
                    {{-- ? nik --}}
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="NIK"
                            name="nik"
                            value="{{ old('nik', $guruAndStaf->nik) }}"
                            placeholder="Masukan NIK"
                        />
                    </div>

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
        {{-- my script guru dan stafi foto --}}
        <script src="{{ asset('js/dashboard/editOrUpdateGuruAndStaf.js') }}"></script>
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
