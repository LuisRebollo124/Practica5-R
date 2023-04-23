create database Usuarios;
use Usuarios;
create Table Usuarios(
                         id INT AUTO_INCREMENT,
                         nombre VARCHAR(30) NOT NULL,
                         contraseña varchar(30) NOT NULL ,
                         CONSTRAINT registro_pk PRIMARY KEY (id),
                         CONSTRAINT registro_uk1 unique (nombre)

);

create user Usuarios@localhost
    identified by 'registro';

select nombre,contraseña from Usuarios;

GRANT SELECT,INSERT,UPDATE,DELETE ON Usuarios.* TO Usuarios@localhost;