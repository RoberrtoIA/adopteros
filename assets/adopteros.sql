CREATE DATABASE adopteros;
USE adopteros;

CREATE TABLE perro(
	id INT PRIMARY KEY AUTO_INCREMENT ,
	nombre VARCHAR(24) NOT NULL,
	edad INT,
	edad_meses INT,
	descripcion VARCHAR (480) NOT NULL,
	uid_fotografia VARCHAR(255) NOT NULL
);

CREATE TABLE usuario(
	id INT PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(24) NOT NULL,
	pass VARCHAR(255) NOT NULL,
	auth BOOLEAN NOT NULL
	-- tipo de usuario: true-1 -> Admin; false-0 -> Editor
);

INSERT INTO usuario(id, username, pass, auth)
VALUES (default, 'admin', '$2y$10$HJSXuNIE9QqCrPbxbGO7BO6TTAcAmzRa3nnn98yb.HWoOMn0EiLaq', true);

-- Procedimientos Almacenados

DELIMITER //

-- INSERT INTO perro
CREATE PROCEDURE perro_insert (
IN _nombre VARCHAR(24), 
IN _edad INT, 
IN _edad_meses INT, 
IN _descripcion VARCHAR(480), 
IN _uid_fotografia VARCHAR(255)
)  
BEGIN  
    INSERT INTO perro(id, nombre, edad, edad_meses, descripcion,  uid_fotografia)
    VALUES (default, _nombre, _edad, _edad_meses, _descripcion,  _uid_fotografia);
END//

-- DELETE FROM perro
CREATE PROCEDURE perro_delete (IN _id INT)  
BEGIN  
    DELETE FROM perro WHERE id = _id;
END//

-- UPDATE perro
CREATE PROCEDURE perro_update (
	IN _id INT, 
	IN _nombre VARCHAR(24), 
	IN _edad INT, 
	IN _edad_meses INT, 
	IN _descripcion VARCHAR(480), 
	IN _uid_fotografia VARCHAR(255)
)  
BEGIN  
    UPDATE perro
    SET nombre = _nombre, 
    edad = _edad, 
    edad_meses = _edad_meses,
    descripcion = _descripcion,  
    uid_fotografia = _uid_fotografia
    WHERE id = _id;
END//

-- INSERT INTO usuario
CREATE PROCEDURE usuario_insert (
	IN _username VARCHAR(24), 
	IN _pass VARCHAR(255), 
	IN _auth BOOLEAN
)  
BEGIN  
    INSERT INTO usuario(id, username, pass, auth)
    VALUES (default, _username, _pass, _auth);
END//

-- DELETE FROM usuario
CREATE PROCEDURE usuario_delete (IN _id INT)  
BEGIN  
    DELETE FROM usuario WHERE id = _id;
END//

-- UPDATE usuario password
CREATE PROCEDURE usuario_update_password (
	IN _id INT, 
	IN _pass VARCHAR(255)
)
BEGIN  
    UPDATE usuario
    SET pass = _pass
    WHERE id = _id;
END//

DELIMITER ;
