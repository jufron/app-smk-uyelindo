@if ($galeri->foto && file_exists(public_path('storage/'. $galeri->foto)))
<img
    class="rounded-lg"
    src="{{ asset('storage/'. $galeri->foto) }}"
    alt="galeri foto"
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
