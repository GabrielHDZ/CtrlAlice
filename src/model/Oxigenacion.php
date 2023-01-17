<?php

namespace Gabriel\ServerTienda\model;

use Gabriel\ServerTienda\helpers\Database;

class Oxigeno extends Database
{
    private string $uuid;
    private string $title;
    private string $content;
    //constructor
    public function __construct(string $title, string $content)
    {
        parent::__construct();
        $this->uuid = uniqid();
        $this->title = $title;
        $this->content = $content;
    }
}
