@if ($guruAndStaf->foto && file_exists(public_path('storage/'. $guruAndStaf->foto)))
<img
    class="rounded-lg"
    src="{{ asset('storage/'. $guruAndStaf->foto) }}"
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
