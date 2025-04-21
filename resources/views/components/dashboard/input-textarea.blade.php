<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea 
        class="form-control @error($name)is-invalid @enderror"
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows ?? 5 }}"
        placeholder="{{ $placeholder }}"
    >{{ $value }}</textarea>
    @error($name)
    <small id="emailHelp" class="invalid-feedback text-muted">{{ $message }}</small>
    @enderror
</div>