<?php

namespace Gabriel\ServerTienda\models;

use Gabriel\ServerTienda\lib\Database;
use PDO;

class User extends Database
{
    /* Declaring the properties of the class. */
    private int $id;
    private string $first_name;
    private string $last_name;
    private int $age;
    private string $character_person;
    private int $stateAc;

    /**
     * The above function is a constructor function that takes in a string, a string, an integer, a
     * string, an integer, and an integer as parameters and assigns them to the class properties
     * 
     * @param string first_name The first name of the person
     * @param string last_name
     * @param int age
     * @param string character_person 
     * @param int stateAc 1 = active, 0 = inactive
     * @param int id
     */
    public function __construct(string $first_name, string $last_name, int $age, string $character_person, int $stateAc, int $id = 0)
    {
        parent::__construct();
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->character_person = $character_person;
        $this->stateAc = $stateAc;
        $this->id = $id;
    }
    /**
     * It takes the values of the variables ->first_name, ->last_name, ->age,
     * ->character_person, ->stateAc and inserts them into the database.
     */
    public function save()
    {
        $query = $this->connect()->prepare("INSERT INTO paciente(id,first_name,last_name,age,character_person,stateAc) VALUES(null,:first_name,:last_name,:age,:character_person,:stateAc)");
        $query->execute([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'age' => $this->age,
            'character_person' => $this->character_person,
            'stateAc' => $this->stateAc
        ]);
    }
    /**
     * It updates the database with the new values of the object
     */
    public function update()
    {
        $query = $this->connect()->prepare("UPDATE paciente SET first_name=:first_name, last_name=:last_name, age=:age, character_person=:character_person, stateAc=:stateAc WHERE id=:id");
        $query->execute([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'age' => $this->age,
            'character_person' => $this->character_person,
            'stateAc' => $this->stateAc,
            'id' => $this->id
        ]);
    }
}
