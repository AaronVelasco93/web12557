-- SE ELIMINAR LA DB SI ESQUE YA EXISTE

/*
dbName: epiz_33746197_dbweb1
dbUser:epiz_33746197
dbPass:.PwDHLbyyEJQT/7
dbHost:sql313.epizy.com
dbPuerto:3306
*/


drop schema if exists `DBweb1`;

-- creacion de la base de datos
create schema if not exists `DBweb1` default character set utf8 collate utf8_sapanish_ci;

-- selecionamos la DB para trabajar sobre ella
USE `DBweb1`;

-- Crear un tabla

CREATE TABLE `persona`(
`numero` int(5) not null,
`nombre_usuario` text not null,
`carrera` text not null,
`no_cuenta` int (10) not null,
`direccion` text not null,
`telefono` varchar (8) not null,
`email` text not null,
`password` varchar (8) not null,
`fecha_registro` datetime not null default current_timestamp,
`permisos` int (11) not null default '2'
) engine=Innodb default charset=utf8;

alter table `persona`
change column `numero` `numero` int(10) not null auto_increment,
add primary key(`numero`);




