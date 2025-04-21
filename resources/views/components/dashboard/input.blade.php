<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input 
        type="{{ $type ?? 'text' }}" 
        id="{{ $name }}" 
        name="{{$name}}" 
        value="{{ $value }}" 
        class="form-control @error($name) is-invalid @enderror"
        placeholder="{{ $placeholder }}"
        >
    @error($name)
    <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
