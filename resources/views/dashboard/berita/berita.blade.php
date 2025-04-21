<x-layouts.dashboard.app title="Berita">
    {{-- * my style --}}
    <x-slot:myStyle>
        
    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Berita</h4>
        </div>
        <div class="card-body">
            <div class="my-4">
                <a href="{{ route('dashboard.berita.create') }}" class="btn btn-success">Tambah</A>
                <button class="btn btn-secondary">Filter</button>
            </div>
            
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
                                        <th style="width: 214.469px;">Nama</th>
                                        <th style="width: 101.219px;">Deskripsi</th>
                                        <th style="width: 35.875px;">Tanggal Buat</th>
                                        <th style="width: 99.0312px;">Tanggal Perbaharui</th>
                                        <th style="width: 120px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr role="row">
                                        <th style="width: 50px;">No</th>
                                        <th style="width: 214.469px;">Nama</th>
                                        <th style="width: 101.219px;">Deskripsi</th>
                                        <th style="width: 35.875px;">Tanggal Buat</th>
                                        <th style="width: 99.0312px;">Tanggal Perbaharui</th>
                                        <th style="width: 120px;">Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td>1</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-round btn-info">
                                                <i class="fas fa-info-circle"></i>
                                              </button>
                                            <button type="button" class="btn btn-icon btn-round btn-warning">
                                                <i class="fas fa-edit text-white"></i>
                                              </button>
                                            <button type="button" class="btn btn-icon btn-round btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td >2</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-round btn-info">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-round btn-warning">
                                                <i class="fas fa-edit text-white"></i>
                                              </button>
                                            <button type="button" class="btn btn-icon btn-round btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    {{-- todo content ... --}}

    {{-- * my script --}}
    <x-slot:myScript>

    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
