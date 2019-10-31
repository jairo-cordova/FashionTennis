drop database if EXISTS fashionTennis;
CREATE DATABASE fashionTennis;
USE fashionTennis;

CREATE TABLE IF NOT EXISTS usuario(id_usuario int(6) primary key NOT NULL, nombre VARCHAR (100)NOT NULL, tipo_usuario VARCHAR(50)NULL, correo VARCHAR (250), password VARCHAR(50) NOT NULL);

CREATE TABLE  tennis(id_tennis INT(6) primary key NOT NULL, Nombre VARCHAR(100)NOT NULL, descripcion VARCHAR(180) NULL, size INT(6)NOT NULL, 
precio INT(7)NOT NULL, existencia VARCHAR(80), material VARCHAR(100));

CREATE TABLE  pedido(id_pedido INT(6) primary key NOT NULL, num_pedido INT(5) NOT NULL, preciofinal int(7), cantidad INT(5), fecha_pedido DATE, domicilio_entrega VARCHAR (180),
id_usuario INT(6), id_tennis INT(6),
constraint realiza foreign key(id_usuario) references usuario(id_usuario), 
constraint estan foreign key(id_tennis) references tennis(id_tennis));
