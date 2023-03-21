<x-base>
    <x-header/>
    <br>
    <main style="display:flex;">
        <x-sidemenu controller="schools"/>

        <article style="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <form action="{{ route('schools.update', $school->id) }}" method="POST">
                            @csrf
                            @method('PATCH')

                            <x-input id="name" placeholder="" value="{{ $school->name }}">
                                Nombre:
                            </x-input>

                            Estado:
                            <select class="form-select" name="state_id">
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}" {!! $school->state_id == $state->id ? 'selected' : '' !!}>{{ $state->name }}</option>
                                @endforeach
                            </select>

                            <br>

                            <x-button type="submit">
                                Modificar <i class="bi bi-pencil-square"></i>
                            </x-button>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <x-footer/>
</x-base>
