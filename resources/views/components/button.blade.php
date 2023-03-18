@props(['type' => 'button', 'href' => null, 'method' => 'GET'])

@if ($href == null)
<button type="{{ $type }}" class="btn btn-primary">
    {{ $slot }}
</button>
@else
    @if ($method == 'GET')
    <a href="{{ $href }}" class="btn btn-primary" role="button" type="{{ $type }}">{{ $slot }}</a>
    @else
    <form action="{{ $href }}" method="{{ $method }}" style="min-width: 100%">
        @csrf
        <button type="submit" class="btn btn-primary" style="min-width: 100%">
            {{ $slot }}
        </button>
    </form>
    @endif
@endif
