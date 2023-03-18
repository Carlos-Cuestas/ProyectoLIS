<x-base>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-5 text-center">
            <div class="card border-0">
                <div class="card-body rounded-3 text-white" style="background-color: #616161;">
                    <form action="{{ route('session.login') }}" method="POST">
                        @csrf
                        <x-input id="dui" placeholder="">
                            Usuario:
                        </x-input>

                        <x-input id="password" placeholder="password" type="password">
                            Contraseña:
                        </x-input>

                        <x-button type="submit">
                            Login
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-base>
