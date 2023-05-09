<x-base tipo="teachers">

    <div class="p-4">
        <label class="fw-bold">Buscar Nombre:</label>
        <input type="text" id="buscador-nombre" placeholder="Buscar por nombre">
    </div>

    <div class="text-center">
        <table class="table" id="miTabla">
            <thead class="table-dark">
                <th>Profesor</th>
                <th>Grado</th>
                <th>Materia</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody class="table-secondary">
                @foreach ($teachers as $teacher)

                <tr>
                    <td>{{ $teacher->user->name }}</td>
                    <td>{{ $teacher->grade->name }}</td>
                    <td>{{ $teacher->subject->name }}</td>
                    <td><a href="{{ route('teachers.edit', $teacher->id) }}"><img src="/img/edit.png" alt="editimg"
                                height="25px" width="25px"></a></td>
                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST"
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
