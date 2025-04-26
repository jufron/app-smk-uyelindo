<x-layouts.frond.app
    title="{{$berita->judul . ' - SMK Uyelindo Kupang'}}"
    metaDescription="{{Str::limit(strip_tags($berita->content), 150, '...') }}"
    metaKeywords="Berita SMK Uyelindo, Informasi Sekolah, Kegiatan Siswa, Update SMK Kupang"
    metaOgTitle="{{$berita->judul}}"
    metaOgDescription="{{Str::limit(strip_tags($berita->content), 150, '...')}}"
    metaImage="{{ $berita->poster ? asset('storage/' . $berita->poster) : asset('img/defaultsvg.svg') }}"
    metaUrl="{{ url('/') }}"
    metaTwitterTitle="{{$berita->judul}}"
    metaTwitterDescription="{{ Str::limit(strip_tags($berita->content), 150, '...') }}"
    >
    <x-frond.navbar />

    <section class="my-20 md:my-10 max-w-screen-xl mx-auto p-5 sm:p-8 md:p-12 relative">
        <img
            src="{{ $berita->poster ? asset("storage/$berita->poster") : asset('img/defaultsvg.svg') }}"
            alt="{{ $berita->judul }}"
            class="w-full md:w-1/2 object-contain mx-auto rounded-lg shadow-md"
            loading="lazy"
        />
        {{-- </div> --}}
        <div class="max-w-2xl mx-auto">
            <div class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                <div class="">
                    <div href="#"
                        class="text-xs text-indigo-600 uppercase font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        {{ $berita->kategory->nama }}
                    </div>
                    <h1 href="#" class="text-gray-900 font-bold text-3xl mb-2">{{ $berita->judul }}</h1>
                    <p class="text-gray-700 text-xs mt-2">Written By:
                        <span class="text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                            {{ $berita->user->name }}
                        </span>
                    </p>

                    <div class="my-5 leading-relaxed summernote-content">
                        {!! $berita->content !!}
                    </div>

                </div>

            </div>
        </div>
    </section>

    <x-frond.footer />

    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="100" />
</x-layouts.frond.app>
