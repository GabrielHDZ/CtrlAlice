<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/views/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <script src="//unpkg.com/alpinejs" defer></script>
    <title>CtrlAlice</title>
    <style>
        /* STYLES FOR THE NAVBAR*/
        header#nav {
            display: flex;
            flex-direction: row;
            width: 100%;
            background-color: #5BC0BE;
        }

        header#nav section {
            width: 30%;
        }

        header#nav nav {
            display: flex;
            flex-direction: column;
            width: 70%;
        }

        header#nav nav>ul {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            margin: 5px;
        }
    </style>
</head>

<body>
    <header id="nav">
        <section>
            <img src='' alt='svg logo'>
            <h1><a href='?view=home'>CtrlAlice</a></h1>
        </section>
        <nav>
            <ul>
                <li><a href='?view=user' rel='noopener noreferrer'>Pacientes</a></li>
                <li><a href='#' target='_parent' rel='noopener noreferrer'>Tests</a></li>
                <li><a href='#' target='_parent' rel='noopener noreferrer'>Ajustes</a></li>
            </ul>
        </nav>
    </header>