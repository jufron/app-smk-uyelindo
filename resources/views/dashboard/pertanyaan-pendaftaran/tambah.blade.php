<x-layouts.dashboard.app title="Tambah kategory">
    {{-- * my style --}}
    <x-slot:myStyle>

    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Pertanyaan Baru</div>
        </div>

        <form action="{{ route('dashboard.daftar-pertanyaan-ppdb.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="col-md-8">
                    <x-dashboard.input
                        label="Pertanyaan"
                        name="pertanyaan"
                        value="{{ old('pertanyaan') }}"
                        placeholder="Masukan Pertanyaan Anda"
                    />
                </div>
                <div class="col-md-8">
                    <x-dashboard.input-textarea
                        label="Jawaban"
                        name="jawaban"
                        rows="10"
                        value="{{ old('jawaban') }}"
                        placeholder="Masukan jawaban"
                    />
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
        <script src="{{ asset('js/dashboard/addOrUpdatePertanyaan-pendaftaran.js') }}"></script>
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
