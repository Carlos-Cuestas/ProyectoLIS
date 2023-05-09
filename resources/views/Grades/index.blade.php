<x-base tipo="grades">
    <div class="text-center">
        <table class="table">
            <thead class="table-dark">
                <th>Id</th>
                <th>Grados</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody class="table-secondary">
                @foreach ($grades as $grade)
                    <tr>
                        <td>{{$grade->id}}</td>
                        <td>{{$grade->name}}</td>
                        <td><a href="{{ route('grades.edit', $grade->id) }}"><img src="/img/edit.png" alt="editimg" height="25px" width="25px"></a></td>
                        <form action="{{ route('grades.destroy', $grade->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <td><button type="submit" class="btn btn-danger" height="25px" width="25px"><i class="bi bi-trash3"></i></button></td>
                    </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-base>
