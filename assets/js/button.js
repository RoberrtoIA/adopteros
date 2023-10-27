alert('hola');

function activarTab() {
  // Obtener el elemento tab con el id especificado
  var tab = document.querySelector("#gestion_donacion");

  // Activar el tab
  tab.classList.add("active");

  // Ocultar todos los demás tabs
  var tabs = document.querySelectorAll(".tab-pane");
  for (var i = 0; i < tabs.length; i++) {
    if (tabs[i] !== tab) {
      tabs[i].classList.remove("active");
    }
  }
}

document.getElementById("my-button").addEventListener("click", activarTab, false);