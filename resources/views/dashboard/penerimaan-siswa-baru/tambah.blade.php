<x-layouts.dashboard.app title="Tambah Penerimaan Siswa Baru">
    {{-- * my style --}}
    <x-slot:myStyle>

    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Siswa Baru</div>
        </div>

        <form action="{{ route('dashboard.penerimaan-peserta-didik-baru.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                {{-- ? preview image --}}
                {{-- <div class="col-md-2">
                    <img
                        src="{{ asset('img/defaultsvg.svg') }}"
                        class="bg-secondary card-img-top rounded-lg"
                        id="photo_preview"
                        alt="Preview-galeri-foto"
                        loading="lazy"
                        width="100%"
                    />
                </div> --}}
                {{-- ? foto --}}
                {{-- <div class="col-md-5">
                    <x-dashboard.input-file
                        label="Foto"
                        name="foto"
                        onchange="previewImage(event)"
                    />
                </div> --}}
                <div class="row">
                    {{-- ? nama lengkap --}}
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Nama Lengkap"
                            name="nama_lengkap"
                            value="{{ old('nama_lengkap') }}"
                            placeholder="Masukan Nama Lengkap"
                        />
                    </div>
                    {{-- ? nama_panggilan --}}
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Nama Panggilan"
                            name="nama_panggilan"
                            value="{{ old('nama_panggilan') }}"
                            placeholder="Masukan Nama Panggilan"
                        />
                    </div>
                    {{-- ? email --}}
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Masukan Email"
                        />
                    </div>
                    {{-- ? nisn --}}
                    <div class="col-md-2">
                        <x-dashboard.input
                            label="NISN"
                            name="nisn"
                            type="number"
                            value="{{ old('nisn') }}"
                            placeholder="Masukan NISN"
                        />
                    </div>
                    {{-- ? tanggal_lahir --}}
                    <div class="col-md-3">
                        <x-dashboard.input
                            label="Tanggal Lahir"
                            name="tanggal_lahir"
                            type="date"
                            value="{{ old('tanggal_lahir') }}"
                            placeholder="Tanggal Lahir"
                        />
                    </div>
                    {{-- ? tempat lahir --}}
                    <div class="col-md-3">
                        <x-dashboard.input
                            label="Tempat Lahir"
                            name="tempat_lahir"
                            value="{{ old('tempat_lahir') }}"
                            placeholder="Masukan Tempat Lahir"
                        />
                    </div>
                    {{-- ? jenis_kelamin --}}
                    <div class="col-md-2">
                        <x-dashboard.input-select label="Jenis Kelamin" name="jenis_kelamin">
                            <option value="laki-laki" @if (old('jenis_kelamin') == 'laki-laki') selected @endif>Laki-Laki</option>
                            <option value="perempuan" @if (old('jenis_kelamin') == 'perempuan') selected @endif>Perempuan</option>
                        </x-dashboard.input-select>
                    </div>
                    {{-- ? agama --}}
                    <div class="col-md-2">
                        <x-dashboard.input-select label="Agama" name="agama">
                            <option value="Islam" @if (old('agama') == 'Islam') selected @endif>Islam</option>
                            <option value="katholik" @if (old('agama') == 'katholik') selected @endif>Katholik</option>
                            <option value="protestan" @if (old('agama') == 'protestan') selected @endif>Protestan</option>
                            <option value="hindu" @if (old('agama') == 'hindu') selected @endif>Hindu</option>
                            <option value="budha" @if (old('agama') == 'budha') selected @endif>Budha</option>
                            <option value="konghucu" @if (old('agama') == 'konghucu') selected @endif>Konghucu</option>
                        </x-dashboard.input-select>
                    </div>
                    {{-- ? alamat_siswa --}}
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Alamat Siswa"
                            name="alamat_siswa"
                            value="{{ old('alamat_siswa') }}"
                            placeholder="Masukan Alamat Siswa"
                        />
                    </div>
                    {{-- ? alamat_sekolah_sebelumnya --}}
                    <div class="col-md-4">
                        <x-dashboard.input
                            label="Alamat Sekolah Sebelumnya"
                            name="alamat_sekolah_sebelumnya"
                            value="{{ old('alamat_sekolah_sebelumnya') }}"
                            placeholder="Masukan Alamat Sekolah Sebelumnya"
                        />
                    </div>
                    {{-- ? anak_ke --}}
                    <div class="col-md-3">
                        <x-dashboard.input-select label="Anak Ke" name="anak_ke">
                            <option value="1" @if (old('anak_ke') == '1') selected @endif>1</option>
                            <option value="2" @if (old('anak_ke') == '2') selected @endif>2</option>
                            <option value="3" @if (old('anak_ke') == '3') selected @endif>3</option>
                            <option value="4" @if (old('anak_ke') == '4') selected @endif>4</option>
                            <option value="5" @if (old('anak_ke') == '5') selected @endif>5</option>
                            <option value="6" @if (old('anak_ke') == '6') selected @endif>6</option>
                            <option value="7" @if (old('anak_ke') == '7') selected @endif>7</option>
                            <option value="8" @if (old('anak_ke') == '8') selected @endif>8</option>
                            <option value="9" @if (old('anak_ke') == '9') selected @endif>9</option>
                            <option value="10" @if (old('anak_ke') == '10') selected @endif>10</option>
                            <option value="10+" @if (old('anak_ke') == '10+') selected @endif>10+</option>
                        </x-dashboard.input-select>
                    </div>
                    {{-- ? status_anak --}}
                    <div class="col-md-3">
                        <x-dashboard.input-select label="Status Anak" name="status_anak">
                            <option value="anak kandung" @if (old('status_anak') == 'anak kandung') selected @endif>Anak Kandung</option>
                            <option value="anak angkat" @if (old('status_anak') == 'anak angkat') selected @endif>anak Angkat</option>
                            <option value="anak tiri" @if (old('status_anak') == 'anak tiri') selected @endif>anak Tiri</option>
                            <option value="lainya" @if (old('status_anak') == 'lainya') selected @endif>Lainya</option>
                        </x-dashboard.input-select>
                    </div>
                    {{-- ? nomor_telepon_siswa --}}
                    <div class="col-md-3">
                        <x-dashboard.input
                            label="Nomor Telepon Siswa"
                            name="nomor_telepon_siswa"
                            value="{{ old('nomor_telepon_siswa') }}"
                            placeholder="Masukan Nomor Telepon Siswa"
                        />
                    </div>
                    {{-- ? jumlah_saudara_kandung --}}
                    <div class="col-md-3">
                        <x-dashboard.input-select label="Jumlah Saudara Kandung" name="jumlah_saudara_kandung">
                            <option value="1" @if (old('jumlah_saudara_kandung') == '1') selected @endif>1</option>
                            <option value="2" @if (old('jumlah_saudara_kandung') == '2') selected @endif>2</option>
                            <option value="3" @if (old('jumlah_saudara_kandung') == '3') selected @endif>3</option>
                            <option value="4" @if (old('jumlah_saudara_kandung') == '4') selected @endif>4</option>
                            <option value="5" @if (old('jumlah_saudara_kandung') == '5') selected @endif>5</option>
                            <option value="6" @if (old('jumlah_saudara_kandung') == '6') selected @endif>6</option>
                            <option value="7" @if (old('jumlah_saudara_kandung') == '7') selected @endif>7</option>
                            <option value="8" @if (old('jumlah_saudara_kandung') == '8') selected @endif>8</option>
                            <option value="9" @if (old('jumlah_saudara_kandung') == '9') selected @endif>9</option>
                            <option value="10" @if (old('jumlah_saudara_kandung') == '10') selected @endif>10</option>
                            <option value="10+" @if (old('jumlah_saudara_kandung') == '10+') selected @endif>10+</option>
                        </x-dashboard.input-select>
                    </div>

                    {{-- ? tinggal_dengan --}}
                    <div class="col-md-2">
                        <x-dashboard.input-select label="Tinggal Dengan" name="tinggal_dengan">
                            <option value="orang tua" @if (old('tinggal_dengan') == 'orang tua') selected @endif>Orang Tua</option>
                            <option value="wali murid" @if (old('tinggal_dengan') == 'wali murid') selected @endif>Wali Murid</option>
                        </x-dashboard.input-select>
                    </div>
                </div>

                <br>

                <div id="wali-murid">
                    <div class="row">
                        {{-- ? nama_lengkap_wali_murid --}}
                        <div class="col-md-4">
                            <x-dashboard.input
                                label="Nama Lengkap Wali Murid"
                                name="nama_lengkap_wali_murid"
                                value="{{ old('nama_lengkap_wali_murid') }}"
                                placeholder="Nama Lengkap Wali Murid"
                            />
                        </div>
                        {{-- ? pekerjaan_wali_murid --}}
                        <div class="col-md-4">
                            <x-dashboard.input
                                label="Pekerjaan Wali Murid"
                                name="pekerjaan_wali_murid"
                                value="{{ old('pekerjaan_wali_murid') }}"
                                placeholder="Pekerjaan Wali Murid"
                            />
                        </div>
                        {{-- ? hubugan_dengan_siswa --}}
                        <div class="col-md-3">
                            <x-dashboard.input-select label="Hubungan Dengan Siswa" name="hubungan_dengan_siswa">
                                <option value="kakek" @if (old('hubungan_dengan_siswa') == 'kakek') selected @endif>Kakek</option>
                                <option value="nenek" @if (old('hubungan_dengan_siswa') == 'nenek') selected @endif>Nenek</option>
                                <option value="paman" @if (old('hubungan_dengan_siswa') == 'paman') selected @endif>Paman</option>
                                <option value="bibi" @if (old('hubungan_dengan_siswa') == 'bibi') selected @endif>Bibi</option>
                                <option value="saudara" @if (old('hubungan_dengan_siswa') == 'saudara') selected @endif>Saudara</option>
                                <option value="lainya" @if (old('hubungan_dengan_siswa') == 'lainya') selected @endif>Lainya</option>
                            </x-dashboard.input-select>
                        </div>
                        {{-- ? alamat_wali_siswa --}}
                        <div class="col-md-4">
                            <x-dashboard.input
                                label="Alamat Wali Siswa"
                                name="alamat_wali_siswa"
                                value="{{ old('alamat_wali_siswa') }}"
                                placeholder="Alamat Wali Siswa"
                            />
                        </div>
                        {{-- ? nomor_hp_wali --}}
                        <div class="col-md-3">
                            <x-dashboard.input
                                label="Nomor Hp Wali"
                                name="nomor_hp_wali"
                                value="{{ old('nomor_hp_wali') }}"
                                placeholder="Masukan Nomor Hp Wali"
                            />
                        </div>
                    </div>
                </div>

                <div id="orang-tua">
                    <div class="row">
                        {{-- ? nama_lengkap_ayah --}}
                        <div class="col-md-4">
                            <x-dashboard.input
                                label="Nama Lengkap Ayah"
                                name="nama_lengkap_ayah"
                                value="{{ old('nama_lengkap_ayah') }}"
                                placeholder="Nama Lengkap Ayah"
                            />
                        </div>
                        {{-- ? pekerjaan_ayah --}}
                        <div class="col-md-4">
                            <x-dashboard.input
                                label="Pekerjaan Wali Murid"
                                name="pekerjaan_ayah"
                                value="{{ old('pekerjaan_ayah') }}"
                                placeholder="Pekerjaan Wali Murid"
                            />
                        </div>
                        {{-- ? pendidikan_ayah --}}
                        <div class="col-md-3">
                            <x-dashboard.input-select label="Pendidikan Ayah" name="pendidikan_ayah">
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
                            </x-dashboard.input-select>
                        </div>

                        {{-- ? nama_lengkap_ibu --}}
                        <div class="col-md-4">
                            <x-dashboard.input
                                label="Nama Lengkap Ibu"
                                name="nama_lengkap_ibu"
                                value="{{ old('nama_lengkap_ibu') }}"
                                placeholder="Nama Lengkap Ibu"
                            />
                        </div>
                        {{-- ? pekerjaan_ibu --}}
                        <div class="col-md-4">
                            <x-dashboard.input
                                label="Pekerjaan Ibu"
                                name="pekerjaan_ibu"
                                value="{{ old('pekerjaan_ibu') }}"
                                placeholder="Pekerjaan Ibu"
                            />
                        </div>
                        {{-- ? pendidikan_ayah --}}
                        <div class="col-md-3">
                            <x-dashboard.input-select label="Pendidikan Ibu" name="pendidikan_ibu">
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
                            </x-dashboard.input-select>
                        </div>
                        {{-- ? nomor_telepon_orang_tua --}}
                        <div class="col-md-3">
                            <x-dashboard.input
                                label="Nomor Hp Orang Tua"
                                name="nomor_telepon_orang_tua"
                                value="{{ old('nomor_telepon_orang_tua') }}"
                                placeholder="Masukan Nomor Hp Orang Tua"
                            />
                        </div>
                        {{-- ? alamat_orang_tua --}}
                        <div class="col-md-4">
                            <x-dashboard.input
                                label="Alamat Orang Tua"
                                name="alamat_orang_tua"
                                value="{{ old('alamat_orang_tua') }}"
                                placeholder="Alamat Orang Tua"
                            />
                        </div>
                    </div>
                </div>

                <br>

            </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
    {{-- todo content ... --}}

    {{-- * my script --}}
    <x-slot:myScript>
        <script>
            const selectTinggalDengan = document.getElementById('tinggal_dengan');

            const containerInputWaliMurid = document.getElementById('wali-murid');
            const containerInputOrangTua = document.getElementById('orang-tua');

            function toggleInput() {
                const value = selectTinggalDengan.value;

                if (value === 'orang tua') {
                    containerInputOrangTua.style.display = 'block';
                    containerInputWaliMurid.style.display = 'none';
                } else if (value === 'wali murid') {
                    containerInputOrangTua.style.display = 'none';
                    containerInputWaliMurid.style.display = 'block';
                } else {
                    containerInputOrangTua.style.display = 'none';
                    containerInputWaliMurid.style.display = 'none';
                }
            }
            // Jalankan saat halaman pertama kali dimuat (agar old value Laravel tetap aktif)
            toggleInput();

            // Jalankan setiap kali pilihan berubah
            selectTinggalDengan.addEventListener('change', toggleInput);
        </script>
        {{-- my script guru dan stafi foto --}}
        {{-- <script src="{{ asset('js/dashboard/editOrUpdateGuruAndStaf.js') }}"></script> --}}
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
