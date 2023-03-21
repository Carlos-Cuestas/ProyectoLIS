<x-base>
    <x-header/>
        <section class="mt-5">
            <article>
                <div class="container text-center">
                    <div class="row align-items-center">
                            <div class="col">

                                <x-menubutton src="/img/schoolicon.png" href="schools" mesaje="Escuelas" styler="padding:2%;"/>
                            </div>
                            <div class="col">
                                <x-menubutton src="/img/persoico.png" href="staff" mesaje="Personal" styler="padding:2%;"/>
                            </div>

                            @if (auth()->user()->role_id == 1)
                            <div class="col">
                            <x-menubutton src="/img/useravatar.png" href="schools" mesaje="Usuarios" styler="padding:2%;"/>
                            </div>
                            @endif

                        <div class="col">
                            <x-menubutton src="/img/role.png" href="schools" mesaje="Roles" styler="padding:2%;"/>
                        </div>

                    </div>
                    </div>
            </article>
        </section>
        <section class="mt-5">
            <article style="">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col">

                            <x-menubutton src="/img/proceso.png" href="schools" mesaje="Entrar" styler="padding:2%;"/>
                        </div>
                        <div class="col">
                            <x-menubutton src="/img/proceso.png" href="schools" mesaje="Entrar" styler="padding:2%;"/>
                        </div>
                        <div class="col">
                            <x-menubutton src="/img/proceso.png" href="schools" mesaje="Entrar" styler="padding:2%;"/>
                        </div>
                        <div class="col">
                            <x-menubutton src="/img/proceso.png" href="schools" mesaje="Entrar" styler="padding:2%;"/>
                          </div>
                    </div>
                    </div>
            </article>
        </section>
        <section class="mt-5">
            <article style="">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col">
                            <x-menubutton src="/img/proceso.png" href="schools" mesaje="Entrar" styler="padding:2%;"/>
                        </div>
                        <div class="col">
                            <x-menubutton src="/img/proceso.png" href="schools" mesaje="Entrar" styler="padding:2%;"/>
                        </div>
                        <div class="col">
                            <x-menubutton src="/img/proceso.png" href="schools" mesaje="Entrar" styler="padding:2%;"/>
                        </div>
                        <div class="col">
                            <x-menubutton src="/img/proceso.png" href="schools" mesaje="Entrar" styler="padding:2%;"/>
                          </div>
                    </div>
                    </div>
            </article>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
    <x-footer/>
</x-base>
