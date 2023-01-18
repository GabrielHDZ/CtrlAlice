<?php

namespace Gabriel\ServerTienda\models;

use Gabriel\ServerTienda\helpers\Database;
use PDO;

class Oxigeno extends Database
{
    private string $uuid;
    private string $id_paciente;
    private int $spo;
    private int $pr;

    //constructor
    public function __construct(string $id_paciente, int $spo, int $pr)
    {
        parent::__construct();
        $this->uuid = uniqid();
        $this->id_paciente = $id_paciente;
        $this->spo = $spo;
        $this->pr = $pr;
    }
    public function save()
    {
        $query = $this->connect()->prepare("INSERT INTO test_oxigeno(id,id_paciente,fecha,spo,pr) VALUES(:uuid,:id_paciente,NOW(),:spo,:pr)");
        $query->execute([
            'uuid' => $this->uuid,
            'id_paciente' => $this->id_paciente,
            'spo' => $this->spo,
            'pr' => $this->pr
        ]);
    }
    public function update()
    {
        $query = $this->connect()->prepare("UPDATE test_oxigeno SET id_paciente=:id_paciente,fecha=NOW(),spo=:spo,pr=:pr WHERE id=:uuid");
        $query->execute([
            'uuid' => $this->uuid,
            'id_paciente' => $this->id_paciente,
            'spo' => $this->spo,
            'pr' => $this->pr
        ]);
    }

    //get static
    public static function get($uuid)
    {
        $db = new Database();
        $query = $db->connect()->prepare("SELECT * FROM test_oxigeno WHERE id=:uuid");
        $query->execute(['uuid' => $uuid]);
        $oxigeno = Oxigeno::createFromArray($query->fetch(PDO::FETCH_ASSOC));
    }
    public static function createFromArray($arr): Oxigeno
    {
        $oxigeno = new Oxigeno($arr['id_paciente'], $arr['spo'], $arr['pr']);
        $oxigeno->setUUID($arr['id']);

        return $oxigeno;
    }



    public function getUUID()
    {
        return $this->uuid;
    }
    public function setUUID($value)
    {
        $this->uuid = $value;
    }

    public function getIDPaciente()
    {
        return $this->id_paciente;
    }
    public function setIDPaciente($value)
    {
        $this->id_paciente = $value;
    }

    public function getSPO()
    {
        return $this->spo;
    }
    public function setSPO($value)
    {
        $this->spo = $value;
    }

    public function getPR()
    {
        return $this->pr;
    }
    public function setPR($value)
    {
        $this->pr = $value;
    }
}
