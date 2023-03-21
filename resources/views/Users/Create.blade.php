<x-base>
    <x-header/>
    <main style="display:flex;">
        <x-sidemenu controller="users" />

        <section>
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                @method('POST')

                <x-input id="name"  placeholder="" value="">
                    Nombre:
                </x-input>

                <x-input id="dui"  placeholder="" value="">
                    DUI:
                </x-input>

                <x-input id="password"  placeholder="" value="">
                    Contraseña:
                </x-input>

                <x-input id="carnet"  placeholder="" value="">
                    Carnet:
                </x-input>

                Roles:
                <select class="form-select" name="role_id">
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{$role->type}}</option>
                    @endforeach
                  </select>
                  <br>

                <button type="submit">Mandar</button>

            </form>
        </section>
    </main>
    <x-footer/>
</x-base>
