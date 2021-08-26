-- Nos devolvera true o false en la columna en la que apellidos sea null

SELECT email, ISNULL(apellidos) FROM usuarios;

-- Comprobar si dos campos son iguales

SELECT email, STRCMP('HOLA','HOLA')

-- la version de mysql

SELECT VERSION () FROM usuarios;

-- nombre de usuario de la dbs

SELECT USER() FROM usuarios;