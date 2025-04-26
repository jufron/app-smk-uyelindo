@if ($testimoni->avatar && file_exists(public_path('storage/'. $testimoni->avatar)))
<img
    class="rounded-lg"
    src="{{ asset('storage/'. $testimoni->avatar) }}"
    alt="{{ "avatar-$testimoni->nama_lengkap" }}"
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
