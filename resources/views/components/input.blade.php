@props(['id', 'placeholder', 'type' => 'text'])

<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $slot }}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $id }}" placeholder="{{ $placeholder }}">
</div>

