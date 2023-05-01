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
            <th scope="col">DUI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">Escuela</th>
            <th scope="col">Puesto</th>
            <th scope="col">Editar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allstaff as $staff)
            <tr>
            <td>{{ $staff->dui}}</td>
            <td>{{ $staff->name }}</td>
            <td>{{ $staff->state->name }}</td>
            <td>{{ $staff->school->name }}</td>
            <td>{{ $staff->role->name}}</td>
            <td><a href="{{ route('staff.edit', $staff->id) }}"><img src="/img/edit.png" alt="editimg" height="25px" width="25px"></a></td>
            </tr>
            @endforeach
        </tbody>
      </table>
</main>

      <x-footer/>
</x-base>

