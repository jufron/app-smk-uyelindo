<x-layouts.dashboard.app title="Home">
    {{-- * my style --}}
    <x-slot:myStyle>

    </x-slot:myStyle>

    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h1 class="fw-bold mb-3 text-uppercase">Dashboard</h1>
        </div>
    </div>
    {{-- ? mini card --}}
    <div class="row">
        {{-- ? count kategory berita --}}
        <div class="col-6 col-sm-4 col-lg-2 col-xl-3">
          <div class="card">
            <div class="card-body p-3 text-center">
              <div class="h1 m-0">{{ $kategory }}</div>
              <div class="text-muted mb-3">Kategori Berita</div>
            </div>
          </div>
        </div>
    </div>

    {{-- todo count beita --}}
    <div class="row row-card-no-pd">
        {{-- ? count all berita --}}
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="fas fa-newspaper text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Total Berita</p>
                                <h4 class="card-title">{{ $berita }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ? count berita publish --}}
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="fas fa-newspaper text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Berita Publish</p>
                                <h4 class="card-title">{{ $berita_publish }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ? count berita draft --}}
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="fas fa-newspaper text-danger"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Berita Draft</p>
                                <h4 class="card-title">{{ $berita_draft }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- todo count testimoni --}}
    <div class="row row-card-no-pd">
        {{-- ? count all testimoni --}}
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="fas fa-comments text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Total Testimoni</p>
                                <h4 class="card-title">{{ $testimoni }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ? count testimoni masuk bulan --}}
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="fas fa-comments text-info"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Testimoni Masuk</p>
                                <h4 class="card-title">{{ $testimoni_where_month }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ? count testimoni publish --}}
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="fas fa-comments text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Testimoni Publish</p>
                                <h4 class="card-title">{{ $testimoni__publish }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ? count testimoni draft --}}
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="fas fa-comments text-danger"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Testimoni Draft</p>
                                <h4 class="card-title">{{ $testimoni_draft }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- * my script --}}
    <x-slot:myScript>

        {{-- ? apex chart lib --}}
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <script src="{{ asset('js/ppdbChart.js') }}"></script>
        <script src="{{ asset('js/agamaChart.js') }}"></script>
        <script src="{{ asset('js/jenisKelaminChart.js') }}"></script>

    </x-slot:myScript>
</x-layouts.dashboard>
