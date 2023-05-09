<x-base tipo="roles">

    <div class="text-center">
        <table class="table" style="width: 65%;">
            <thead>

                <tr class="table-dark">
                    <th>Id</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody class="table-secondary">
                @foreach ($roles as $dato)
                    <tr>
                        <td>{{$dato->id}}</td>
                        <td>{{ $dato->type }}</td>
                        <td><a href="{{ route('roles.edit', $dato->id) }}"><img src="/img/edit.png" alt="editimg"
                                    height="25px" width="25px"></a></td>
                        <form action="{{ route('roles.destroy', $dato->id) }}" method="POST"
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
