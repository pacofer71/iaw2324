create table usuarios(
    id int auto_increment primary key,
    email varchar(100) unique not null,
    descripcion varchar(250) not null,
    pass varchar(32) not null
);

insert into usuarios(email, descripcion, pass) values("usuario1@gmail.com", "Usuario 1 de Almeria ", "secret0");
insert into usuarios(email, descripcion, pass) values("usuario2@gmail.com", "Usuario 2 de Almeria ", "secret0");
insert into usuarios(email, descripcion, pass) values("usuario3@gmail.com", "Usuario 3 de Almeria ", "secret0");
insert into usuarios(email, descripcion, pass) values("usuario4@gmail.com", "Usuario 4 de Almeria ", "secret0");