DELIMITER //
CREATE PROCEDURE Registrar(
	IN _id INT,
	IN _nombre VARCHAR(50),
	IN _password VARCHAR(40),
	OUT _resultado INT
)
BEGIN
	DECLARE existe VARCHAR(16);
    SET existe = NULL;
    
    -- Verifica si el nombre de usuario ya existe en la base de datos
    SELECT usuario 
    FROM users 
    WHERE usuario LIKE _nombre
    INTO existe;
     
    -- Validaciones de los parámetros de entrada
    IF _nombre IS NULL OR _nombre LIKE '' THEN 
		SET _resultado = -1; -- Error: Nombre de usuario es nulo o vacío
	ELSEIF _password IS NULL OR _password LIKE '' THEN
		SET _resultado = -2; -- Error: Contraseña es nula o vacía
	ELSEIF existe IS NOT NULL THEN
		SET _resultado = -3; -- Error: Nombre de usuario ya existe
	ELSEIF LOCATE('@', _nombre) = 0 THEN
        SET _resultado = -4; -- Error: Nombre de usuario no contiene '@'
    ELSE
        -- Inserta el nuevo usuario en la base de datos
		INSERT INTO users(id, usuario, contrasenia)
		VALUES(_id, _nombre, _password);
		SET _resultado = 0; -- Éxito
    END IF;            
END//
DELIMITER ;
