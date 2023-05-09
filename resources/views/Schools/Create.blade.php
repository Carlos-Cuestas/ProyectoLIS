<x-base tipo="schools">
    <div class="card border-1" style="width: 28rem;padding: 4%;">
        <form action="{{ route('schools.store') }}" method="POST">
            @csrf

            @method('POST')

            <x-input id="name" placeholder="" value="">
                Nombre:
            </x-input>

            Estados:
            <select class="form-select" name="state_id">
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
            <br>

            <x-button type="submit">Mandar</x-button>

        </form>
    </div>
</x-base>
