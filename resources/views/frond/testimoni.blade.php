<x-layouts.frond.app
    title="Testimoni SMK Uyelindo Kupang - Cerita Alumni dan Orang Tua Siswa"
    metaDescription="Simak testimoni dari alumni, siswa, dan orang tua tentang pengalaman mereka di SMK Uyelindo Kupang. Bukti nyata kualitas pendidikan vokasi kami."
    metaKeywords="Testimoni SMK Uyelindo, Alumni SMK Kupang, Cerita Alumni Sekolah Vokasi, Pengalaman Sekolah SMK"
    metaOgTitle="Testimoni Alumni & Orang Tua - SMK Uyelindo Kupang"
    metaOgDescription="Pengalaman dan testimoni alumni, siswa, dan orang tua tentang pendidikan dan pembelajaran di SMK Uyelindo Kupang."
    metaUrl="{{ url('/testimoni') }}"
    metaTwitterTitle="Testimoni SMK Uyelindo Kupang"
    metaTwitterDescription="Testimoni alumni dan orang tua siswa SMK Uyelindo Kupang tentang pendidikan berkualitas dan lingkungan pembelajaran yang positif."
    >
    <x-frond.navbar />

    <section class="container mx-auto max-w-6xl px-4 py-10 my-20">
        <h3 class="text-gray-800 py-10 text-5xl text-center font-bold">Apa Kata Mereka?</h3>

        <div class="flex justify-center mb-8">
            <a href="{{ route('testimoni.create') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                Testimoni Anda
            </a>
        </div>

        <div class="md:columns-2 lg:columns-3 gap-6 p-4 sm:p-1 mt-2">
            @foreach ($daftar_testimoni as $testimoni)
            <div class="animate-in zoom-in duration-200">
                <div class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-yellow-50 hover:ring-2 ring-yellow-200 transform duration-200 hover:shadow-yellow-300 hover:shadow-md z-0 relative">
                    <div class="flex flex-col break-inside-avoid-page z-0 relative">
                        <div class="flex justify-between">
                            <div class="flex space-x-6">
                                <div class="flex space-x-4 flex-shrink-0 w-52">
                                    <img
                                        src="{{ $testimoni->avatar_url }}"
                                        class="w-10 h-10 rounded-full"
                                        loading="lazy"
                                    />
                                    <div>
                                        <div class="font-semibold">
                                            {{ $testimoni->nama_lengkap }}
                                        </div>
                                        <div class="text-sm">
                                            {{ $testimoni->pekerjaan }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" target="_blank" class="whitespace-pre-line break-inside-avoid-page">
                            {{ $testimoni->content }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- ? link --}}
        <div class="my-5">
            {{ $daftar_testimoni->links() }}
        </div>
        {{-- ? link --}}
    </section>

    <x-frond.footer />

    {{-- ? modal tailwind css --}}
    @if (session('success'))
    <div x-data="{ successModalIsOpen: true }">
        <div x-cloak x-show="successModalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="successModalIsOpen" x-on:keydown.esc.window="successModalIsOpen = false" x-on:click.self="successModalIsOpen = false" class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8" role="dialog" aria-modal="true" aria-labelledby="successModalTitle">
            <div 
                x-show="successModalIsOpen"
                x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity" 
                x-transition:enter-start="opacity-0 scale-50" 
                x-transition:enter-end="opacity-100 scale-100" 
                class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-lg border bg-white"
                >
                <div class="flex items-center justify-between border-b bg-slate-50 px-4 py-2">
                    <div class="flex items-center justify-center rounded-full bg-green-100 text-green-400 p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <button x-on:click="successModalIsOpen = false" aria-label="close modal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="px-4 text-center"> 
                    <h3 id="successModalTitle" class="mb-2 font-semibold tracking-wide">Sukses</h3>
                    {{ session('success') }} 
                </div>
                <div class="flex items-center justify-center p-4">
                    <button x-on:click="successModalIsOpen = false" type="button" class="w-full whitespace-nowrap rounded-lg border border-green-100 bg-green-400 px-4 py-2 text-center text-sm font-semibold tracking-wide transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
    {{-- ? modal tailwind css --}}
    
    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="50" />
</x-layouts.frond.app>
