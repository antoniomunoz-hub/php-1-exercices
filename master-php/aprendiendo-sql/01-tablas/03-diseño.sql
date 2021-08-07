CREATE TABLE usuarios(
    id          int(255) auto_increment not null,
    nombre      varchar(100) not null, 
    apellidos   varchar(100) not null,
    email       varchar(100) not null, 
    contraseña  varchar(100) not null,
    fecha       date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
    CONSTRAINT uq_email UNIQUE(email) /* MEJORA PARA QUE EL EMAIL SEA UNICO*/
)ENGINE=InnoDB /* Para que las claves ajenas funcionen correctamente SUELE VENIR POR DEFECTO*/;

CREATE TABLE categorias(
    id          int(255) auto_increment not null,
    nombre      varchar(100) not null,
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE entradas(
    id              int(255) auto_increment not null,
    usuarios_id     int(255),
    categorias_id   int(255),
    titulo          varchar(255) not null,
    descripcion     MEDIUMTEXT,
    fecha           date not null,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREING_KEY(usuarios_id) REFERNCES usuarios(id), /* Claves ajenas pertenencen a elementos de otra tabla */
    CONSTRAINT fk_entrada_categoria FOREING_KEY(categorias_id) REFERNCES categorias(id) ON DELETE CASCADE /* on delete quiere decir que 
    cuando la categoria de esta entrada se borre tambien se borre el registro con la que esta relacionada
    UPDATE CASCADE para actualizar automaicamente */
)ENGINE=InnoDB;


-- INSETAR FILAS CON CIERTAS COLUMNAS

INSERT INTO usuarios(email,password) VALUES ('admin2@mail.com', '1234') /* En caso de querer solo insertar estos campos*/