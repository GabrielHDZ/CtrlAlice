DROP DATABASE IF EXISTS ctrl_alice;
CREATE DATABASE IF NOT EXISTS ctrl_alice;
USE ctrl_alice;
DROP TABLE IF EXISTS paciente,test_oxigeno;

CREATE TABLE IF NOT EXISTS paciente(
    id INT(11) NOT NULL AUTO_INCREMENT, 
    first_name CHAR(40) NOT NULL DEFAULT '',
    last_name char(40) NOT NULL,
    age int(3) NOT NULL,
    character_person VARCHAR(255)NOT NULL DEFAULT'',
    stateAc int(1) NOT NULL DEFAULT 0,
/*     text mediumtext NOT NULL, */
    PRIMARY KEY (id)
/*     INDEX(fist_name,last_name,age)
 */)ENGINE=InnoDB DEFAULT CHARSET=latin1;
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
 )ENGINE=InnoDB DEFAULT CHARSET=latin1;


 CREATE TABLE IF NOT EXISTS test_glucosa(
    id INT NOT NULL,
    id_paciente INT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    percent INT(3) NOT NULL,
    PRIMARY KEY(id),
    INDEX (id_paciente),
    FOREIGN KEY (id_paciente)
    REFERENCES paciente(id)
    ON UPDATE CASCADE ON DELETE RESTRICT
 )ENGINE=InnoDB DEFAULT CHARSET=latin1;
 /***
    using in insert column fecha the function now()
 */