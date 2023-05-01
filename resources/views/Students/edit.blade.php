<x-base>
    <x-header/>
    <main style="display: flex;">
        <x-sidemenu controller="students"/>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <x-input id="carnet" placeholder="" value="{{$student->carnet}}">
                Carnet:
            </x-input>

            <x-input id="name" placeholder="" value="{{$student->name}}">
                Nombre:
            </x-input>


            Genero:
            <select class="form-select" name="gender">
                <option value="H">H</option>
                <option value="M">M</option>
            </select>

            Grado:
            <select class="form-select" name="grade_id">
                @foreach ($grades as $dato)
                <option value="{{ $dato->id }}" {!! $student->grade_id == $dato->id ? 'selected' : '' !!}>{{ $dato->name }}</option>
                @endforeach
            </select>

            Grado:
            <select class="form-select" name="section_id">
                @foreach ($sections as $dato)
                <option value="{{ $dato->id }}" {!! $student->section_id == $dato->id ? 'selected' : '' !!}>{{ $dato->name }}</option>
                @endforeach
            </select>

            Escuela:
            <select class="form-select" name="school_id">
                @foreach ($schools as $dato)
                <option value="{{ $dato->id }}" {!! $student->school_id == $dato->id ? 'selected' : '' !!}>{{ $dato->name }}</option>
                @endforeach
            </select>


              <br>
              <x-button type="submit">
                Modificar
              </x-button>

            </form>
    </main>

</x-base>
