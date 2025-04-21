<x-layouts.dashboard.app title="Kategory">
    {{-- * my style --}}
    <x-slot:myStyle>
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Kategory</h4>
        </div>
        <div class="card-body">
            <a href="{{ route('dashboard.kategory.create') }}" class="btn btn-success my-4">Tambah</A>
            <div class="table-responsive">
                <div 
                    id="basic-datatables_wrapper" 
                    class="dataTables_wrapper container-fluid dt-bootstrap4"
                    >
                    <div class="row">
                        <div class="col-sm-12">
                            <table 
                                id="basic-datatables" 
                                class="display table table-striped table-hover dataTable" 
                                role="grid" 
                                aria-describedby="basic-datatables_info"
                                >
                                <thead>
                                    <tr role="row">
                                        <th style="width: 50px;">No</th>
                                        <th style="width: 100px;">Nama</th>
                                        <th style="width: 100px;">Tanggal Buat</th>
                                        <th style="width: 100px;">Tanggal Perbaharui</th>
                                        <th style="width: 150px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr role="row">
                                        <th style="width: 50px;">No</th>
                                        <th style="width: 100px;">Nama</th>
                                        <th style="width: 100px;">Tanggal Buat</th>
                                        <th style="width: 100px;">Tanggal Perbaharui</th>
                                        <th style="width: 150px;">Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($kategory as $kat)
                                    <tr role="row">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $kat->nama }}</td>
                                        <td>{{ $kat->created_at_format }}</td>
                                        <td>{{ $kat->created_at_format }}</td>
                                        <td>
                                            <form id="form-delete" action="{{ route('dashboard.kategory.destroy', $kat) }}" method="post">
                                                @method('delete')
                                                @csrf
                                            </form>

                                            <div class="d-flex gap-2">
                                                <button id="button-show" data-url="{{ route('dashboard.kategory.show', $kat) }}" type="button" class="btn btn-icon btn-round btn-info">
                                                    <i class="fas fa-info-circle"></i>
                                                </button>
                                                <a href="{{ route('dashboard.kategory.edit', $kat) }}" type="button" class="btn btn-icon btn-round btn-warning">
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
    <x-dashboard.modal modalLabel="Detail Kategory" />
    {{-- ? modal --}}

    {{-- todo content ... --}}

    {{-- * my script --}}
    <x-slot:myScript>
        {{-- ? Datatables --}}
        <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
        {{-- ? sweatalert 2 lib --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {{-- ? myscript --}}
        <script type="module" src="{{ asset('js/dashboard/kategory.js') }}"></script>
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
