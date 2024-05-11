const eliminar = document.querySelectorAll('.eliminar');

eliminar.forEach(eliminar =>{
    eliminar.addEventListener('click', eliminarJugador)
})

function eliminarJugador(e){
    e.preventDefault();
    const jugador = e.target.parentNode.parentNode;
    jugador.remove();
}