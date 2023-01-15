<?php
namespace Gabriel\ServerTienda\helpers

class Database{

    // Datos de conexión a la base de datos
    private string $host;
    private string $user;
    private string $password;
    private string $dbname;
    
    public function __constructor(){
        $this->host='localhost';
        $this->user='root';
        $this->password='';
        $this->dbname='glucosaday';
    }
    // Crea la conexión
    //$conn = new mysqli($host, $user, $password, $dbname);
    $conn = new mysqli($host, $user, $password, $dbname);
    
    // Verifica si la conexión fue exitosa
    // if ($conn->connect_error) {
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    echo "Conexión exitosa";
    
    //buscar base
    $response = mysqli_select_db($conn, 'glucosaday');
    echo $response;
    
    // Cierra la conexión
    mysqli_close($conn);
}
