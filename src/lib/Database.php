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
    protected PDO|null $pdo;

    /**
     * The above function is a constructor function that sets the host, user, password, and dbname
     * variables to the values of 'localhost', 'root', '', and 'ctrl_alice' respectively.
     */
    protected function __construct()
        {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbname = 'ctrl_alice';
        }


    /**
     * This is a PHP function that connects to a MySQL database using PDO and returns a PDO object.
     * 
     * @return  __ the object.
     */
    protected function connect(): PDO
        {
        try {
            $connection = "mysql:host={$this->host};dbname={$this->dbname}";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                pdo::ATTR_EMULATE_PREPARES => false
            ];

            $this->pdo = new PDO($connection, $this->user, $this->password, $options);
            return $this->pdo;
            } catch (PDOException $th) {
            throw $th;
            }
        }


    /**
     * This is a PHP function that sets the PDO object to null, effectively disconnecting from the
     * database.
     */
    protected function desconn(): void
        {
        $this->pdo = null;
        }
    }
?>