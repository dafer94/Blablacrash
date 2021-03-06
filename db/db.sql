use blablacrash;

CREATE TABLE MENSAJES(
 	id INT NOT NULL AUTO_INCREMENT,
 	emisor VARCHAR(100) NOT NULL,
 	receptor VARCHAR(100) NOT NULL,
 	contenido text NOT NULL,
 	fecha_hora TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 	CONSTRAINT PRIMARY KEY(id)
);

CREATE TABLE USUARIOS(
 	email VARCHAR(100) NOT NULL,
 	pass VARCHAR(50) NOT NULL,
 	nombre VARCHAR(50) NOT NULL,
 	dni VARCHAR(20) NOT NULL,
 	tlf VARCHAR(20) NOT NULL,
 	last_name VARCHAR(100) NOT NULL,
 	type INT NOT NULL,
 	CONSTRAINT PRIMARY KEY(email)
);

CREATE TABLE VIAJES(
 	id INT NOT NULL AUTO_INCREMENT,
 	conductor VARCHAR(100) NOT NULL,
 	origen VARCHAR(50) NOT NULL,
 	destino VARCHAR(50) NOT NULL,
 	precio DOUBLE(10,2) NOT NULL,
 	fecha_salida TIMESTAMP NOT NULL,
 	capacidad INT NOT NULL,
 	CONSTRAINT PRIMARY KEY(id)
);

ALTER TABLE `viajes` ADD FOREIGN KEY (`conductor`) REFERENCES `usuarios`(`email`) ON DELETE RESTRICT ON UPDATE RESTRICT