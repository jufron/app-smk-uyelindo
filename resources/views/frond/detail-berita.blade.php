<x-layouts.frond.app
    {{-- title="{{$berita->judul . ' - SMK Uyelindo Kupang'}}"
    metaDescription="{{Str::limit(strip_tags($berita->isi), 150, '...') }}"
    metaKeywords="Berita SMK Uyelindo, Informasi Sekolah, Kegiatan Siswa, Update SMK Kupang"
    metaOgTitle="{{$berita->judul}}"
    metaOgDescription="{{Str::limit(strip_tags($berita->isi), 150, '...')}}"
    metaImage="{{asset('storage/' . ($berita->gambar ?? 'assets/images/default-news.jpg'))}}"
    metaUrl="{{url()->current()}}"
    metaTwitterTitle="{{$berita->judul}}"
    metaTwitterDescription="{{ Str::limit(strip_tags($berita->isi), 150, '...') }}" --}}
    title="Detail Berita - SMK Uyelindo Kupang"
    metaDescription="Baca informasi terbaru seputar kegiatan, prestasi, dan pengumuman penting dari SMK Uyelindo Kupang."
    metaKeywords="Berita SMK Uyelindo, Informasi Sekolah, Kegiatan Siswa, Update SMK Kupang"
    metaOgTitle="Detail Berita - SMK Uyelindo Kupang"
    metaOgDescription="Informasi terbaru tentang SMK Uyelindo Kupang, mulai dari kegiatan siswa, lomba, hingga pengumuman penting."
    {{-- metaImage="{{ asset('assets/images/preview-berita.jpg') }}" --}}
    metaUrl="{{ url('/berita/detail') }}"
    metaTwitterTitle="Detail Berita - SMK Uyelindo Kupang"
    metaTwitterDescription="Update berita terkini dari SMK Uyelindo Kupang: kegiatan siswa, prestasi, dan informasi penting lainnya."
    >
    <x-frond.navbar />

    <section class="my-20 md:my-10 max-w-screen-xl mx-auto p-5 sm:p-8 md:p-12 relative">
        <div class="bg-cover h-64 text-center overflow-hidden"
            style="height: 450px; background-image: url('https://api.time.com/wp-content/uploads/2020/07/never-trumpers-2020-election-01.jpg?quality=85&amp;w=1201&amp;h=676&amp;crop=1')">
        </div>
        <div class="max-w-2xl mx-auto">
            <div class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                <div class="">

                    <a href="#"
                        class="text-xs text-indigo-600 uppercase font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        Election
                    </a>,
                    <a href="#"
                        class="text-xs text-indigo-600 uppercase font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        Politics
                    </a>
                    <h1 href="#" class="text-gray-900 font-bold text-3xl mb-2">Revenge of the Never Trumpers</h1>
                    <p class="text-gray-700 text-xs mt-2">Written By:
                        <a href="#"
                            class="text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                            Ahmad Sultani
                        </a>
                    </p>

                    <p class="text-base leading-8 my-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <h3 class="text-2xl font-bold my-5">#1. What is Lorem Ipsum?</h3>

                    <p class="text-base leading-8 my-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <blockquote class="border-l-4 text-base italic leading-8 my-5 p-5 text-indigo-600">Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        dummy text ever since the 1500s</blockquote>

                    <p class="text-base leading-8 my-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <a href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        #Election
                    </a>,
                    <a href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        #people
                    </a>,
                    <a href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        #Election2020
                    </a>,
                    <a href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        #trump
                    </a>,
                    <a href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        #Joe
                    </a>

                </div>

            </div>
        </div>
    </section>

    <x-frond.footer />

    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="100" />
</x-layouts.frond.app>
