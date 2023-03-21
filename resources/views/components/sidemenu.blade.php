@props(['controller'])

<section style="padding: 2%;width: 260px;height: 100%;">
    <div class="container-fluid bg-secondary bg-opacity-50 rounded-4" style="padding: 9%">
          <x-button href="{{ route('menur') }}">Regresar</x-button>

        <hr>

          <ul class="navbar-nav">
            <h5>Gestion</h5>
            <li class="nav-item">
              <a class="nav-link" href="{{route( $controller.'.create')}}">Crear</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route( $controller.'.index')}}">Mostrar</a>
            </li>
          </ul>

    </div>
 </section>
