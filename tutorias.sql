create table situacion
(
id bigserial NOT NULL,
situaciones text NOT NULL,
PRIMARY KEY (id)
);
create table estudiante
(
id bigserial NOT NULL,
nombre text NOT NULL,
carrera text NOT NULL,
semestre text NOT NULL,
situacion bigint,
PRIMARY KEY (id),
FOREIGN KEY (situacion) REFERENCES situacion(id)

);

create table genero
(
id bigserial NOT NULL,
genero text NOT NULL,
PRIMARY KEY (id)
);
create table estados
(
id bigserial NOT NULL,
estado text NOT NULL,
PRIMARY KEY (Id)
);

create table tipo
(
id bigserial NOT NULL,
tipos text NOT NULL,
PRIMARY KEY(id)
);

create table usuarios
(
id bigserial NOT NULL,
nombre text NOT NULL,
apellido_materno text NOT NULL,
apellido_paterno text NOT NULL,
edad integer NOT NULL,
genero bigint,
direccion text NOT NULL,
telefono text NOT NUll,
estado bigint,
ciudad text NOT NUll,
email text NOT NULL,
nu_clase bigint,

PRIMARY KEY(id),
FOREIGN KEY (nu_clase) REFERENCES tipo(id),
FOREIGN KEY (estado) REFERENCES estados(id),
FOREIGN KEY (genero) REFERENCES genero(id),

CHECK(edad >= 0)
);







