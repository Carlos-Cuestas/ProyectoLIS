<x-base tipo="users">
    <div class="card border-1" style="width: 28rem;padding: 4%;">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <x-input id="dui" placeholder="" value="{{ $user->dui }}">
                Dui:
            </x-input>

            <x-input id="name" placeholder="" value="{{ $user->name }}">
                Nombre:
            </x-input>

            <x-input id="carnet" placeholder="" value="{{ $user->carnet }}">
                Carnet:
            </x-input>

            Role:
            <select class="form-select" name="role_id">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" {!! $user->role_id == $role->id ? 'selected' : '' !!}>{{ $role->type }}</option>
                @endforeach
            </select>
            <br>

            Estado:
            <select class="form-select" name="state_id">
                @foreach ($states as $state)
                    <option value="{{ $state->id }}" {!! $user->state_id == $state->id ? 'selected' : '' !!}>{{ $state->name }}</option>
                @endforeach
            </select>
            <br>

            Escuela:
            <select class="form-select" name="school_id">
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}" {!! $user->school_id == $school->id ? 'selected' : '' !!}>{{ $school->name }}</option>
                @endforeach
            </select>
            <br>



            <x-button type="submit">
                Modificar
            </x-button>

        </form>
    </div>
</x-base>
