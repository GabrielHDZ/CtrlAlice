<?php

use Gabriel\ServerTienda\models\User;

if (count($_POST) > 0) {
    $firstname = isset($_POST['txt_first']) ?? '';
    $lastname = isset($_POST['txt_last']) ?? '';
    $age = isset($_POST['txt_age']) ?? '';
    $description = isset($_POST['txt_desc']) ?? '';
    $status = isset($_POST['txt_state']) ?? '';

    $person = new User($firstname, $lastname, $age, $description, $status);
    $person->save();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-git scale=1.0">
    <title>Users</title>
</head>

<body>
    <form action="?view=create_user" method="POST">
        <label for="txt_first">Nombre del paciente</label>
        <input type="text" name="txt_first">

        <label for="txt_last">Apellidos del paciente</label>
        <input type="text" name="txt_last">

        <label for="txt_age">edad del paciente</label>
        <input type="number" name="txt_age">

        <label for="txt_desc">Describe brevemente al paciente</label>
        <input type="text" name="txt_desc">

        <label for="txt_state">Persona Activa</label>
        <input type="number" name="txt_state">

        <input type="submit" value="guardar">

    </form>
</body>

</html>