<x-base tipo="teachers">
    <div class="card border-1" style="width: 28rem;padding: 4%;">
        <form action="{{ route('teachers.store') }}" method="POST">
            @csrf
            @method('POST')
            Profesor:
            <select class="form-select" name="user_id">

                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <br>

            Grado:
            <select class="form-select" name="grade_id">
                @foreach ($grades as $grade)
                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                @endforeach
            </select>
            <br>

            Materia:
            <select class="form-select" name="subject_id">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>
            <br>

            <x-button type="submit">Mandar</x-button>

        </form>
    </div>
</x-base>
