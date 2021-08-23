CREATE DATABASE devcorporated;
USE devcorporated;

CREATE TABLE usuarios_suscripcion(
    id      int AUTO_INCREMENT NOT NULL,
    nombre  VARCHAR(60) NOT NULL ,
    correo  VARCHAR(60) NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_correo UNIQUE(correo)
)ENGINE=InnoDb;

CREATE TABLE cotizacion(
    id          int AUTO_INCREMENT NOT NULL,
    nombre     VARCHAR(60) NOT NULL,
    apellidos   VARCHAR(60) NULL,
    correo      VARCHAR(60) NOT NULL,
    nombre_negocio VARCHAR(70) NULL,
    giro_negocio VARCHAR(60) NOT NULL,
    servicio    VARCHAR(60) NOT NULL,
    especificaciones LONGTEXT NULL,
    fecha       DATE NOT NULL,
    CONSTRAINT pk_cotizacion PRIMARY KEY(id)
)ENGINE=InnoDb;

