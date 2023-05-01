<x-base>
    <x-header/>
    <main style="display:flex;">
        <x-sidemenu controller="users" />

        <table class="table" style="width: 65%;">
            <thead>
                <tr>
                    <th><br><th>
                </tr>
              <tr class="table-dark">
                <th scope="col">Nombre</th>
                <th scope="col">DUI</th>
                <th scope="col">Carnet</th>
                <th scope="col">Rol</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody class="table-secondary">
                @foreach ($users as $user)
                <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->dui }}</td>
                <td>{{$user->carnet}}</td>
                <td>{{$user->role->type}}</td>
                <td><a href="{{ route('users.edit', $user->id) }}"><img src="/img/edit.png" alt="editimg" height="25px" width="25px"></a></td>

                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')

                    <td><button type="submit" class="btn btn-danger" height="25px" width="25px"><i class="bi bi-trash3"></i></button></td>

                </form>

                </tr>
                @endforeach
            </tbody>
          </table>
    </main>
    <x-footer/>
</x-base>
