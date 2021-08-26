-- Renombrar una tabla

ALTER TABLE usuarios RENAME TO usuarios_1;

-- Cambiar nombre de una columna

ALTER TABLE usuarios_1 CHANGE apellidos apellido varchar(10) null;

-- Cambiar columna sin cambiar nombre

ALTER TABLE usuarios_1 MODIFY apellido char(50) not null;

-- Añadir columna 

ALTER TABLE usuarios_1 ADD website varchar(100) null;

-- Añadir restriccion a columna

ALTER TABLE usuarios_1 ADD CONSTRAINT uq_email UNIQUE(email)

-- Borrar tabla 

ALTER TABLE usuarios_1 DROP website;