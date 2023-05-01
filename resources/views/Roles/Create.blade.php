<x-base>
    <x-header/>
    <main style="display:flex;">
        <x-sidemenu controller="roles" />

        <section>
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf

                @method('POST')

                <x-input id="type"  placeholder="" value="">
                    Tipo:
                </x-input>


                <button type="submit">Mandar</button>

            </form>
        </section>
    </main>
    <x-footer/>
</x-base>
