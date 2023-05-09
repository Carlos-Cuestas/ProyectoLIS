<x-base tipo="sections">
    <div class="boder-1 text-center p-4 col-12 col-lg-10 col-xl-5">
        <table class="table">
            <thead class="table-dark">
                <th>Id</th>
                <th>Seccion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody class="table-secondary">
                @foreach ($sections as $section)
                    <tr>
                        <td>{{ $section->id }}</td>
                        <td>{{ $section->name }}</td>
                        <td><a href="{{ route('sections.edit', $section->id) }}"><img src="/img/edit.png" alt="editimg"
                                    height="25px" width="25px"></a></td>
                        <form action="{{ route('sections.destroy', $section->id) }}" method="POST"
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
</x-base>
