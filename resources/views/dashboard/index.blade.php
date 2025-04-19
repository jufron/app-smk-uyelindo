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
        {{-- ? count berita --}}
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="card">
            <div class="card-body p-3 text-center">
              <div class="h1 m-0">43</div>
              <div class="text-muted mb-3">Berita</div>
            </div>
          </div>
        </div>
        {{-- ? count kategory berita --}}
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="card">
            <div class="card-body p-3 text-center">
              <div class="h1 m-0">11</div>
              <div class="text-muted mb-3">Kategori Berita</div>
            </div>
          </div>
        </div>
        {{-- ? count foto galeri --}}
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="card">
            <div class="card-body p-3 text-center">
              <div class="h1 m-0">17</div>
              <div class="text-muted mb-3">Foto Galeri</div>
            </div>
          </div>
        </div>
        {{-- ? count guru & staf --}}
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="card">
            <div class="card-body p-3 text-center">
              <div class="h1 m-0">15</div>
              <div class="text-muted mb-3">Guru & Staf</div>
            </div>
          </div>
        </div>
        {{-- ? count testimoni --}}
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="card">
            <div class="card-body p-3 text-center">
              <div class="h1 m-0">20</div>
              <div class="text-muted mb-3">Testimoni</div>
            </div>
          </div>
        </div>
        {{-- ? count siswa prestasi --}}
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="card">
            <div class="card-body p-3 text-center">
              <div class="h1 m-0">15</div>
              <div class="text-muted mb-3">Siswa Prestasi</div>
            </div>
          </div>
        </div>
    </div>

    {{-- ? chart statistic --}}
    <div class="row">
        {{-- ? chart 1 --}}
        <div class="col-md-8">
            <div class="card card-round">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Statistik Tahunan PPDB</div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 375px"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <div id="areaChart" width="639" height="375" style="display: block; width: 639px; height: 375px;" class="chartjs-render-monitor">

                        </div>
                    </div>
                    {{-- <div id="myChartLegend"><ul class="0-legend html-legend"><li><span style="background-color:#f3545d"></span>Subscribers</li><li><span style="background-color:#fdaf4b"></span>New Visitors</li><li><span style="background-color:#177dff"></span>Active Users</li></ul></div> --}}
                </div>
            </div>
        </div>

        <div class="col-md-4">  
            {{-- ? chart 3 --}}
            <div class="card card-round">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">PPDB Jenis Kelamin 2025</div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div class="pull-in"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <div id="jenisKelaminChart" width="322" height="150" style="display: block; width: 322px; height: 150px;" class="chartjs-render-monitor"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            {{-- ? chart 2 --}}
            <div class="card card-round">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">PPDB Agama 2025</div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div class="pull-in"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <div id="agamaChart" width="322" height="150" style="display: block; width: 322px; height: 150px;" class="chartjs-render-monitor"></div>
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
