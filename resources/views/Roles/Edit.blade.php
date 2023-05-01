<x-base>
    <x-header/>
    <main style="display: flex;">
        <x-sidemenu controller="roles"/>

        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <x-input id="type" placeholder="" value="{{$role->type}}">
                Tipo:
            </x-input>

              <br>
              <x-button type="submit">
                Modificar
              </x-button>

            </form>
    </main>

</x-base>
