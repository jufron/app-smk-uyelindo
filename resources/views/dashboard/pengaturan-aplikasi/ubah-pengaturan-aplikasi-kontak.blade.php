<x-layouts.dashboard.app title="ubah pengaturan aplikasi kontak">
    {{-- * my style --}}
    <x-slot:myStyle>

    </x-slot:myStyle>
    {{-- * my style --}}

    {{-- todo content ... --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">Pengaturan Aplikasi Kontak</div>
        </div>

        <form action="{{ route('dashboard.pengaturan-aplikasi-kontak.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    {{-- ? email --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Nama Alamat Email"
                            type="email"
                            name="email"
                            value="{{ old('email', $email) }}"
                            placeholder="Masukan Nama Kepala Sekolah"
                        />
                    </div>
                    {{-- ? no telepon --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Nomor Telepon"
                            type="tel"
                            inputmode="tel"
                            pattern="^[0-9+()\-\s]*$"
                            maxlength="15"
                            autocomplete="tel"
                            name="telepon"
                            value="{{ old('telepon', $telepon) }}"
                            placeholder="Masukan Nomor Telepon"
                        />
                    </div>
                    {{-- ? no telepon whatsaap --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Nomor Telepon Whatsaap"
                            name="telepon_whatsapp"
                            type="tel"
                            inputmode="tel"
                            pattern="^[0-9+()\-\s]*$"
                            maxlength="15"
                            autocomplete="tel"
                            value="{{ old('telepon_whatsapp', $telepon_whatsapp) }}"
                            placeholder="Masukan Nomor Telepon Whatsaap"
                        />
                    </div>
                    {{-- ? facebook url --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Url Facebook Sekolah"
                            name="facebook"
                            type="url"
                            inputmode="url"
                            autocomplete="url"
                            pattern="https?://.+"
                            value="{{ old('facebook', $facebook) }}"
                            placeholder="Masukan Url Facebook"
                        />
                    </div>
                    {{-- ? instagram url --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Url instagram Sekolah"
                            name="instagram"
                            type="url"
                            inputmode="url"
                            autocomplete="url"
                            pattern="https?://.+"
                            value="{{ old('instagram', $instagram) }}"
                            placeholder="Masukan Url instagram"
                        />
                    </div>
                    {{-- ? youtube url --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Url youtube Sekolah"
                            name="youtube"
                            type="url"
                            inputmode="url"
                            autocomplete="url"
                            pattern="https?://.+"
                            value="{{ old('youtube', $youtube) }}"
                            placeholder="Masukan Url youtube"
                        />
                    </div>
                    {{-- ? tik_tok url --}}
                    <div class="col-md-6">
                        <x-dashboard.input
                            label="Url TikTok Sekolah"
                            name="tik_tok"
                            type="url"
                            inputmode="url"
                            autocomplete="url"
                            pattern="https?://.+"
                            value="{{ old('tik_tok', $tik_tok) }}"
                            placeholder="Masukan Url TikTok"
                        />
                    </div>
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

    </x-slot:myScript>
    {{-- * my script --}}
</x-layouts.dashboard>
