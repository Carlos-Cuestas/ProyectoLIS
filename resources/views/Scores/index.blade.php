<x-base>
    <h1>Seleccione Grupo</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Seccion</th>
                <th>Grado</th>
                <th>Materia</th>
                <th>Siclo</th>
                <th>Nota</th>
                <th>Escuela</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($subjects as $subject)
                @foreach ($students as $student)


                    <tr>
                        <th>
                            {{$student->name}}
                        </th>

                        <th>
                            {{$student->section->name}}
                        </th>
                        <th>
                            {{$student->grade->name}}
                        </th>
                        <th>
                            {{$subject}}
                        </th>
                        <th>
                            {{$student->cycle}}
                        </th>
                        <th>
                            {{$student->note}}
                        </th>
                        <th>
                            {{$student->school->name}}
                        </th>
                    </tr>

                @endforeach

            @endforeach
        </tbody>
    </table>


</x-base>
