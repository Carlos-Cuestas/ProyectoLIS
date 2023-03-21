<x-base>
    <x-header/>
    <main style="display: flex;">
        <x-sidemenu controller="users"/>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <x-input id="dui" placeholder="" value="{{$user->dui}}">
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
              <x-button type="submit">
                Modificar
              </x-button>

            </form>
    </main>

</x-base>
