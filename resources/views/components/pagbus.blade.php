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
    let encontrada = false;
    const celdas = filas[i].getElementsByTagName("td");
    for (let j = 0; j < celdas.length; j++) {
      const contenido = celdas[j].textContent.toLowerCase().trim();
      if (contenido.includes(buscado)) {
        encontrada = true;
        break;
      }
    }
    if (encontrada) {
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
