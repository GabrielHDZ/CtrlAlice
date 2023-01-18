<?php

namespace Gabriel\ServerTienda\models;

use Gabriel\ServerTienda\helpers\Database;
use PDO;

class User extends Database
{
    private string $first_name;
    private string $last_name;
    private int $age;
    private string $description_person;
    private bool $status;
    public function __construct(string $first_name, string $last_name, int $age, string $description_person, bool $status)
    {
        parent::__construct();
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->description_person = $description_person;
        $this->status = $status;
    }
}
