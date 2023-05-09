<x-base tipo="subjects">
    <div class="p-4">
        <label class="fw-bold">Buscar Nombre:</label>
        <input type="text" id="buscador-nombre" placeholder="Buscar por nombre">
    </div>
    <div class="text-center">
        <table class="table" id="miTabla">
            <thead class="table-dark">
                <th>Id</th>
                <th>Materias</th>
                <td>Editar</td>
                <td>Eliminar</td>
            </thead>
            <tbody class="table-secondary">
                @foreach ($subjects as $subject)
                    <tr>
                        <td>{{ $subject->id }}</td>
                        <td>{{ $subject->name }}</td>
                        <td><a href="{{ route('subjects.edit', $subject->id) }}"><img src="/img/edit.png" alt="editimg"
                                    height="25px" width="25px"></a></td>
                        <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST"
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
