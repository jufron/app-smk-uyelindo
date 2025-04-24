@props(['label', 'name', 'checked' => false])

<div class="form-check form-switch">
    <input 
        class="form-check-input" 
        type="checkbox" 
        role="switch" 
        name="{{ $name }}"
        id="{{ $name }}" 
        {{ $checked ? 'checked' : '' }}
    />
    <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
    @error($name)
    <small class="invalid-feedback text-muted">{{ $message }}</small>
    @enderror
</div>