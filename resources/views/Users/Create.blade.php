<x-base tipo="users">
    <div class="card border-1" style="width: 28rem;padding: 4%;">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            @method('POST')

            <x-input id="name" placeholder="" value="">
                Nombre:
            </x-input>

            <x-input id="dui" placeholder="" value="">
                DUI:
            </x-input>

            <x-input id="password" placeholder="" value="">
                Contraseña:
            </x-input>

            <x-input id="carnet" placeholder="" value="">
                Carnet:
            </x-input>

            Roles:
            <select class="form-select" name="role_id">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->type }}</option>
                @endforeach
            </select>
            <br>

            Estado:
            <select class="form-select" name="state_id">
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
            <br>

            Escuela:
            <select class="form-select" name="school_id">
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}">{{ $school->name }}</option>
                @endforeach
            </select>
            <br>

            <x-button type="submit">
                Modificar
            </x-button>

        </form>
    </div>
</x-base>
