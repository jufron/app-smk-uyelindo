<x-layouts.dashboard.app title="Ubah Kategory">
    {{-- * my style --}}
    <x-slot:myStyle>

    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">Ubah Pertanyaan</div>
        </div>

        <form action="{{ route('dashboard.daftar-pertanyaan-ppdb.update', $pertanyaanPendaftaran) }}" method="post">
            @method('patch')
            @csrf
            <div class="card-body">
                <div class="col-md-8">
                    <x-dashboard.input
                        label="Pertanyaan"
                        name="pertanyaan"
                        value="{{ old('pertanyaan', $pertanyaanPendaftaran->pertanyaan) }}"
                        placeholder="Masukan Pertanyaan Anda"
                    />
                </div>
                <div class="col-md-8">
                    <x-dashboard.input-textarea
                        label="Jawaban"
                        name="jawaban"
                        rows="10"
                        value="{{ old('jawaban', $pertanyaanPendaftaran->jawaban) }}"
                        placeholder="Masukan jawaban"
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
        <script src="{{ asset('js/dashboard/addOrUpdatePertanyaan-pendaftaran.js') }}"></script>
    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
