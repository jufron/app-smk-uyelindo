<x-layouts.dashboard.app title="testimoni">
    {{-- * my style --}}
    <x-slot:myStyle>
        {{-- ? sweetalert 2 lib --}}
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">

        {{-- ? toastify css  --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

        <style>
            /* #testimoni-datatable th, */
            #testimoni-datatable td.white-space {
                white-space: nowrap; /* supaya isi kolom tidak turun ke bawah */
            }
        </style>
    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Testimoni</h4>
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
                    <x-dashboard.input-select label="Tahun" name="tahun">
                        @foreach ($tahun as $t)
                        <option value="{{ $t }}">{{ $t }}</option>
                        @endforeach
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
                <a href="{{ route('dashboard.testimoni.create') }}" class="btn btn-success">Tambah</A>
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
                                id="testimoni-datatable"
                                class="display table table-striped table-hover dataTable"
                                role="grid"
                                data-url="{{ route('dashboard.testimoni.fetch') }}"
                                >
                                <thead>
                                    <tr role="row">
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tahun Lulus</th>
                                        <th>Status</th>
                                        <th>Pekerjaan</th>
                                        <th>Tanggal Buat</th>
                                        <th>Tanggal Perbaharui</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr role="row">
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tahun Lulus</th>
                                        <th>Status</th>
                                        <th>Pekerjaan</th>
                                        <th>Tanggal Buat</th>
                                        <th>Tanggal Perbaharui</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ? modal --}}
    <x-dashboard.modal modalLabel="Detail Testimoni" />
    {{-- ? modal --}}

    {{-- todo content ... --}}

    {{-- * my script --}}
    <x-slot:myScript>
        {{-- ? Datatables --}}
        <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
        {{-- ? sweatalert 2 lib --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {{-- ? toastify library  --}}
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        {{-- ? myscript --}}
        <script type="module" src="{{ asset('js/dashboard/testimoni.js') }}"></script>
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
