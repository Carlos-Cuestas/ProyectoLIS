<x-base>
    <x-header/>
    <main style="display:flex;">
        <x-sidemenu/>

        <section>
            <form action="{{ route('schools.store') }}" method="POST">
                @csrf

                @method('POST')

                <x-input id="name"  placeholder="" value="">
                    Nombre:
                </x-input>

                Estados:
                <select class="form-select" name="state_id">
                    @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{$state->name}}</option>
                    @endforeach
                  </select>
                  <br>

                <button type="submit">Mandar</button>

            </form>
        </section>
    </main>
</x-base>
