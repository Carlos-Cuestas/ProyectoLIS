<x-base>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">State</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($schools as $school)
            <tr>
            <td><a href="{{ route('schools.edit', $school->id) }}">{{ $school->name }}</a></td>
            <td>{{ $school->state->name }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</x-base>
