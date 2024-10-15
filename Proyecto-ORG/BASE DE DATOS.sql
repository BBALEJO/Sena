create database DOMICILIOS;
use DOMICILIOS;
create table rolusuario(
idrolusuario int,
descricionrolusuario varchar(30) not null,
estadorolusuario varchar(30) not null,
primary key(idrolusuario) 
);
CREATE TABLE usuario (
idusuario int auto_increment,
tipodocusuario varchar(30) not null,
numdocusuario varchar(20) not null ,
nombreusuario varchar(50) not null,
apellidousuario varchar(50) not null,
direccionusuario varchar(80) not null,
telefonousuario varchar(20)not null,
correousuario varchar(70)not null unique,
passwordusuario varchar(20) not null,
fperfil MEDIUMBLOB, -- Para almacenar el archivo de perfil en formato binario
eusuario ENUM('activo', 'inactivo', 'congelado') NOT NULL,
rusuario ENUM('administrador', 'cliente', 'gerente') NOT NULL,
idrolusuarioFK int,
primary key(idusuario) 
);

create table producto(
idproducto int auto_increment,
descripproducto varchar(100) not null,
precioproducto double not null,
categoriaproducto varchar (40) not null,
estadoproducto varchar(30) not null,
primary key(idproducto)
);
create table pedido(
idepedido int primary key auto_increment,
fechapedido date not null,
horapedido time not null,
totalpedido double not null,
estadopedido varchar(30) not null,
pedidoadomicilio char(3) not null,
idusuarioFK int
);
create table domicilio(
iddomicilio int auto_increment,
horadomicilio time not null,
estadodomicilio varchar(30) not null,
idpedidoFK int,
iddomiciliarioFK int,
primary key(iddomicilio)
);
create table datellepedido(
iddetallepedido int auto_increment,
idproductoFK int,
contidadproducto int not null,
precioproducto double not null,
subtotalproducto double not null,
idpedidoFK int,
primary key(iddetallepedido) 
);
alter table usuario add constraint usuariorolusuario
foreign key(idrolusuarioFK) references rolusuario(idrolusuario);

alter table pedido add constraint usuariopedido 
foreign key (idusuarioFK) references usuario(idusuario);

alter table domicilio add constraint domiciliopedido
foreign key(idpedidoFK) references pedido(idEpedido); 

alter table domicilio add constraint domiciliousuario
foreign key(iddomiciliarioFK) references usuario(idusuario);

alter table datellepedido add constraint detallepedidoconpedido
foreign key(idpedidoFK) references pedido(idepedido);

alter table datellepedido add constraint detallepedidoproducto
foreign key(idproductoFK) references producto(idproducto); 
SELECT * FROM usuario;
DELIMITER $$
CREATE PROCEDURE login(
IN uss VARCHAR(32),
IN pass VARCHAR(32)
)
BEGIN
SELECT * FROM usuario WHERE nombreusuario=uss AND passwordusuario=pass;
END $$
DELIMITER ;