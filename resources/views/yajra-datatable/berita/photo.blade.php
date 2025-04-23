@if ($berita->poster && file_exists(public_path('storage/'. $berita->poster)))
<img
    class="rounded-lg"
    src="{{ asset('storage/'. $berita->poster) }}"
    alt="{{ "poster-$berita->judul" }}"
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
