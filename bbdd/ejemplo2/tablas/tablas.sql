create table articulos(
    id int auto_increment primary key,
    nombre varchar(100) unique not null,
    descripcion varchar(250) not null,
    pvp decimal(6,2) not null,
    disponible enum("SI", "NO")
);

insert into articulos(nombre, descripcion, pvp, disponible) values("Articulo1", "Descripcion 1", 12.45 , "SI");
insert into articulos(nombre, descripcion, pvp, disponible) values("Articulo2", "Descripcion 2", 56.78, "SI");
insert into articulos(nombre, descripcion, pvp, disponible) values("Articulo3", "Descripcion 3", 98.56, "NO");
insert into articulos(nombre, descripcion, pvp, disponible) values("Articulo4", "Descripcion 4", 123.78, "NO");
-- create database ejemplo2;
-- create user usuario@'localhost' identified by 'secret0';
-- grant all on ejemplo2.* to usuario2@'localhost';
-- Ahora probamos la conexion desde fuera de mysql ponemos
-- mysql -u usuario2 -p ejemplo2
