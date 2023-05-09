@props(['controller', 'siso' => true])


<div class="container-fluid bg-secondary bg-opacity-50 rounded-4" style="width: 14rem;padding: 9%">
    <x-button href="{{ route('menu') }}">Regresar</x-button>
    @if ($siso)
        <hr>
        <ul class="navbar-nav">
            <h5>Gestion</h5>

            <li class="nav-item">
                <a class="nav-link" href="{{ route($controller . '.create') }}">Crear</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route($controller . '.index') }}">Mostrar</a>
            </li>
        </ul>
    @endif

</div>
