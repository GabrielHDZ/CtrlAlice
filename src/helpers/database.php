<?php
// Datos de conexión a la base de datos
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'glucosaday';

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
