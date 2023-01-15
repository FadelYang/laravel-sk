<div class="mb-2">
    <label for="{{ $field }}" class="form-label">{{ $label }}</label>
    <textarea type="text" name="{{ $field }}" class="form-control" id="{{ $field }}" rows="3">
@isset($value){{ old('title') ? old('title') : $value }}
@else{{ old($field) }}@endisset</textarea>
    @error($field)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>