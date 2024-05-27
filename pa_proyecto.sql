-- Procedimientos



-- Agregar jugador 


DELIMITER //
CREATE PROCEDURE agregarJugador(
		IN numeroCamisetaJugador INT,
		IN nombreJugador CHAR(50),
		IN apellidoJugador CHAR(50),
		IN pesoJugador INT,
		IN alturaJugador INT,
		IN edadJugador INT,
		IN posicionBaseJugador CHAR(50)
)
BEGIN
	INSERT INTO JUGADORES (numero_camiseta, equipo, nombre, apellido, peso, altura, edad, posicion_base)
    VALUES (numeroCamisetaJugador, nombreEquipo, nombreJugador, apellidoJugador, pesoJugador, alturaJugador, edadJugador, posicionBaseJugador);

end//
DELIMITER ;

-- Eliminar jugador ** 

DELIMITER //
CREATE PROCEDURE eliminarJugador(
			in nombreJugador char(50)
)
BEGIN
	DELETE FROM JUGADORES
    WHERE nombreJugador LIKE nombre;
END//
DELIMITER ;


-- Cambiar estadisticas a un jugador

DELIMITER //
CREATE PROCEDURE cambiarEstadisticasJugador(
			in id_jugador int,
            in nuevoPartidos_jugados int,
			in nuevoGoles int,
            in nuevoAsistencias int,
            in nuevoTarjetas_amarillas int,
            in nuevoTarjetas_rojas int,
			in nuevoTemporadas_club int
)
BEGIN
			UPDATE ESTADISTICAS
			set 
            partidos_jugados = nuevoPartidos_jugados,
            goles = nuevoGoles,
            asistencias = nuevoAsistencias,
			tarjetas_amarillas = nuevoTarjetas_amarillas,
            tarjetas_rojas = nuevoTarjetas_rojas,
            temporadas_club = nuevoTemporadas_club
            where fk_jugador = id_jugador;
END//
DELIMITER ;


-- Cambiar edad a un jugador

DELIMITER //
CREATE PROCEDURE cambiarEdadJugador(
			in nombreJugador char(50),
            in edadJugador int
)
BEGIN
			UPDATE jugadores
            set edad = edadJugador
            where nombre like nombreJugador;

END//
DELIMITER ;


-- Insertar equipo

DELIMITER //
CREATE PROCEDURE insertarEquipo (
	in nuevoEquipo char(50),
    in nuevoId_equipo int,
    in nuevoCiudad char(50),
    in nuevoAnio_creaccion int,
    in nuevoEntrenador char(50),
    in nuevoEstadio char(50)
)
BEGIN
	insert into equipo(nombre, id_equipo, ciudad, anio_creacion, entrenador, estadio)
    values(nuevoEquipo, nuevoId_equipo, nuevoCiudad, nuevoAnio_creaccion, nuevoEntrenador, nuevoEstadio)
END;
DELIMITER //

-- Cambiar nombre jugador


DELIMITER //
CREATE PROCEDURE cambiarNombreJugador(
			in nuevoNombre char(50),
            in nombreAntiguo char(50)
)
BEGIN
			UPDATE jugadores
            set nombre = nuevoNombre
            where nombre like nombreAntiguo;

END//
DELIMITER ;


-- Cambiar dorsal

DELIMITER //
CREATE PROCEDURE cambiarDorsalJugador(
			in nuevoDorsal char(50),
            in dorsalAntiguo char(50)
)
BEGIN
			UPDATE jugadores
            set numero_camiseta = nuevoDorsal
            where numero_camiseta like dorsalAntiguo;

END//
DELIMITER ;


-- Cambiar entrenador

DELIMITER //
CREATE PROCEDURE cambiarEntrenador(
			in nuevoEntrenador char(50),
            in antiguoEntrenador char(50)
)
BEGIN
			UPDATE EQUIPO
			SET nombre = nuevoEntrenador
            where nombre like antiguoEntrenador;
END ;
DELIMITER //