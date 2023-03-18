@props(['id', 'placeholder', 'value' => '', 'name' => null, 'type' => 'text'])

@php
    if ($name == null)
        $name = $id;
@endphp

<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $slot }}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}">

    @error($name)
    <div class="text-danger mt-1">
        {{ $message }}
    </div>
    @enderror
</div>
