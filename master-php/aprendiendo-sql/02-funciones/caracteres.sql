-- Convertir cadena de caracteres en mayusculas/minusculas

SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;

-- Para concatenar caractteres

SELECT CONCAT(nombre, '', apellido) AS 'CONVERSION' FROM usuarios; -- con conversion creamos otra colimna en la que metemos nombre y apellido

-- Longitud de la cadena

SELECT LENGTH(nombre) FROM usuarios;
