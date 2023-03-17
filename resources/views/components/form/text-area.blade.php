<label for="{{ $name }}">{{ $label }}</label>
<textarea name="{{ $name }}" id="{{ $name }}" class="form-control @error($name) is-invalid @enderror" cols="30" rows="10"
      @if(!empty($placeholder))
        placeholder="{{ $placeholder }}"
      @endif
>{{ old($name) }}</textarea>
@error($name)
<div class="invalid-feedback">{{ $message }}</div>
@enderror
