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
    <header>
        <section>
            <img src="" alt="svg logo">
            <h1>CtrlAlice</h1>
        </section>
        <nav>
            <ul>
                <li><a href="#" target="_parent" rel="noopener noreferrer">Pacientes</a></li>
                <li><a href="#" target="_parent" rel="noopener noreferrer">Tests</a></li>
                <li><a href="#" target="_parent" rel="noopener noreferrer">Ajustes</a></li>
            </ul>
        </nav>
    </header>

    <?php foreach ($pacientes as $paciente) { ?>
        <a href=""><span><?php echo $paciente->get_first_name(); ?></span></a>
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