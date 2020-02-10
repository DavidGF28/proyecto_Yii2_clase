CREATE DATABASE
  Y2E3;
USE Y2E3;

CREATE OR REPLACE TABLE catalogo (
  id int AUTO_INCREMENT,
  nombre varchar (100),
  descripcion varchar (100),
  PRIMARY KEY (id)
  );

INSERT INTO catalogo VALUES
  (1,'flor1','Flor del campo'),
  (2,'flor2','Flor del bosque');