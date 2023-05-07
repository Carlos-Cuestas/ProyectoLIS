<x-base>

    <x-header/>

    <section style="background-image: URL('/img/1053415.jpg');background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
        <article class="text-center">
            <br><br><br><br><br><br>

            <h3 class="text-white">Bienvenido a SCG</h1>
            <h1 class="text-white ">Sistema Control Gestion</h1>
            <br><br>

            @guest

            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginmodal" href="#">Iniciar Sesion</button>

            @endguest


            @auth

            <form class="nav-link" action="{{ route('session.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-secondary">
                    Cerrar Sesion
                </button>
            </form>

            @endauth

            <br><br><br><br><br><br><br><br><br><br><br><br><br>


        </article>
    </section>
<x-footer/>
</x-base>
