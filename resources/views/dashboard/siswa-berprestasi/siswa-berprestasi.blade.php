<x-layouts.dashboard.app title="Siswa Berprestasi">
    {{-- * my style --}}
    <x-slot:myStyle>
        {{-- ? sweetalert 2 lib --}}
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">

        {{-- ? toastify css  --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

        <style>
            #basic-datatables_wrapper td.white-space {
                white-space: nowrap;
            }
        </style>
    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
        <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Siswa Berprestasi</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <x-dashboard.input-select label="Status Berita" name="status">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                    </x-dashboard.input-select>
                </div>
                <div class="col-md-3">
                    <x-dashboard.input
                        label="Tanggal Awal"
                        type="date"
                        name="start_date"
                    />
                </div>
                <div class="col-md-3">
                    <x-dashboard.input
                        label="Tanggal Akhir"
                        type="date"
                        name="end_date"
                    />
                </div>
            </div>
            <div class="my-4">
                <a href="{{ route('dashboard.siswa-berprestasi.create') }}" class="btn btn-success">Tambah</A>
                <button id="button-filter-reset" class="btn btn-secondary">Reset Filter</button>
            </div>

            <div class="table-responsive">
                <div
                    id="basic-datatables_wrapper"
                    class="dataTables_wrapper container-fluid dt-bootstrap4"
                    >
                    <div class="row">
                        <div class="col-sm-12">
                            <table
                                id="berita-datatable"
                                class="display table table-striped table-hover dataTable"
                                role="grid"
                                data-url="{{ route('dashboard.siswa-berprestasi.fetch') }}"
                                >
                                <thead>
                                    <tr role="row">
                                        <th style="width: 20%;">No</th>
                                        <th style="width: 100%;">Foto</th>
                                        <th style="width: 100%;">Nama Lengkap</th>
                                        <th style="width: 50px;">Kelas</th>
                                        <th style="width: 50px;">Tahun</th>
                                        <th style="width: 50px;">Nama Penyelenggara</th>
                                        <th style="width: 100px">Tanggal Buat</th>
                                        <th style="width: 100px;">Tanggal Perbaharui</th>
                                        <th style="width: 120px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr role="row">
                                        <th style="width: 20%;">No</th>
                                        <th style="width: 100%;">Foto</th>
                                        <th style="width: 100%;">Nama Lengkap</th>
                                        <th style="width: 50px;">Kelas</th>
                                        <th style="width: 50px;">Tahun</th>
                                        <th style="width: 50px;">Nama Penyelenggara</th>
                                        <th style="width: 100px">Tanggal Buat</th>
                                        <th style="width: 100px;">Tanggal Perbaharui</th>
                                        <th style="width: 120px;">Aksi</th></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- todo content ... --}}

    {{-- ? modal --}}
    <x-dashboard.modal modalLabel="Detail Galeri Foto" modalSize="lg" />
    {{-- ? modal --}}

    {{-- * my script --}}
    <x-slot:myScript>
        {{-- ? Datatables --}}
        <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
        {{-- ? sweatalert 2 lib --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {{-- ? toastify library  --}}
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        {{-- ? myscript --}}
        {{-- <script type="module" src="{{ asset('js/dashboard/galeriFoto.js') }}"></script> --}}
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
