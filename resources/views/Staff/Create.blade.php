<x-base>
    <x-header/>
    <main style="display:flex;">
        <x-sidemenu controller="staff"/>

        <section>
            <form action="{{ route('staff.store') }}" method="POST">
                @csrf
                @method('POST')

                <x-input id="nombre"  placeholder="" value="">
                    Nombre:
                </x-input>

                <x-input id="dui"  placeholder="" value="">
                    DUI:
                </x-input>

                Escuela:
                <select class="form-select" name="school_id">
                    @foreach ($schools as $school)
                    <option value="{{ $school->id }}">{{$school->name}}</option>
                    @endforeach
                  </select>
                  <br>

                Estados:
                <select class="form-select" name="state_id">
                    @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{$state->name}}</option>
                    @endforeach
                  </select>
                  <br>

                Posicion:
                <select class="form-select" name="position_id">
                    @foreach ($positions as $position)
                    <option value="{{ $position->id }}">{{$position->nombre}}</option>
                    @endforeach
                  </select>
                  <br>

                <button type="submit">Mandar</button>

            </form>
        </section>
    </main>
    <x-footer/>
</x-base>
