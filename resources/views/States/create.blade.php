<x-base tipo="states">
    <div class="card border-1" style="width: 28rem;padding: 4%;">
        <form action="{{ route('states.store') }}" method="POST">
            @csrf

            @method('POST')

            <x-input id="name" placeholder="" value="">
                Nombre:
            </x-input>

            <br>

            <x-button type="submit">Mandar</x-button>

        </form>
    </div>
</x-base>
