<x-base>
INFORMACION DE MI PROYECTO
<br>
NO ENTIENDO QUE ESTOY HACIENDO
<br>
LARAVEL ES MAGICO QUE NO COMPRENDO NADA
<br><br>
@guest
    <x-button href="{{ route('session.index') }}"> Log in </x-button>
@endguest

@auth
    <x-button href="{{ route('session.logout') }}" method="POST">Log out</x-button>
@endauth
</x-base>
