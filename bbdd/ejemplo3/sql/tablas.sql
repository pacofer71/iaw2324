create table usuarios(
    id int auto_increment primary key,
    email varchar(100) unique not null,
    provincia varchar(250) not null
);

insert into usuarios(email, provincia) values("usuario1@gmail.com", "Almeria");
insert into usuarios(email, provincia) values("usuario2@gmail.com", "Granada");
insert into usuarios(email, provincia) values("usuario3@gmail.com", "Sevilla");
insert into usuarios(email, provincia) values("usuario4@gmail.com", "Cordoba");