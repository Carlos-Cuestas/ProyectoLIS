<x-base>
    <x-header/>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">DUI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">Escuela</th>
            <th scope="col">Puesto</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allstaff as $staff)
            <tr>
            <td>{{ $staff->dui}}</td>
            <td><a href="{{ route('staff.edit', $staff->id) }}">{{ $staff->nombre }}</a></td>
            <td>{{ $staff->state->name }}</td>
            <td>{{ $staff->school->name }}</td>
            <td>{{ $staff->position->nombre}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</x-base>

