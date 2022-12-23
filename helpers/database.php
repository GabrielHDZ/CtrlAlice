<?php
// Datos de conexión a la base de datos
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'glucosaday';

// Crea la conexión
//$conn = new mysqli($host, $user, $password, $dbname);
$conn = mysqli_connect($host, $user, $password, $dbname);

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
?>



<?php
$db = new PDO("mysql:host=localhost;dbname=my_guitar_shop1", "root", "");
// set the PDO error mode to exception
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if (isset($_POST['submit'])) { //check if form was submitted

		try{
            $stmt = $db->prepare('INSERT INTO guitar (manufacturer, model, year) VALUES (:manufacturer, :model, :year)');
            $stmt->execute(array(':manufacturer' => $_POST['manufacturer'], ':model' => $_POST['model'], ':year' => $_POST['year']));

            echo '<script type="text/javascript">'; 
            echo 'alert("Guitar Added");'; 
            echo 'window.location.href = "index.php";';  
        }
        catch{
            echo 'error';
        }
    }
?> 
