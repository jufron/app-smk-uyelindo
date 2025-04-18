<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- ? Favicon --}}
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title>Dashboard | {{ $title ?? null }}</title>

   {{--? Fonts and icons --}}
  <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
  <script>
    WebFont.load({
      google: { families: ["Public Sans:300,400,500,600,700"] },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["assets/css/fonts.min.css"],
      },
      active: function () {
        sessionStorage.fonts = true;
      },
    });
  </script>

   {{--? CSS Files --}}
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />

   {{--? CSS Just for demo purpose, don't include it in your project --}}
   <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    @notifyCss

    {{ $myStyle ?? null }}

</head>
<body>
    <div class="wrapper">
        <x-layouts.dashboard.sidebar />

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    {{-- ? Logo Header --}}
                    <x-layouts.dashboard.logo-header />
                    {{-- ? End Logo Header --}}
                </div>
                {{-- ? Navbar Header --}}
                <x-layouts.dashboard.navbar-header />
                {{-- ? End Navbar --}}
            </div>
            <div class="container">
                <div class="page-inner">
                    {{-- ? your content --}}
                    {{ $slot }}
                    {{-- ? your content --}}
                </div>
            </div>

            <x-layouts.dashboard.footer />
        </div>
    </div>

    {{-- <x-layouts.dashboard.costum-template /> --}}

    {{-- todo bootstrap modal --}}
    <div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="modalLogoutLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLogoutLabel">Keluar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin Anda Ingin Keluar?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submt" class="btn btn-danger">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- todo bootstrap modal --}}

    {{-- ?   Core JS Files   --}}
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    {{-- ? jQuery Scrollbar --}}
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    {{-- ? jQuery Sparkline --}}
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    {{-- ? Datatables --}}
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    {{-- ? Bootstrap Notify --}}
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    {{-- ? Sweet Alert --}}
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    {{-- ? Kaiadmin JS --}}
    <script src="assets/js/kaiadmin.min.js"></script>

    {{-- ? Kaiadmin DEMO methods, don't include it in your project! --}}
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>

    {{-- ? laravel notify 2 --}}
    <x-notify::notify />
    @notifyJs

    {{-- ? Script tambahan khusus halaman --}}
    {{ $myScript ?? null }}
</body>
</html>
