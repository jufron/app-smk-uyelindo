<x-layouts.dashboard.app title="pertanyaan pendaftaran">
    {{-- * my style --}}
    <x-slot:myStyle>
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Pertanyaan Pendaftaran</h4>
        </div>
        <div class="card-body">
            <a href="{{ route('dashboard.daftar-pertanyaan-ppdb.create') }}" class="btn btn-success my-4">Tambah</A>
            <div class="table-responsive">
                <div
                    id="basic-datatables_wrapper"
                    class="dataTables_wrapper container-fluid dt-bootstrap4"
                    >
                    <div class="row">
                        <div class="col-sm-12">
                            <table
                                id="pertanyaan-pendaftar-datatables"
                                class="display table table-striped table-hover dataTable"
                                role="grid"
                                aria-describedby="basic-datatables_info"
                                >
                                <thead>
                                    <tr role="row">
                                        <th style="width: 50px;">No</th>
                                        <th style="width: 100px;">Pertanyaan</th>
                                        <th style="width: 100px;">Jawaban</th>
                                        <th style="width: 100px;">Tanggal Buat</th>
                                        <th style="width: 100px;">Tanggal Perbaharui</th>
                                        <th style="width: 150px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr role="row">
                                        <th style="width: 50px;">No</th>
                                        <th style="width: 100px;">Pertanyaan</th>
                                        <th style="width: 100px;">Jawaban</th>
                                        <th style="width: 100px;">Tanggal Buat</th>
                                        <th style="width: 100px;">Tanggal Perbaharui</th>
                                        <th style="width: 150px;">Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($pertanyaanPendaftaran as $pp)
                                    <tr role="row">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pp->pertanyaan_limit }}</td>
                                        <td>{{ $pp->jawaban_limit }}</td>
                                        <td>{{ $pp->created_at_format }}</td>
                                        <td>{{ $pp->created_at_format }}</td>
                                        <td>
                                            <form id="form-delete" action="{{ route('dashboard.daftar-pertanyaan-ppdb.destroy', $pp) }}" method="post">
                                                @method('delete')
                                                @csrf
                                            </form>

                                            <div class="d-flex gap-2">
                                                <button id="button-show" data-url="{{ route('dashboard.daftar-pertanyaan-ppdb.show', $pp) }}" type="button" class="btn btn-icon btn-round btn-info">
                                                    <i class="fas fa-info-circle"></i>
                                                </button>
                                                <a href="{{ route('dashboard.daftar-pertanyaan-ppdb.edit', $pp) }}" type="button" class="btn btn-icon btn-round btn-warning">
                                                    <i class="fas fa-edit text-white"></i>
                                                </a>
                                                <button id="button-delete" type="button" class="btn btn-icon btn-round btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ? modal --}}
    <x-dashboard.modal modalLabel="Detail Pertanyaan" />
    {{-- ? modal --}}

    {{-- todo content ... --}}

    {{-- * my script --}}
    <x-slot:myScript>
        {{-- ? Datatables --}}
        <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
        {{-- ? sweatalert 2 lib --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {{-- ? myscript --}}
        <script type="module" src="{{ asset('js/dashboard/pertanyaan-siswa.js') }}"></script>
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
