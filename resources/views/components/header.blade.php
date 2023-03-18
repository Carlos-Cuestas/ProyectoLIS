<header style="background-color: black;">
    <ul class="nav justify-content-end">
        <li class="nav-item">
            @guest
                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginmodal" href="#"><img src="/img/web-10.png" alt="no logo" width="30px" height="35px"></a>
            @endguest

            @auth
            <form class="nav-link" action="{{ route('session.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn border-0 rounded-circle">
                    <img src="/img/web-12.png" alt="no logo" width="35px" height="35px">
                </button>

            </form>
            @endauth
        </li>
      </ul>

      <!-- Modal -->
    <form action="{{ route('session.login') }}" method="POST">
        @csrf
    <div class="modal fade modal" id="loginmodal">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <h1 class="modal-title fs-5">Iniciar Sesion</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Usuario:</label>
                  <x-input id="dui" placeholder="" value="930498281" class="form-control"/>
                </div>

                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Contrasenia:</label>
                  <x-input id="password" placeholder="password" type="password" value="password" class="form-control"/>
                </div>
              </form>
            </div>

            <div class="modal-footer">
              <x-button type="submit">
                Login
            </x-button>
            </div>

          </div>
        </div>
      </div>
    </form>
</header>
