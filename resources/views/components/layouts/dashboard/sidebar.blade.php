<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        {{-- ? Logo Header --}}
        <x-layouts.dashboard.logo-header />
        {{-- ? End Logo Header --}}
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                {{-- ? dashboard --}}
                <li @class([
                    'nav-item',
                    'active' => request()->routeIs('dashboard')
                ])>
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashobard</p>
                    </a>
                </li>

                <li class="nav-section">
                    <h4 class="text-section">Umum</h4>
                </li>

                {{-- ? aplikasi --}}
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-th-list"></i>
                        <p>Aplikasi</p>
                    </a>
                </li>

                {{-- ? galeri foto --}}
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-th-list"></i>
                        <p>Galeri Foto</p>
                    </a>
                </li>

                {{-- ? manajement berita --}}
                <li @class([
                    'nav-item',
                    'active submenu' => request()->routeIs('dashboard.kategory.index') ||
                                        request()->routeIs('dashboard.kategory.create') ||
                                        request()->routeIs('dashboard.kategory.edit') ||
                                        request()->routeIs('dashboard.berita.index') || 
                                        request()->routeIs('dashboard.berita.create') || 
                                        request()->routeIs('dashboard.berita.edit')
                ])>
                    <a data-bs-toggle="collapse" href="#manajement-berita">
                        <i class="fas fa-th-list"></i>
                        <p>Manajement Berita</p>
                        <span class="caret"></span>
                    </a>
                    <div @class([
                        'collapse', 
                        'show' => request()->routeIs('dashboard.kategory.index') ||
                                  request()->routeIs('dashboard.kategory.create') ||
                                  request()->routeIs('dashboard.kategory.edit') ||
                                  request()->routeIs('dashboard.berita.index') || 
                                  request()->routeIs('dashboard.berita.create') || 
                                  request()->routeIs('dashboard.berita.edit')
                        ])
                        id="manajement-berita">
                        <ul class="nav nav-collapse">
                            <li @class(['active' => request()->routeIs('dashboard.kategory.index') ||
                                                    request()->routeIs('dashboard.kategory.create') ||
                                                    request()->routeIs('dashboard.kategory.edit')
                            ])>
                                <a href="{{ route('dashboard.kategory.index') }}">
                                    <span class="sub-item">Kategory</span>
                                </a>
                            </li>
                            <li @class(['active' => request()->routeIs('dashboard.berita.index') || 
                                                    request()->routeIs('dashboard.berita.create') || 
                                                    request()->routeIs('dashboard.berita.edit')
                            ])>
                                <a href="{{ route('dashboard.berita.index') }}">
                                    <span class="sub-item">Berita</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-section">
                    <h4 class="text-section">Akademik</h4>
                </li>

                {{-- ? akademik --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#akademik">
                        <i class="fas fa-th-list"></i>
                        <p>Akademik</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="akademik">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Guru & Staf</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Testimoni</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Siswa Berprestasi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-section">
                    <h4 class="text-section">Peserta Didik Baru</h4>
                </li>

                {{-- ? ppdb --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#ppdb">
                        <i class="fas fa-th-list"></i>
                        <p>PPDB</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="ppdb">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Daftar Siswa Baru</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Daftar Pertanyaan PPDB</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="nav-section">
                    <h4 class="text-section">umum</h4>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>Sidebar Layouts</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../sidebar-style-2.html">
                                    <span class="sub-item">Sidebar Style 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="../icon-menu.html">
                                    <span class="sub-item">Icon Menu</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <li class="nav-item active submenu">
                    <a data-bs-toggle="collapse" href="#forms">
                        <i class="fas fa-pen-square"></i>
                        <p>Forms</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse show" id="forms">
                        <ul class="nav nav-collapse">
                            <li class="active">
                                <a href="../forms/forms.html">
                                    <span class="sub-item">Basic Form</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
