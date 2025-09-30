@if ($siswaBerprestasi->foto && file_exists(public_path('storage/'. $siswaBerprestasi->foto)))
<img
    class="rounded-lg"
    src="{{ asset('storage/'. $siswaBerprestasi->foto) }}"
    alt="foto siswa berprestasi"
    width="100px"
    loading="lazy"
>
@else
<img
    class="rounded-lg"
    src="{{ asset('img/defaultsvg.svg') }}"
    alt="poster-default"
    width="100px"
    loading="lazy"
>
@endif
