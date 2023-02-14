<?php

namespace Gabriel\ServerTienda\models;

use Gabriel\ServerTienda\lib\Database;
use PDO;

class User extends Database
{
    /* Declaring the properties of the class. */
    private string $first_name;
    private string $last_name;
    private int $age;
    private string $character_person;
    private int $stateAc;
    /**
     * The function __construct() is a constructor function that is used to initialize the object's
     * properties
     * 
     * @param string first_name The first name of the person
     * @param string last_name The last name of the person
     * @param int age The age of the person
     * @param string character_person 
     * @param int stateAc 1 =&gt; active, 0 =&gt; inactive
     */
    public function __construct(string $first_name, string $last_name, int $age, string $character_person, int $stateAc)
    {
        parent::__construct();
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->character_person = $character_person;
        $this->stateAc = $stateAc;
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
    public function update()
    {
        $query = $this->connect()->prepare("UPDATE paciente SET first_name=:first_name, last_name=:last_name, age=:age, character_person=:character_person, stateAc=:stateAc WHERE id=:id");
    }
}
