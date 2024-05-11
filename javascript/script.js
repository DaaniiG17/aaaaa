const deleteButtons = document.querySelectorAll('.delete-btn');

  // Iterar sobre cada botón y agregar un evento de clic
  deleteButtons.forEach(button => {
    button.addEventListener('click', function(event) {
      // Prevenir el comportamiento predeterminado del enlace
      event.preventDefault();
      
      // Obtener el contenedor del jugador (el div con clase "col-lg-4")
      const playerContainer = this.parentElement.parentElement;

      // Eliminar el contenedor del jugador del DOM
      playerContainer.remove();
    });
  });