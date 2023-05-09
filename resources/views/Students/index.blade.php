<x-base tipo="students">

    <table class="table">
        <thead>
            <tr>
                <th>
                    <div>
                        <label>Buscar Nombre:</label>
                        <input type="text" id="buscador-nombre" placeholder="Buscar por nombre">
                    </div>
                </th>
            </tr>
        </thead>
    </table>
    <table class="table" id="miTabla">
        <thead>
            <tr class="table-dark">
                <th scope="col">Carnet</th>
                <th scope="col">Nombre</th>
                <th scope="col">Genero</th>
                <th scope="col">Grado</th>
                <th scope="col">Seccion</th>
                <th scope="col">Escuela</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody class="table-secondary">
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->carnet }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->grade->name }}</td>
                    <td>{{ $student->section->name }}</td>
                    <td>{{ $student->school->name }}</td>
                    <td><a href="{{ route('students.edit', $student->id) }}"><img src="/img/edit.png" alt="editimg"
                                height="25px" width="25px"></a></td>

                    <form action="{{ route('students.destroy', $student->id) }}" method="POST"
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

    <x-pagbus/>

</x-base>
