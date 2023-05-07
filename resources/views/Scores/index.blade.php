<x-base>
    <h1>Seleccione Grupo</h1>
    @foreach ($staff as $dato3)
        @if (Auth::user()->dui == $dato3->dui)
            {{$dato3->name}}
            {{$dato3->school->name}}
        @endif
    @endforeach

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

            @foreach ($scores as $dato)

            @foreach ($students as $dato2)

            @foreach ($staff as $dato3)
                @if (Auth::user()->dui == $dato3->dui)
                    @if ($dato2->school->name == $dato3->school->name)

                    @if ($dato->student->school->name == $dato3->school->name)
                    <tr>
                        <th>
                            {{$dato->student->name}}
                        </th>

                        <th>
                            {{$dato->student->section->name}}
                        </th>
                        <th>
                            {{$dato->student->grade->name}}
                        </th>
                        <th>
                            {{$dato->subject->name}}
                        </th>
                        <th>
                            {{$dato->cycle}}
                        </th>
                        <th>
                            {{$dato->note}}
                        </th>
                        <th>
                            {{$dato->student->school->name}}
                        </th>
                    </tr>
                    @endif


                    @endif
                @endif
            @endforeach

            @endforeach

            @endforeach
        </tbody>
    </table>


</x-base>
