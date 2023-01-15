<div class="mb-2">
    <label for="{{$field}}" class="form-label">{{$label}}</label>
    <input type="{{$type}}" name="{{$field}}" class="form-control" id="{{$field}}"
    placehodler="{{$placeholder ?? ''}}"

    @isset($value)
value="{{ old('field') ? old('field') : $value }}"
    @else
value="{{ old($field) }}"
    @endisset

    >
    @error($field)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>