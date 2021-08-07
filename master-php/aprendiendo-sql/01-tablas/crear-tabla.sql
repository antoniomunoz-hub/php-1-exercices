/*
int (nº caracteres) ENTERO
integer (nªcaracteres) ENTERO
varchar (nªcaracteres) STRING/ ALFANUMERICO
char (nªcaracteres) STRING / ALFANUMERICO
float (nªcifras) nª decimales DECIMAL/FLOTANTE
date, time, timestamp

//Strings mas grandes
 
text 65535 caracteres
mediumText 16 millones
longText 4 billones de caracteres

*/

CREATE TABLE usuarios (
    id  int(11), auto_increment not null,
    nombre varchar(25), not null,
    apellidos varchar (70), null,
    email varchar(70), not null,
    passwor varchar(70),
    CONSTRAINT pk_usuarioa PRIMARY KEY(id)
);