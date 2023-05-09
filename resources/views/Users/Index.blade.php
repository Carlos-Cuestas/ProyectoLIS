<x-base tipo="users">

    <div class="p-4">
        <label class="fw-bold">Buscar Nombre:</label>
        <input type="text" id="buscador-nombre" placeholder="Buscar por nombre">
    </div>

    <div class="text-center">
        <table class="table" id="miTabla">
            <thead>
                <tr class="table-dark">
                    <th>DUI</th>
                    <th>Nombre</th>
                    <th>Carnet</th>
                    <th>Estado</th>
                    <th>Escuela</th>
                    <th>Rol</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody class="table-secondary">
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->dui }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->carnet }}</td>
                        <td>{{ $user->state->name }}</td>
                        <td>{{ $user->school->name }}</td>
                        <td>{{ $user->role->type }}</td>
                        <td><a href="{{ route('users.edit', $user->id) }}"><img src="/img/edit.png" alt="editimg"
                                    height="25px" width="25px"></a></td>

                        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')

                            <td><button type="submit" class="btn btn-danger" height="25px" width="25px"><i
                                        class="bi bi-trash3"></i></button></td>

                        </form>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-pagbus />
</x-base>
