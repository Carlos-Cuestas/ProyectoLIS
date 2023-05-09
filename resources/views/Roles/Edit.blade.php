<x-base tipo="roles">
    <div class="card border-1" style="width: 28rem;padding: 4%;">
    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <x-input id="type" placeholder="" value="{{ $role->type }}">
            Tipo:
        </x-input>

        <br>
        <x-button type="submit">
            Modificar
        </x-button>
    </form>
    </div>
</x-base>
