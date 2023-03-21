<x-base>
    <x-header controller="staff"/>
    <form action="{{ route('staff.update', $staff->id) }}" method="POST">
    @csrf
    @method('PATCH')

    <x-input id="dui" placeholder="" value="{{$staff->dui}}">
        Dui:
    </x-input>

    <x-input id="nombre" placeholder="" value="{{ $staff->nombre }}">
        Nombre:
    </x-input>

    Estado:
    <select class="form-select" name="state_id">
        @foreach ($states as $state)
        <option value="{{ $state->id }}" {!! $staff->state_id == $state->id ? 'selected' : '' !!}>{{ $state->name }}</option>
        @endforeach
      </select>

    Escuela:
    <select class="form-select" name="school_id">
        @foreach ($schools as $school)
        <option value="{{ $school->id }}" {!! $staff->school_id == $school->id ? 'selected' : '' !!}>{{ $school->name }}</option>
        @endforeach
      </select>

    Puesto:
    <select class="form-select" name="position_id">
        @foreach ($positions as $position)
        <option value="{{ $position->id }}" {!! $staff->position_id == $position->id ? 'selected' : '' !!}>{{ $position->nombre }}</option>
        @endforeach
      </select>

      @if ($staff->teacher != null)
      <x-input id="campo" placeholder="" value="{{$staff->teacher->campo}}">Campo
    </x-input>
    <x-input id="grado" placeholder="" value="{{$staff->teacher->grado}}">Grado
    </x-input>
      @endif



      <br>
      <x-button type="submit">
        Modificar
      </x-button>

    </form>
</x-base>
