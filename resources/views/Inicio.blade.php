<x-base val="ini">

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


                <a href="/menu">
                    <button type="submit" class="btn btn-secondary">
                        Ir a menu
                    </button>

                </a>


            @endauth

            <br><br><br><br><br><br><br><br><br><br><br><br><br>


        </article>
    </section>
<x-footer/>
</x-base>
