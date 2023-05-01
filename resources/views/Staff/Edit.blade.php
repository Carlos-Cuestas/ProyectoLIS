<x-base>
    <x-header/>
    <main style="display: flex;">
        <x-sidemenu controller="staff"/>

        <form action="{{ route('staff.update', $staff->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <x-input id="dui" placeholder="" value="{{$staff->dui}}">
                Dui:
            </x-input>

            <x-input id="name" placeholder="" value="{{ $staff->name}}">
                Nombre:
            </x-input>

            Estado:
            <select class="form-select" name="state_id">
                @foreach ($states as $state)
                <option value="{{ $state->id }}" {!! $staff->state_id == $state->id ? 'selected' : '' !!}>{{ $state->name }}</option>
                @endforeach
              </select>

            Escuela:
            <select class="form-select" name="school_id">
                @foreach ($schools as $school)
                <option value="{{ $school->id }}" {!! $staff->school_id == $school->id ? 'selected' : '' !!}>{{ $school->name }}</option>
                @endforeach
              </select>

            Rol:
            <select class="form-select" name="role_id">
                @foreach ($roles as $role)
                <option value="{{ $role->id }}" {!! $staff->role_id == $role->id ? 'selected' : '' !!}>{{ $role->type }}</option>
                @endforeach
              </select>


              <br>
              <x-button type="submit">
                Modificar
              </x-button>

            </form>
    </main>

</x-base>
