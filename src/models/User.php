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
    private bool $stateAc;

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
    public function save(): void
        {

        $query = $this->connect();

        $query
            ->prepare("INSERT INTO paciente(id,first_name,last_name,age,character_person,stateAc) VALUES(null,:first_name,:last_name,:age,:character_person,:stateAc)")
            ->execute([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'age' => $this->age,
                'character_person' => $this->character_person,
                'stateAc' => $this->stateAc,
            ]);
        $this->desconn();

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

    /**
     * It gets all the data from the database and returns it as an array
     * 
     * @return array An array of objects.
     */
    public static function get_data_all_pacientes(): array
        {
        $pacientes = [];
        $db = new Database();
        $query = $db->connect()->query("SELECT * FROM paciente LIMIT 0, 10");
        while ($r = $query->fetch(PDO::FETCH_ASSOC)) {
            $user = User::createFromArray($r);
            array_push($pacientes, $user);
            }
        $db->desconn();
        return $pacientes;
        }
    /**
     * It gets the data from the database and returns it as an object
     * 
     * @param id The id of the user you want to get the data from.
     * 
     * @return An object of type User.
     */
    public static function get_data_paciente(int $id): User
        {
        $db = new Database();
        $query = $db->connect()->prepare("SELECT * FROM paciente WHERE id=:ide");
        $query->execute(['ide' => $id]);
        $usuario = User::createFromArray($query->fetch(PDO::FETCH_ASSOC));
        return $usuario;
        }
    /**
     * It takes an array of data and returns a new User object
     * 
     * @param arr array
     * 
     * @return User an object of type User.
     */
    public static function createFromArray(array $arr): User
        {
        $usuario = new User($arr['first_name'], $arr['last_name'], $arr['age'], $arr['character_person'], $arr['stateAc']);
        /****
         * example asign data in the method set
         */
        $usuario->set_id($arr['id']);
        return $usuario;
        }

    //AGREGAR TODOS LOS SETTERS Y GETTERS DE LAS PROPIEDADES RESTANTES
    /**
     * > This function sets the value of the `id` property
     * 
     * @param int id The id of the user.
     */
    public function set_id(int $id)
        {
        $this->id = $id;
        }
    /**
     * > This function returns the value of the `id` property
     * 
     * @return int The id of the object.
     */
    public function get_id(): int
        {
        return $this->id;
        }


    /**
     * @return 
     */
    public function getFirst_name(): string
        {
        return $this->first_name;
        }

    /**
     * @param  $first_name 
     * @return self
     */
    public function setFirst_name(string $first_name): self
        {
        $this->first_name = $first_name;
        return $this;
        }

    /**
     * @return 
     */
    public function getLast_name(): string
        {
        return $this->last_name;
        }

    /**
     * @param  $last_name 
     * @return self
     */
    public function setLast_name(string $last_name): self
        {
        $this->last_name = $last_name;
        return $this;
        }

    /**
     * @return 
     */
    public function getAge(): int
        {
        return $this->age;
        }

    /**
     * @param  $age 
     * @return self
     */
    public function setAge(int $age): self
        {
        $this->age = $age;
        return $this;
        }

    /**
     * @return 
     */
    public function getCharacter_person(): string
        {
        return $this->character_person;
        }

    /**
     * @param  $character_person 
     * @return self
     */
    public function setCharacter_person(string $character_person): self
        {
        $this->character_person = $character_person;
        return $this;
        }

    /**
     * @return 
     */
    public function getStateAc(): bool
        {
        return $this->stateAc;
        }

    /**
     * @param  $stateAc 
     * @return self
     */
    public function setStateAc(bool $stateAc): self
        {
        $this->stateAc = $stateAc;
        return $this;
        }
    }