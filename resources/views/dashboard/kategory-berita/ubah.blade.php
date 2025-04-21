<x-layouts.dashboard.app title="Ubah Kategory">
    {{-- * my style --}}
    <x-slot:myStyle>
        
    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">Ubah Kategory</div>
        </div>

        <form action="{{ route('dashboard.kategory.update', $kategory) }}" method="post">
            @method('patch')
            @csrf
            <div class="card-body">
                <div class="col-md-8">
                    <x-dashboard.input 
                        label="Nama Kategory"
                        name="nama"
                        value="{{ old('nama', $kategory->nama) }}"
                        placeholder="Masukan Nama Kategory"
                    />
                </div>
                <div class="col-md-8">
                    <x-dashboard.input-textarea
                        label="Deskripsi"
                        name="deskripsi"
                        rows="10"
                        value="{{ old('deskripsi', $kategory->deskripsi) }}"
                        placeholder="Masukan Deskripsi Kategory"
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

    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
