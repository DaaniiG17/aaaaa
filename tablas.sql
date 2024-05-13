use infofutbol;

-- drop table if exists estadisticas;
-- drop table if exists jugadores;
-- drop table if exists plantilla;
-- drop table if exists equipo;

create table if not exists equipo(
    id_equipo int not null primary key,
	nombre varchar(50),
    ciudad varchar(50) not null,
    anio_creacion int not null,
    entrenador varchar(50) not null,
    estadio varchar(50) not null
);



create table if not exists plantilla(
	id_plantilla varchar(50) primary key,
    cantidad_jugadores int not null,
    numero_camiseta int not null,
    foreign key(id_plantilla) references equipo(nombre),
    foreign key(numero_camiseta) references jugadores(numero_camiseta)
);


create table if not exists jugadores(
    numero_camiseta int primary key,
	equipo varchar(50) not null,
    nombre varchar(50) not null,
    apellido varchar(50) not null,
    peso int(3),
    altura int(3) not null,
	edad int not null,
    posicion_base varchar(50),
    foreign key (equipo) references plantilla(nombre_plantilla)
);



create table if not exists estadisticas(
	id_estadisticas int primary key,
    partidos_jugados int not null,
    goles int not null,
    asistencias int not null,
    tarjetas_amarillas int not null,
    tarjetas_rojas int not null,
    temporadas_club int not null,
    fk_jugador INT not null,
    foreign key (fk_jugador) references jugadores(numero_camiseta)
);

