<?php

namespace Gabriel\ServerTienda\model;

use Gabriel\ServerTienda\helpers\Database;

class Oxigeno extends Database
{
    private string $uuid;
    private string $id_paciente;
    private int $spo;
    private int $pr;

    //constructor
    public function __construct(string $id_paciente, int $spo,int $pr)
    {
        parent::__construct();
        $this->uuid = uniqid();
        $this->id_paciente = $id_paciente;
        $this->spo = $spo;
        $this->pr= $pr;
    }
    public function save(){
        $query=$this->connect()->prepare("INSERT INTO test_oxigeno(id,id_paciente,fecha,spo,pr) VALUES(:uuid,:id_paciente,NOW(),:spo,:pr)");
        $query->execute([
            'uuid'=>$this->uuid,
            'id_paciente'=>$this->id_paciente,
            'spo'=>$this->spo,
            'pr'=>$this->pr
        ]);
    }
    public function getUUID(){
        return $this->uuid;
    }
    public function setUUID($value){
        $this->uuid=$value;
    }
    public function getpaciente(){
        return $this->id_paciente;
    }
    public function setpaciente($value){
        $this->id_paciente=$value;
    }
    public function getspo(){
        return $this->spo;
    }
    public function setspo($value){
        $this->spo=$value;
    }
    public function getpr(){
        return $this->pr;
    }
    public function setpr($value){
        $this->pr=$value;
    }
}
