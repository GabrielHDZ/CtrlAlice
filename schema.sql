create database if not exists ctrl_alice;
use ctrl_alice;
create table if not exists paciente(
    id int not null, 
    nombre varchar(255) not null,
    edad int(3) not null,
    primary key (id)
);