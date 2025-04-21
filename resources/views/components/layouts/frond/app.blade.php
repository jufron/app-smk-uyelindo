<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Meta dinamis --}}
    <title>{{ $title ?? config('app.name', 'SMK Uyelindo Kupang') }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Profil resmi SMK Uyelindo Kupang. Menyediakan informasi lengkap tentang jurusan, program keahlian, kegiatan siswa, berita sekolah, dan pendaftaran siswa baru.' }}">
    <meta name="keywords" content="{{ $metaKeywords ?? 'SMK Uyelindo, Sekolah Kejuruan Kupang, SMK di Kupang, Profil Sekolah, Pendaftaran SMK, Jurusan SMK, Pendidikan Vokasi' }}">
    <meta name="author" content="SMK Uyelindo Kupang">

    {{-- Robots & SEO --}}
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="copyright" content="SMK Uyelindo Kupang">
    <meta name="rating" content="general">
    <meta name="distribution" content="global">

    {{-- Chrome theme --}}
    <meta name="theme-color" content="#A91B1B">
    <meta name="application-name" content="SMK Uyelindo Kupang">

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $metaOgTitle ?? $title ?? 'SMK Uyelindo Kupang - Sekolah Kejuruan Terbaik di Kupang' }}">
    <meta property="og:description" content="{{ $metaOgDescription ?? $metaDescription }}">
    {{-- <meta property="og:image" content="{{ $metaImage ?? asset('assets/images/preview.jpg') }}"> --}}
    <meta property="og:url" content="{{ $metaUrl ?? url()->current() }}">
    <meta property="og:type" content="website">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $metaTwitterTitle ?? $title }}">
    <meta name="twitter:description" content="{{ $metaTwitterDescription ?? $metaDescription }}">
    {{-- <meta name="twitter:image" content="{{ $metaImage ?? asset('assets/images/preview.jpg') }}"> --}}

    {{-- ? Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/faviicon/180.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/faviicon/32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/faviicon/16.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('img/faviicon/144.png') }}">

    <link rel="manifest" href="{{ asset('img/faviicon/180.png') }}">

    <meta name="msapplication-TileColor" content="#cade14">
    <meta name="theme-color" content="#cade14">

    {{-- ? Styles dan Scripts --}}
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-D6KvL7S5.css') }}">
    
    {{-- JavaScript --}}
    <script src="{{ asset('build/assets/app-Bo-u61x1.js') }}" defer></script>
    
    {{-- ? Font Awesome library --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    {{-- ? Style tambahan khusus halaman --}}
    {{ $myStyle ?? '' }}
</head>
<body>
    {{ $slot }}

    <x-frond.toTop />

    {{-- ? font awesome library --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- ? Script tambahan khusus halaman --}}
    {{ $myScript ?? null }}
</body>
</html>