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
			in nombreJugador char(50),
            OUT _resultado int
)
BEGIN

	if(nombreJugador IS NULL OR nombreJugador like "") THEN
    SET _resultado = -1;

	DELETE FROM JUGADORES
    WHERE nombreJugador LIKE nombre;
    set _resultado = 0;
    END IF;
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
            in edadJugador int,
            out _resultado int
)
BEGIN
			if(nombreJugador IS NULL OR nombreJugador like "") then
            set _resultado = -1;
            elseif(edadJugador IS NULL OR edadJugador like "") THEN
            SET _resultado = -2;
            else
			UPDATE jugadores
            set edad = edadJugador
            where nombre like nombreJugador;
			SET _resultado = 0;
            END IF;
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
            in nombreAntiguo char(50),
            OUT _resultado int
)
BEGIN
	IF(nuevoNombre IS NULL OR nuevoNombre LIKE "") THEN
		SET _resultado = -1;
	ELSEIF(nombreAntiguo IS NULL OR nombreAntiguo LIKE "") THEN
		SET _resultado = -2;
        else
			UPDATE jugadores
            set nombre = nuevoNombre
            where nombre like nombreAntiguo;
            set _resultado = 0;
	END IF;
END//
DELIMITER ;


-- Cambiar dorsal

DELIMITER //
CREATE PROCEDURE cambiarDorsalJugador(
			in nuevoDorsal char(50),
            in dorsalAntiguo char(50),
            out _resultado int
)
BEGIN

	IF(nuevoDorsal IS NULL) THEN
		SET _resultado = -1;
	ELSEIF(dorsalAntiguo IS NULL) THEN
		SET _resultado = -2;
	ELSE    
			UPDATE jugadores
            set numero_camiseta = nuevoDorsal
            where numero_camiseta like dorsalAntiguo;
            SET _resultado = 0;
	END IF;
END//
DELIMITER ;


-- Cambiar entrenador

DELIMITER //
CREATE PROCEDURE cambiarEntrenador(
			in nuevoEntrenador char(50),
            in antiguoEntrenador char(50),
            OUT _resultado int
)
BEGIN
	IF(nuevoEntrenador IS NULL OR nuevoEntrenador LIKE "") THEN
    SET _resultado = -1;
    ELSEIF(antiguoEntrenador IS NULL OR antiguoEntrenador LIKE "") THEN
    SET _resultado = -2;
    ELSE
		UPDATE EQUIPO
		SET nombre = nuevoEntrenador
		where nombre like antiguoEntrenador;
		SET _resultado = 0;
	END IF;
END//
DELIMITER ;


-- Registrarse

DROP PROCEDURE Registrar;
DELIMITER //
CREATE PROCEDURE Registrar(IN _id int,
							IN _nombre VARCHAR(50),
                           IN _password VARCHAR(40),
                           OUT _resultado INT)
BEGIN
	DECLARE existe VARCHAR(16);
    SET existe = NULL;
    
    SELECT usuario FROM users WHERE usuario LIKE _nombre
    INTO existe;
    
    IF(_nombre IS NULL or _nombre LIKE "") THEN 
		SET _resultado = -1;
	ELSEIF(_password IS NULL or _password LIKE "") THEN
		SET _resultado = -2;
	ELSEIF(existe IS NOT NULL) THEN
		SET _resultado = -3;
    ELSE	-- TODO PERFECTO
		INSERT INTO users(id, usuario, contrasenia)
				VALUES(_id, _nombre, _password);
		SET _resultado = 0;
    END IF;            
END//
DELIMITER ;


-- INICIAR SESION


DROP PROCEDURE login;
DELIMITER //
CREATE PROCEDURE login(IN _nombre varchar(16),
							   IN _pass varchar(40),
							   OUT _resultado INT)
BEGIN
	DECLARE existe VARCHAR(16);
    DECLARE passCorrecta varchar(40);    
    SET existe = NULL;
    SET passCorrecta = NULL;
    
    SELECT usuario FROM users WHERE usuario LIKE _nombre
    INTO existe;
    SELECT contrasenia FROM users WHERE username LIKE _usuario and contrasenia LIKE _pass
    INTO passCorrecta;
    
    IF(_nombre LIKE "" or _nombre IS NULL) THEN -- CASO -1 - Usuario vacio o nulo
		SET _resultado = -1;
    ELSEIF(existe IS NULL) THEN -- CASO -2 - Usuario no existe
		SET _resultado = -2;
    ELSEIF(passCorrecta IS NULL) THEN -- CASO -3 - Contraseña incorrecta
		SET _resultado = -3;
	ELSE -- CASO 0 - TODO OK (Contraseña correcta)
		SET _resultado = 0;
	END IF;
END//
DELIMITER ;

