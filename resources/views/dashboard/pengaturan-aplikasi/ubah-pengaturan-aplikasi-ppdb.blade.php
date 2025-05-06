<x-layouts.dashboard.app title="ubah pengaturan aplikasi ppdb">
    {{-- * my style --}}
    <x-slot:myStyle>

    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">Pengaturan Aplikasi PPDB</div>
        </div>

        <form action="{{ route('dashboard.pengaturan-aplikasi-ppdb.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                {{-- ? preview foto banner --}}
                <div class="col-md-5">
                    <img
                        src="{{ asset('img/defaultsvg.svg') }}"
                        id="brosur_pendaftaran_preview"
                        alt="Preview-brosur-pendaftaran"
                        width="300px"
                        loading="lazy"
                    />
                </div>
                {{-- ? brosur pendaftaran  --}}
                <div class="col-md-5">
                    <x-dashboard.input-file
                        label="Brosur Pendaftaran"
                        name="brosur_pendaftaran"
                        onchange="previewImage(event, 'brosur_pendaftaran_preview')"
                    />
                </div>

                <div class="row">
                    {{-- ? tanggal_pendaftaran_gelombang_1_awal --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Tanggal Pendaftaran Gelombang 1 Awal"
                            type="date"
                            name="tanggal_pendaftaran_gelombang_1_awal"
                            value="{{ old('tanggal_pendaftaran_gelombang_1_awal', $tanggal_pendaftaran_gelombang_1_awal) }}"
                            placeholder="Masukan Pendaftaran Gelombang 1 Awal"
                        />
                    </div>
                    {{-- ? tanggal_pendaftaran_gelombang_1_akhir --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Tanggal Pendaftaran Gelombang 1 Akhir"
                            type="date"
                            name="tanggal_pendaftaran_gelombang_1_akhir"
                            value="{{ old('tanggal_pendaftaran_gelombang_1_akhir', $tanggal_pendaftaran_gelombang_1_akhir) }}"
                            placeholder="Masukan Pendaftaran Gelombang 1 Akhir"
                        />
                    </div>
                    {{-- ? tanggal_pendaftaran_gelombang_2_awal --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Tanggal Pendaftaran Gelombang 2 Awal"
                            type="date"
                            name="tanggal_pendaftaran_gelombang_2_awal"
                            value="{{ old('tanggal_pendaftaran_gelombang_2_awal', $tanggal_pendaftaran_gelombang_2_awal) }}"
                            placeholder="Masukan Pendaftaran Gelombang 2 Akhir"
                        />
                    </div>
                    {{-- ? tanggal_pendaftaran_gelombang_2_akhir --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Tanggal Pendaftaran Gelombang 2 Akhir"
                            type="date"
                            name="tanggal_pendaftaran_gelombang_2_akhir"
                            value="{{ old('tanggal_pendaftaran_gelombang_2_akhir', $tanggal_pendaftaran_gelombang_2_akhir) }}"
                            placeholder="Masukan Pendaftaran Gelombang 2 Akhir"
                        />
                    </div>
                    {{-- ? tanggal_pendaftaran_gelombang_3_awal --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Tanggal Pendaftaran Gelombang 3 Awal"
                            type="date"
                            name="tanggal_pendaftaran_gelombang_3_awal"
                            value="{{ old('tanggal_pendaftaran_gelombang_3_awal', $tanggal_pendaftaran_gelombang_3_awal) }}"
                            placeholder="Masukan Pendaftaran Gelombang 3 Awal"
                        />
                    </div>
                    {{-- ? tanggal_pendaftaran_gelombang_3_akhir --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Tanggal Pendaftaran Gelombang 3 Akhir"
                            type="date"
                            name="tanggal_pendaftaran_gelombang_3_akhir"
                            value="{{ old('tanggal_pendaftaran_gelombang_3_akhir', $tanggal_pendaftaran_gelombang_3_akhir) }}"
                            placeholder="Masukan Pendaftaran Gelombang 3 Akhir"
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
        <script>
            function previewImage(event, elementIdPreviewTarget) {
                const reader = new FileReader();
                reader.onload = function(){
                    // const preview = document.getElementById('photo_preview');
                    const preview = document.getElementById(elementIdPreviewTarget);
                    preview.src = reader.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
