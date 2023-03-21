@props(['type' => 'button', 'href' => null, 'method' => 'GET'])

@if ($href == null)
<button type="{{ $type }}" class="btn btn-secondary">
    {{ $slot }}
</button>
@else
    @if ($method == 'GET')
    <a href="{{ $href }}" class="btn btn-secondary" role="button" type="{{ $type }}">{{ $slot }}</a>
    @else
    <form action="{{ $href }}" method="{{ $method }}" style="min-width: 100%">
        @csrf
        <button type="submit" class="btn btn-secondary" style="min-width: 100%">
            {{ $slot }}
        </button>

    </form>
    @endif
@endif
