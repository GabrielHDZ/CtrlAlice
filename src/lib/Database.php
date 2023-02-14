<?php

/* It creates a namespace called `Gabriel\ServerTienda\lib`. */

namespace Gabriel\ServerTienda\lib;

/* Importing the PDO and PDOException classes from the PDO and PDOException namespaces respectively. */

use PDO;
use PDOException;

/* It creates a connection to the database using the PDO class. */

class Database
{
    /* Declaring the variables that will be used to connect to the database. */
    private string $host;
    private string $user;
    private string $password;
    private string $dbname;

    /**
     * The above function is a constructor function that sets the host, user, password, and dbname
     * variables to the values of 'localhost', 'root', '', and 'ctrl_alice' respectively.
     */
    public function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbname = 'ctrl_alice';
    }

    /**
     * It creates a connection to the database using the PDO class.
     * 
     * @return The connection to the database.
     */
    public function connect()
    {
        try {
            $connection = "mysql:host={$this->host};dbname={$this->dbname}";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                pdo::ATTR_EMULATE_PREPARES => false
            ];

            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;
        } catch (PDOException $th) {
            throw $th;
        }
    }
}
