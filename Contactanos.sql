create database Contactanos;
use Contactanos;

create table Formulario(
id int auto_increment primary key,
nombre varchar(30),
correo varchar(30),
telefono varchar(10),
Mensaje varchar(100)
);
select*from Formulario