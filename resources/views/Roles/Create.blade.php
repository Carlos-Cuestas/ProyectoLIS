<x-base tipo="roles">
    <div class="card border-1" style="width: 28rem;padding: 4%;">
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf

        @method('POST')

        <x-input id="type" placeholder="" value="">
            Tipo:
        </x-input>


        <x-button type="submit">Mandar</x-button>

    </form>
    </div>

</x-base>
