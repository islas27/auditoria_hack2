DROP DATABASE IF EXISTS datos_abiertos;
CREATE DATABASE datos_abiertos;
ALTER SCHEMA datos_abiertos DEFAULT CHARACTER SET utf8 ;
USE datos_abiertos;

DROP TABLE IF EXISTS obra_publica;
CREATE TABLE obra_publica(
	id INT NOT NULL PRIMARY KEY,
	municipio VARCHAR(30),
	ejercicio INT,
	concepto VARCHAR(50),
	cantidad_obras INT,
	monto_ejercido REAL(15,2)
);

DROP TABLE IF EXISTS presupuesto;
CREATE TABLE presupuesto(
	id INT NOT NULL PRIMARY KEY,
	municipio VARCHAR(30),
    	ejercicio INT,
	concepto VARCHAR(50),
	monto_ejercido REAL(15,2),
    	habitantes INT
);
