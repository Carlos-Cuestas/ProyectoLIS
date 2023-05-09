<x-base tipo="scores" :siso="false">

    <div class="card border-1 p-4 col-12 col-lg-10 col-xl-5">
        <h1>{{ $teacher->grade->name }} {{ $seccion->name }} - {{ $teacher->subject->name }}</h1>

        <label>Ciclo</label>
        <select class="form-select" name="ciclo" onchange="changeURL()" id="ciclo">
            @foreach ($ciclos as $cycle)
                <option value="{{ $cycle->number }}" {{ $cycle->number == $ciclo ? 'selected' : '' }}>
                    {{ $cycle->number }}</option>
            @endforeach
        </select>
        <br>
        <label>Seccion</label>
        <select class="form-select" name="ciclo" onchange="changeURL()" id="seccion">
            @foreach ($secciones as $section)
                <option value="{{ $section->id }}" {{ $section->id == $seccion->id ? 'selected' : '' }}>
                    {{ $section->name }}</option>
            @endforeach
        </select>

        <br>

        <form
            action="{{ route('scores.update', ['section' => $section->id, 'cycle' => $ciclo, 'subject' => $teacher->subject->id]) }}"
            method="POST">
            @csrf
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Alumno</th>
                        <th>Ciclo</th>
                        <th>Nota</th>
                        <th>Escuela</th>
                    </tr>
                </thead>
                <tbody class="table-secondary">

                    @foreach ($students as $student)
                        <?php
                        $score = $student
                            ->scores()
                            ->where('subject_id', $teacher->subject->id)
                            ->where('cycle_id', $ciclo)
                            ->first();
                        ?>
                        <tr>
                            <th>
                                {{ $student->name }}
                            </th>
                            <th>
                                {{ $ciclo }}
                            </th>
                            <th>
                                <input type="number" value="{{ $score->note }}" min="0" max="10"
                                    name="{{ $score->id }}">
                            </th>
                            <th>
                                {{ $student->school->name }}
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <input class="btn btn-secondary" type="submit" value="Enviar notas">
        </form>
    </div>


    <script>
        function changeURL(ciclo) {
            ciclo = document.getElementById('ciclo').value;
            seccion = document.getElementById('seccion').value;
            window.location.search = '?ciclo=' + ciclo + '&seccion=' + seccion;
        }
    </script>
</x-base>
