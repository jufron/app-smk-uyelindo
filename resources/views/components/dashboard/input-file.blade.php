<div class="form-group">
    <label
        for="{{ $name }}"
        class="form-label">{{ $label }}</label>
    <input
        class="form-control @error($name) is-invalid @enderror"
        type="file"
        id="{{ $name }}"
        name="{{ $name }}"
        accept="image/*"
        @if(isset($onchange)) onchange="{{ $onchange }}" @endif
    />
    @error($name)
    <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
