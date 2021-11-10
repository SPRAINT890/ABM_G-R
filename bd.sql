create table Clientes (
ID int auto_increment primary key,
 Cedula varchar(9) not null unique key,
 Nombre varchar (20),
 Apellido varchar(20),
 Direccion varchar(60),
 Telefono varchar(9),
 Email varchar(25)
);