create database usuarios;
use usuarios;
create Table usuarios(
                         id INT AUTO_INCREMENT,
                         nombre VARCHAR(30) NOT NULL,
                         contraseña varchar(30) NOT NULL ,
                         CONSTRAINT registro_pk PRIMARY KEY (id),
                         CONSTRAINT registro_uk1 unique (nombre)

);

create user usuarios@localhost
    identified by 'usuarios';

select nombre,contraseña from usuarios;


GRANT SELECT,INSERT,UPDATE,DELETE ON usuarios.* TO usuarios@localhost;