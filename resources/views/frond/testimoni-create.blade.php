<x-layouts.frond.app
    title="Buat Testimoni SMK Uyelindo Kupang - Ceritakan Pengalamanmu"
    metaDescription="Bantu kami membagikan kisah inspiratifmu! Buat dan kirimkan testimoni tentang pengalamanmu selama belajar di SMK Uyelindo Kupang."
    metaKeywords="Buat Testimoni SMK Uyelindo, Alumni SMK Uyelindo Kupang, Cerita Alumni SMK, Pengalaman Siswa SMK Uyelindo, Testimoni Siswa Vokasi"
    metaOgTitle="Buat dan Kirim Testimoni - SMK Uyelindo Kupang"
    metaOgDescription="Bagikan pengalaman belajarmu di SMK Uyelindo Kupang. Setiap cerita berarti untuk masa depan calon siswa kami!"
    metaUrl="{{ url('/testimoni/create') }}"
    metaTwitterTitle="Buat Testimoni - SMK Uyelindo Kupang"
    metaTwitterDescription="Bantu calon siswa mengenal SMK Uyelindo Kupang lewat pengalaman nyata kamu! Kirimkan testimoni kamu sekarang."
    >
    <x-frond.navbar />

    <section class="container mx-auto max-w-6xl px-4 py-10 my-20">
        <h3 class="text-gray-800 py-10 text-5xl text-center font-bold">Bagikan Pengalaman Anda</h3>
        <p class="text-gray-600 text-center text-lg mb-8">Ceritakan pengalaman berharga Anda selama bersekolah di SMK Uyelindo Kupang. Testimoni Anda akan menginspirasi calon siswa dan membantu kami terus berkembang.</p>

        {{-- ? preview image --}}
        <div class="flex justify-center mb-8">
            <img 
                src="{{ asset('img/defaultsvg.svg') }}" 
                alt="Testimoni Banner" 
                class="rounded-lg shadow-lg max-w-md w-full"
                id="preview_poster"
                loading="lazy"
            />
        </div>

        <form 
            action="{{ route('testimoni.store') }}" 
            method="POST" 
            enctype="multipart/form-data"
            >
            @csrf
            <div class="grid grid-cols-2 lg:grid-cols-12 gap-4">
                {{-- ? file foto avatar --}}
                <div class="col-span-2 lg:col-span-6">
                    <x-frond.input
                        label="Foto Profil Anda"
                        name="avatar"
                        type="file"
                        onChange="previewImage(event)"
                    />
                </div>
                {{-- ? nama lengkap --}}
                <div class="col-span-2 lg:col-span-6">
                    <x-frond.input
                        name="nama_lengkap"
                        label="Nama Lengkap"
                        placeholder="Masukan Nama Lengkap Anda"
                        value="{{ old('nama_lengkap') }}"
                    />
                </div>
                {{-- ? tahun lulus --}}
                <div class="col-span-3 lg:col-span-6">
                    <x-frond.input
                        label="Tahun Lulus"
                        name="tahun_lulus"
                        placeholder="Masukan Tahun Lulus Anda"
                        value="{{ old('tahun_lulus') }}"
                    />
                </div>
                {{-- ? pekerjaan --}}
                <div class="col-span-3 lg:col-span-6">
                    <x-frond.input
                        name="pekerjaan"
                        label="Pekerjaan"
                        placeholder="Masukan Pekerjaan Anda"
                        value="{{ old('pekerjaan') }}"
                    />
                </div>
                {{-- ? content testimoni --}}
                <div class="col-span-12 lg:col-span-12">
                    <x-frond.input-textarea
                        name="content"
                        label="Pendapat Anda"
                        placeholder="Masukan Pendapat Anda"
                        value="{{ old('content') }}"
                    />
                </div>
            </div>
            
            <div class="my-10">
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                    Kirim Testimoni
                </button>
            </div>
        </form>
    </section>

    <x-frond.footer />

    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="50" />

    <x-slot:myScript>
        <script>
            function previewImage(event) {
                const reader = new FileReader();
                reader.onload = function(){
                    const preview = document.getElementById('preview_poster');
                    preview.src = reader.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>
    </x-slot:myScript>
</x-layouts.frond.app>