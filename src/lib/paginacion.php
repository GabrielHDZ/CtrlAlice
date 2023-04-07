<?php
class Paginator
{
    private $limit;
    private $page;
    private $total;

    private $connecion;
    private $query;
    public function __construct($conn, $query)
    {
        $this->connecion = $conn;
        $this->query = $query;
    }
}
