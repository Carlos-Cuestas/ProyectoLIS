<x-base>
    <x-header/>

<main style="display: flex;">
    <x-sidemenu controller="students"/>

    <section>


    <table class="table">
        <thead>
            <tr>
                <th>
                    <div>
                        <label>Buscar Nombre:</label>
                        <input type="text" id="buscador-nombre" placeholder="Buscar por nombre">
                    </div>
                </th>
            </tr>
        </thead>
    </table>
    <table class="table" id="miTabla">
        <thead>
          <tr class="table-dark">
            <th scope="col">Carnet</th>
            <th scope="col">Nombre</th>
            <th scope="col">Genero</th>
            <th scope="col">Grado</th>
            <th scope="col">Seccion</th>
            <th scope="col">Escuela</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>


            @foreach ($students as $student)
            <tr>
                <td>{{ $student->carnet}}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->grade->name }}</td>
                <td>{{ $student->section->name }}</td>
                <td>{{ $student->school->name}}</td>
                <td><a href="{{ route('students.edit', $student->id) }}"><img src="/img/edit.png" alt="editimg" height="25px" width="25px"></a></td>

                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')

                    <td><button type="submit" class="btn btn-danger" height="25px" width="25px"><i class="bi bi-trash3"></i></button></td>

                </form>

            </tr>
            @endforeach
        </tbody>
      </table>

    </section>
    </main>

<div id="paginacion" class="container">
    <button id="anterior" class="btn btn-secondary">Anterior</button>
    <span id="pagina-actual">1</span>
    <button id="siguiente" class="btn btn-secondary">Siguiente</button>
  </div>

<script>

const buscadorNombre = document.getElementById("buscador-nombre");
buscadorNombre.addEventListener("input", function() {
  buscarPorNombre();
});

function buscarPorNombre() {
  const tabla = document.getElementById("miTabla");
  const filas = tabla.getElementsByTagName("tr");
  const numFilas = filas.length - 1; // Resta 1 para excluir la fila de encabezado
  const buscado = buscadorNombre.value.toLowerCase().trim();

  for (let i = 1; i <= numFilas; i++) {
    const nombre = filas[i].getElementsByTagName("td")[1].textContent.toLowerCase().trim();
    if (nombre.includes(buscado)) {
      filas[i].style.display = "table-row";
    } else {
      filas[i].style.display = "none";
    }
  }
}

function mostrarFilas() {
  // Código anterior de la función mostrarFilas

  buscarPorNombre(); // Agrega esta línea al final para actualizar la búsqueda en cada cambio de página
}

    const filasPorPagina = 10; // Cambia esto al número deseado de filas por página
    let paginaActual = 1;

    function mostrarFilas() {
      const tabla = document.getElementById("miTabla");
      const filas = tabla.getElementsByTagName("tr");
      const numFilas = filas.length - 1; // Resta 1 para excluir la fila de encabezado

      // Calcula el índice inicial y final de las filas que se mostrarán en la página actual
      const indiceInicial = (paginaActual - 1) * filasPorPagina + 1;
      let indiceFinal = indiceInicial + filasPorPagina - 1;
      if (indiceFinal > numFilas) {
        indiceFinal = numFilas;
      }

      // Oculta todas las filas que no están en la página actual y muestra las filas correspondientes
      for(let i = 1; i <= numFilas; i++) {
    if (i >= indiceInicial && i <= indiceFinal) {
    filas[i].style.display = "table-row";
    } else {
    filas[i].style.display = "none";
    }
    }

    // Actualiza los botones de paginación
    const btnAnterior = document.getElementById("anterior");
    const btnSiguiente = document.getElementById("siguiente");
    if (paginaActual === 1) {
    btnAnterior.disabled = true;
    } else {
    btnAnterior.disabled = false;
    }
    if (paginaActual === Math.ceil(numFilas / filasPorPagina)) {
    btnSiguiente.disabled = true;
    } else {
    btnSiguiente.disabled = false;
    }

    // Actualiza el número de página actual
    const paginaActualSpan = document.getElementById("pagina-actual");
    paginaActualSpan.innerText = paginaActual.toString();
    }

    const btnAnterior = document.getElementById("anterior");
    const btnSiguiente = document.getElementById("siguiente");

    btnAnterior.addEventListener("click", function() {
      paginaActual--;
      mostrarFilas();
    });

    btnSiguiente.addEventListener("click", function() {
      paginaActual++;
      mostrarFilas();
    });

    mostrarFilas(); // Llama a la función por primera vez para mostrar la primera página

      </script>
      <x-footer/>
</x-base>

