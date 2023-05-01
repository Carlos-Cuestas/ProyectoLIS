<x-base>
    <x-header/>
    <main style="display:flex;">
        <x-sidemenu controller="students" />

        <section>
            <form action="{{ route('students.store') }}" method="POST">
                @csrf

                @method('POST')

                <x-input id="carnet"  placeholder="" value="">
                    Carnet:
                </x-input>

                <x-input id="name"  placeholder="" value="">
                    Nombre:
                </x-input>

                Genero:
                <select class="form-select" name="gender">
                    <option value="H">H</option>
                    <option value="M">M</option>
                </select>
                <br>

                Seccion:
                <select class="form-select" name="section_id">
                    @foreach ($sections as $dato)
                    <option value="{{ $dato->id }}">{{$dato->name}}</option>
                    @endforeach
                  </select>
                  <br>

                Grado:
                <select class="form-select" name="grade_id">
                    @foreach ($grades as $dato)
                    <option value="{{ $dato->id }}">{{$dato->name}}</option>
                    @endforeach
                  </select>
                  <br>


                Escuela:
                <select class="form-select" name="school_id">
                    @foreach ($schools as $dato)
                    <option value="{{ $dato->id }}">{{$dato->name}}</option>
                    @endforeach
                  </select>
                  <br>

                <button type="submit">Mandar</button>

            </form>
        </section>
    </main>
    <x-footer/>
</x-base>
