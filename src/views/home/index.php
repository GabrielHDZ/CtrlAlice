<?php

use Gabriel\ServerTienda\models\User;

$pacientes = User::get_data_all_pacientes();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php include('src/views/components/nav.php') ?>
    <?php foreach ($pacientes as $paciente) { ?>
        <a href="?view=user&option=update&id=<?php echo $paciente->get_id(); ?>"><span><?php echo $paciente->get_first_name(); ?></span></a>
        <br>
    <?php } ?>
</body>
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        margin: 0;
        border: 0;
        padding: 0;
    }

    a {
        text-decoration: none;
    }

    ul {
        list-style-type: none;
    }

    header {
        display: flex;
        flex-direction: row;
        width: 100%;
        background-color: burlywood;
    }

    section {
        width: 30%;
    }

    nav {
        display: flex;
        flex-direction: column;
        width: 70%;
    }

    nav>ul {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        margin: 5px;
    }
</style>

</html>