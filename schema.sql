create database if not exists ctrl_alice;
use ctrl_alice;
drop table if exists paciente,test_oxigeno;

create table if not exists paciente(
    id int not null, 
    fist_name char(40) not null default '',
    last_name char(40) not null,
    age int(3) not null,
    character_person varchar(255) not null default '',
    text mediumtext not null,
    primary key (id)
    index name(fist_name,last_name,age)
)ENGINNE=InnoDB DEFAULT CHARSET=latin1;
/***
    example using index name in sentence sql
    select * from paciente where c1
*/
 CREATE TABLE IF NOT EXISTS test_oxigeno(
    id INT NOT NULL,
    id_paciente INT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    spo INT(3) NOT NULL,
    pr INT(3) NOT NULL,
    PRIMARY KEY(id),
    for
 )