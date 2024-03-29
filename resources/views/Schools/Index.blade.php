<x-base tipo="schools">

    <div class="p-5">
        <label class="fw-bold">Buscar Nombre:</label>
        <input type="text" id="buscador-nombre" placeholder="Buscar por nombre">
    </div>

    <div style="width: 50rem;">
        <table class="table" id="miTabla">
            <thead>
                <tr class="table-dark">
                    <th>Centro Escolar</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody class="table-secondary">
                @foreach ($schools as $school)
                    <tr>
                        <td>{{ $school->name }}</td>
                        <td>{{ $school->state->name }}</td>
                        <td><a href="{{ route('schools.edit', $school->id) }}"><img src="/img/edit.png" alt="editimg"
                                    height="25px" width="25px"></a></td>
                        <form action="{{ route('schools.destroy', $school->id) }}" method="POST"
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
        <x-pagbus />
    </div>
</x-base>
