<label for="{{ $name }}">{{ $label }}</label>
<input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
    @if(!empty($placeholder))
        placeholder="{{ $placeholder }}"
    @endif value="{{ old($name) }}"
>
@error($name)
<div class="invalid-feedback">{{ $message }}</div>
@enderror
