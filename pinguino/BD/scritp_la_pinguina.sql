drop database if exists la_pinguinita_db;
create database la_pinguinita_db
character set utf8mb4 collate utf8mb4_general_ci;
use la_pinguinita_db;

create table Reserva(
	reserva_id int auto_increment,
    cliente_id int not null,
    fecha date not null,
    cantidad tinyint not null,
    primary key(reserva_id)
)engine = innodb;
create table Cliente(
	cliente_id int auto_increment,
    nombre varchar(45) not null,
    celular varchar(10) not null,
    cedula varchar(10) not null unique,
    email varchar(100)null,
    primary key(cliente_id)
)engine = innodb;
create table Direccion(
	direccion_id int auto_increment,
    tipo enum ('Calle','Carrera','Transversal') not null,
    numero varchar(100) not null,
    casa varchar(45) not null,
    barrio varchar(45) not null,
    cliente_id int not null,
    primary key(direccion_id)
)engine = innodb;
create table domicilio(
	domicilio_id int auto_increment,
    empleado_id int not null,
    factura_id int not null,
    direccion_id int not null,
    fecha date not null,
    primary key(domicilio_id)
)engine = innodb;
create table Empleado(
	empleado_id int auto_increment,
    nombre varchar(45) not null,
    cargo enum('Domiciliario','Cajero','Mesero') not null,
    celular varchar(10),
    primary key(empleado_id)
)engine = innodb;
create table Producto(
	producto_id int auto_increment,
    nombre varchar(200) not null,
    descripcion text,
    imagen varchar(200),
    precio decimal(10,2),
    tipo enum('Almuerzo','Cena','Desayuno','Bebida') not null,
    primary key(producto_id)
    )engine = innodb;
create table Pedido(
	pedido_id int auto_increment,
    producto_id int not null,
    cantidad tinyint,
    factura_id int not null,
    primary key(pedido_id)
)engine = innodb;
create table Factura(
	factura_id int auto_increment,
    fecha date,
    cliente_id int not null,
    empleado_id int not null,
    primary key (factura_id)
)engine = innodb;

alter table Direccion
add constraint fk1 foreign key (cliente_id) 
references Cliente(cliente_id);

alter table Reserva
add constraint fk2 foreign key(cliente_id)
references Cliente(cliente_id);

alter table domicilio
add constraint fk3 foreign key(empleado_id)
references Empleado(empleado_id);

alter table domicilio
add constraint fk4 foreign key(direccion_id)
references Direccion(direccion_id);

alter table pedido
add constraint fk5 foreign key(producto_id)
references Producto(producto_id);

alter table Factura
add constraint fk6 foreign key(cliente_id)
references Cliente(cliente_id);

alter table Factura
add constraint fk7 foreign key(empleado_id)
references Empleado(empleado_id);


alter table Pedido
add constraint fk8 foreign key(factura_id)
references Factura(factura_id);