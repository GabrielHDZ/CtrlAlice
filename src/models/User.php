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
    private int $stateAc;
    public function __construct(string $first_name, string $last_name, int $age, string $description_person, int $stateAc)
    {
        parent::__construct();
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->description_person = $description_person;
        $this->stateAc = $stateAc;
    }
    public function save()
    {
        $query = $this->connect()->prepare("INSERT INTO paciente(id,first_name,last_name,age,character_person,stateAc) VALUES(null,:first_name,:last_name,:age,:description_person,:stateAc)");
        $query->execute([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'age' => $this->age,
            'description_person' => $this->description_person,
            'stateAc' => $this->stateAc
        ]);
    }
}
