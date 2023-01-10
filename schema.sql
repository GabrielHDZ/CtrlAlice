create database if not exists ctrl_alice;
use ctrl_alice;
drop table if exists paciente,test_oxigeno;

CREATE TABLE IF NOT EXISTS paciente(
    id INT(11) NOT NULL AUTO_INCREMENT, 
    fist_name CHAR(40) NOT NULL DEFAULT '',
    last_name char(40) NOT NULL,
    age int(3) NOT NULL,
    character_person VARCHAR(255)NOT NULL DEFAULT'',
    status int(1) NOT NULL DEFAULT 0,
    text mediumtext NOT NULL,
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
    INDEX (id_paciente),
    FOREIGN KEY (id_paciente)
    REFERENCES paciente(id)
    ON UPDATE CASCADE ON DELETE RESTRICT
    
 )
 /***
    using in insert column fecha the function now()
 */