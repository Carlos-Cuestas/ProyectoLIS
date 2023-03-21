<x-base>
    <style>
        body{
            background-image: url('/img/white-concrete-wall.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <x-header controller="schools"/>

    <main style="display: flex;">
        <x-sidemenu controller="schools"/>

        <table class="table" style="width: 65%;">
            <thead>
                <tr>
                    <th><br><th>
                </tr>
              <tr class="table-dark">
                <th scope="col">Name</th>
                <th scope="col">State</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody class="table-secondary">
                @foreach ($schools as $school)
                <tr>
                <td>{{ $school->name }}</td>
                <td>{{ $school->state->name }}</td>
                <td><a href="{{ route('schools.edit', $school->id) }}"><img src="/img/edit.png" alt="editimg" height="25px" width="25px"></a></td>
                </tr>
                @endforeach
            </tbody>

          </table>
    </main>
    <x-footer/>
</x-base>
