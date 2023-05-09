<x-base tipo="teachers">
    <div class="card border-1" style="width: 28rem;padding: 4%;">

        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
            @csrf
            @method('PATCH')

            Profesor:
            <select class="form-select" name="user_id">
                @foreach ($users as $user)
                    @if ($user->role_id==2)
                        <option value="{{ $user->id }}" {!! $teacher->user_id == $user->id ? 'selected' : '' !!}>{{ $user->name }}</option>
                    @endif
                @endforeach
            </select>
            <br>


            Grado:
            <select class="form-select" name="grade_id">
                @foreach ($grades as $grade)
                    <option value="{{ $grade->id }}" {!! $teacher->grade_id == $grade->id ? 'selected' : '' !!}>{{ $grade->name }}</option>
                @endforeach
            </select>
            <br>

            Materia:
            <select class="form-select" name="subject_id">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}" {!! $teacher->subject_id == $subject->id ? 'selected' : '' !!}>{{ $subject->name }}</option>
                @endforeach
            </select>
            <br>

            <x-button type="submit">
                Modificar <i class="bi bi-pencil-square"></i>
            </x-button>
        </form>
    </div>
</x-base>
