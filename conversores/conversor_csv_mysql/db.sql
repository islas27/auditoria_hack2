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

create view rebanada as select DISTINCT
    o.id "id", p.ejercicio "anio", p.municipio "municipio", o.concepto "concepto",
    o.monto_ejercido/p.habitantes "gasto_persona"
from obra_publica o
inner join presupuesto p
using(municipio, ejercicio);

