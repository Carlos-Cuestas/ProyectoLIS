<x-base tipo="states">

    <div class="p-4">
        <label class="fw-bold">Buscar Nombre:</label>
        <input type="text" id="buscador-nombre" placeholder="Buscar por nombre">
    </div>

    <div class="text-center">
        <table class="table" id="miTabla">
            <thead class="table-dark">
                <th>Nombre</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody class="table-secondary">
                @foreach ($states as $state)
                    <tr>
                        <td>{{ $state->name }}</td>
                        <td><a href="{{ route('states.edit', $state->id) }}"><img src="/img/edit.png" alt="editimg"
                                    height="25px" width="25px"></a></td>
                        <form action="{{ route('states.destroy', $state->id) }}" method="POST"
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
