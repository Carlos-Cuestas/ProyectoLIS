<x-base val="ini">
    <x-header/>
    <style>

        #container {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
          grid-gap: 10px; /* Espacio entre botones */
          max-width: 600px; /* Ancho máximo del contenedor */
        }

        @media screen and (min-width: 400px) {
          #container {
            grid-template-columns: repeat(auto-fit, minmax(200px, calc((100% - 20px) / 3)));
            max-width: 800px; /* Ancho máximo del contenedor */
          }
        }

        @media screen and (min-width: 800px) {
          #container {
            grid-template-columns: repeat(auto-fit, minmax(100px, calc((100% - 30px) / 4)));
            max-width: none; /* Elimina el ancho máximo del contenedor */
          }
        }

        button {
          font-size: 16px;
          background-color: #4CAF50;
          color: white;
          border: none;
          cursor: pointer;
        }
      </style>

      <!---
/* //@if (auth()->user()->role_id == 1)
//<x-menubutton src="/img/schoolicon.png" href="schools" mesaje="Escuelas" styler="padding:2%;"/>
//@endif*/ --->

    <div id="container">


        @if (Auth::user()->role_id == 1)

            <x-menubutton src="/img/schoolicon.png" href="schools" mesaje="Escuelas" styler="padding:2%;"/>

            <x-menubutton src="/img/useravatar.png" href="users" mesaje="Usuarios" styler="padding:2%;"/>

            <x-menubutton src="/img/role.png" href="roles" mesaje="Roles" styler="padding:2%;"/>

            <x-menubutton src="/img/alumn.png" href="students" mesaje="Alumnos" styler="padding:2%;"/>

            <x-menubutton src="/img/grupos.png" href="sections" mesaje="Secciones" styler="padding:2%;"/>

            <x-menubutton src="/img/materias.png" href="subjects" mesaje="Materias" styler="padding:2%;"/>

            <x-menubutton src="/img/grados.png" href="grades" mesaje="Grados" styler="padding:2%;"/>

            <x-menubutton src="/img/estados.png" href="states" mesaje="Estados" styler="padding:2%;"/>

            <x-menubutton src="/img/perfilpro.png" href="teachers" mesaje="Perfiles" styler="padding:2%;"/>
        @endif

        @if (Auth::user()->role_id == 2)

            <x-menubutton src="/img/notas.png" href="scores" mesaje="Notas" styler="padding:2%;"/>

        @endif

    </div>
        <br>
        <br>
        <br>
        <br>
        <br>
</x-base>
