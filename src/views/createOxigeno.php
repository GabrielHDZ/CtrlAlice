<?php
use Gabriel\ServerTienda\model\Oxigeno;

if(count($_POST)>0){
    $paciente=isset($_POST['id_paciente']) ?? '';
    $spo=isset($_POST['spo']) ?? '';
    $pr=isset($_POST['pr']) ?? '';

    $oxigeno=new Oxigeno($paciente,$spo,$pr);
    $oxigeno->save();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new register Oxigenacion</title>
</head>

<body>
    <p>add a new</p>
    <form action="?view=createOxigeno" method="POST">
        <input type="text" name="id_paciente" placeholder="id del paciente">
        <input type="number" name="spo" placeholder="spo del paciente">
        <input type="number" name="pr" placeholder="pr del paciente">

        <input type="submit" value="add">
    </form>

</body>

</html>