<x-base>
    <form action="{{ route('schools.update', $school->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <x-input id="name" placeholder="" value="{{ $school->name }}">
        Nombre:
    </x-input>
    Estado:
    <select class="form-select" name="state_id">
        @foreach ($states as $state)
        <option value="{{ $state->id }}" {!! $school->state_id == $state->id ? 'selected' : '' !!}>{{ $state->name }}</option>
        @endforeach
      </select>

      <br>
      <x-button type="submit">
        Modificar
      </x-button>
    </form>
</x-base>
