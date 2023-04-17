<x-base>
    <x-header/>

<main style="display: flex;">
    <x-sidemenu controller="staff"/>

    <table class="table">
        <thead>
            <tr>
                <th></th>
            </tr>
          <tr class="table-dark">
            <th scope="col">Carnet</th>
            <th scope="col">Nombre</th>
            <th scope="col">Genero</th>
            <th scope="col">Grado</th>
            <th scope="col">Escuela</th>
            <th scope="col">Editar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            @if ($student->school_id==1)
            <tr>
                <td>{{ $student->carnet}}</td>
                <td>{{ $student->nombre }}</td>
                <td>{{ $student->genero }}</td>
                <td>{{ $student->grado }}</td>
                <td>{{ $student->school->name}}</td>
                <td><a href="{{ route('staff.edit', $student->id) }}"><img src="/img/edit.png" alt="editimg" height="25px" width="25px"></a></td>
                </tr>
            @endif

            @endforeach
        </tbody>
      </table>
</main>

      <x-footer/>
</x-base>

