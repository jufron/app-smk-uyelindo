<nav
    @class([
        'absolute top-0 left-0 w-full z-10',
        'bg-transparent text-white hover:text-gray-200' => request()->routeIs('index'),
        'bg-slate-50 text-slate-900 hover:text-slate-800 shadow' => !request()->routeIs('index'),
    ])>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center justify-between w-full">
                {{-- ? brand --}}
                <a href="{{ route('index') }}" class="flex-shrink-0 flex items-center">
                    <img class="h-10 w-auto" src="https://tailwindflex.com/images/logo.svg" alt="Logo">
                    <span class="ml-2 text-xl font-bold">Company</span>
                </a>
                {{-- ? list menu item --}}
                <div class="hidden md:ml-10 md:flex md:space-x-6" x-data="{ open: null }" x-cloak>
                    <a href="{{ route('index') }}" @class(['px-1 py-2 text-sm font-medium', 'text-yellow-400' => request()->routeIs('index') ]) >Beranda</a>
                    {{-- ? PROFIL --}}
                    <div class="relative"
                        @mouseenter="open = 'profil'"
                        @mouseleave="open = null">
                        <button @class([
                            'px-1 py-2 text-sm font-medium flex items-center',
                            'text-yellow-400' => request()->routeIs('sejarah') || request()->routeIs('visi-misi') || request()->routeIs('struktur-organisasi') || request()->routeIs('berita')
                            ])>
                            Profil
                            <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div
                            x-show="open === 'profil'"
                            x-cloak
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"
                            class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5"
                            >
                            <div class="py-1">
                                <a @click="open = null" href="{{ route('sejarah') }}" @class(['block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100', 'text-yellow-400' => request()->routeIs('sejarah') ]) >Sejarah</a>
                                <a @click="open = null" href="{{ route('visi-misi') }}" @class(['block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100', 'text-yellow-400' => request()->routeIs('visi-misi') ]) >Visi Misi</a>
                                <a @click="open = null" href="{{ route('struktur-organisasi') }}" @class(['block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100', 'text-yellow-400' => request()->routeIs('struktur-organisasi') ]) >Struktur Organisasi</a>
                                <a @click="open = null" href="{{ route('berita') }}" @class(['block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100', 'text-yellow-400' => request()->routeIs('berita') ]) >Berita</a>
                            </div>
                        </div>
                    </div>
                    {{-- ? AKADEMIK --}}
                    <div class="relative"
                        @mouseenter="open = 'akademik'"
                        @mouseleave="open = null">
                        <button @class([
                            'px-1 py-2 text-sm font-medium flex items-center',
                            'text-yellow-400' => request()->routeIs('jurusan') || request()->routeIs('galeri-foto') || request()->routeIs('guru-staf') || request()->routeIs('fasilitas') || request()->routeIs('siswa-prestasi')
                            ])>
                            Akademik
                            <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div
                            x-show="open === 'akademik'"
                            x-cloak
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"
                            class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5"
                            >
                            <div class="py-1">
                                <a @click="open = null" href="{{ route('jurusan') }}" @class(['block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100', 'text-yellow-400' => request()->routeIs('jurusan') ]) >Jurusan</a>
                                <a @click="open = null" href="{{ route('galeri-foto') }}" @class(['block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100', 'text-yellow-400' => request()->routeIs('galeri-foto') ]) >Galeri Foto</a>
                                <a @click="open = null" href="{{ route('guru-staf') }}" @class(['block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100', 'text-yellow-400' => request()->routeIs('guru-staf') ]) >Guru & Staf</a>
                                <a @click="open = null" href="{{ route('fasilitas') }}" @class(['block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100', 'text-yellow-400' => request()->routeIs('fasilitas') ]) >Fasilitas</a>
                                <a @click="open = null" href="{{ route('siswa-prestasi') }}" @class(['block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100', 'text-yellow-400' => request()->routeIs('siswa-prestasi') ]) >Siswa Berprestasi</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('ppdb') }}" @class(['px-1 py-2 text-sm font-medium', 'text-yellow-400' => request()->routeIs('ppdb') ]) >PPDB</a>
                    <a href="{{ route('kontak') }}" @class(['px-1 py-2 text-sm font-medium', 'text-yellow-400' => request()->routeIs('kontak') ]) >Kontak</a>
                </div>

                <div class="flex items-center">
                    {{-- ? login register dekstop version --}}
                    <div class="hidden md:ml-4 md:flex md:items-center md:space-x-4">
                        <a href="#" class="px-3 py-2 text-sm font-medium">
                            Login
                        </a>
                        {{-- <a href="#" class="bg-white text-indigo-600 px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white">
                            Sign Up
                        </a> --}}
                    </div>
                    {{-- ? hamburger menu for mobile --}}
                    <div class="flex items-center md:hidden">
                        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ? Mobile menu, show/hide based on menu state --}}
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-gray-800 bg-opacity-90">
            <a href="{{ route('index') }}" @class(['text-gray-300 hover:text-white hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium','text-yellow-400' => request()->routeIs('index') ]) >
                Beranda
            </a>
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" @class([
                    'flex items-center text-gray-300 hover:text-white hover:bg-gray-700 w-full px-3 py-2 rounded-md text-base font-medium', 
                    'text-yellow-400' => request()->routeIs('sejarah') || request()->routeIs('visi-misi') || request()->routeIs('struktur-organisasi') || request()->routeIs('berita')
                    ]) >
                    Profil
                    <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div
                    x-show="open" @click.away="open = false"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                    class="w-full rounded-md bg-gray-700 transition-all duration-200 ease-in-out">
                    <div class="py-1">
                        <a href="{{ route('sejarah') }}" @class(['block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-gray-600', 'text-yellow-400' => request()->routeIs('sejarah') ]) >Sejarah</a>
                        <a href="{{ route('visi-misi') }}" @class(['block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-gray-600', 'text-yellow-400' => request()->routeIs('visi-misi') ]) >Visi & Misi</a>
                        <a href="{{ route('struktur-organisasi') }}" @class(['block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-gray-600', 'text-yellow-400' => request()->routeIs('struktur-organisasi') ]) >Struktur Organisasi</a>
                        <a href="{{ route('berita') }}" @class(['block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-gray-600', 'text-yellow-400' => request()->routeIs('berita') ]) >Berita</a>
                    </div>
                </div>
            </div>
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" @class([
                    'flex items-center text-gray-300 hover:text-white hover:bg-gray-700 w-full px-3 py-2 rounded-md text-base font-medium',
                    'text-yellow-400' => request()->routeIs('jurusan') || request()->routeIs('galeri-foto') || request()->routeIs('guru-staf') || request()->routeIs('fasilitas') || request()->routeIs('siswa-prestasi')
                ]) >
                    Akademik
                    <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div
                    x-show="open" @click.away="open = false"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                    class="w-full rounded-md bg-gray-700 transition-all duration-200 ease-in-out">
                    <div class="py-1">
                        <a href="{{ route('jurusan') }}" @class(['block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-gray-600', 'text-yellow-400' => request()->routeIs('jurusan') ]) >Jurusan</a>
                        <a href="{{ route('galeri-foto') }}" @class(['block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-gray-600', 'text-yellow-400' => request()->routeIs('galeri-foto') ]) >Galeri Foto</a>
                        <a href="{{ route('guru-staf') }}" @class(['block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-gray-600', 'text-yellow-400' => request()->routeIs('guru-staf') ]) >Guru & Staf</a>
                        <a href="{{ route('fasilitas') }}" @class(['block px-4 py-2 text-sm text-gray-300 hover:text-white hover:bg-gray-600', 'text-yellow-400' => request()->routeIs('fasilitas') ]) >Fasilitas</a>
                    </div>
                </div>
            </div>
            <a href="{{ route('ppdb') }}" @class(['text-gray-300 hover:text-white hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium','text-yellow-400' => request()->routeIs('ppdb') ]) >PPDB</a>
            <a href="{{ route('kontak') }}" @class(['text-gray-300 hover:text-white hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium','text-yellow-400' => request()->routeIs('kontak') ]) >Kontak</a>
            <div class="pt-4 pb-3 border-t border-gray-700">
                <div class="flex items-center px-5 space-y-3">
                    <a href="#" class="block w-full text-center text-white bg-gray-700 px-3 py-2 rounded-md text-base font-medium hover:bg-gray-600">
                        Login
                    </a>
                </div>
                {{-- <div class="mt-3 px-5">
                    <a href="#" class="block w-full text-center bg-white text-indigo-600 px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">
                        Sign Up
                    </a>
                </div> --}}
            </div>
        </div>
    </div>

</nav>

<script>
    // Simple toggle for mobile menu
    document.querySelector('button[aria-expanded]').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !isExpanded);
        mobileMenu.classList.toggle('hidden');
    });
</script>
