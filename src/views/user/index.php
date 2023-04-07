<?php
/*
use Gabriel\ServerTienda\models\User;


$form = true;
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['view'])) {
        if (isset($_GET['option'])) {
            //$option equals 'update' or 'create' no more
            $option = $_GET['option'];
            if ($option == 'create') {
                $form = true;
            } elseif ($option == 'update') {
                $form = false;
                $id = $_GET['id'];
                $paciente = User::get_data_paciente($id);
            }
        }
    } else {
        header('Location:?view=home');
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (count($_POST) > 0) {
        $firstname = $_POST['txt_first'];
        $lastname = $_POST['txt_last'];
        $age = $_POST['txt_age'];
        $description = $_POST['txt_desc'];
        $status = $_POST['txt_state'];
        $id = $_POST['id'];

        //desicion if option is create or update
        if (isset($_GET['option'])) {
            //$option equals 'update' or 'create' no more
            $option = $_GET['option'];
            if ($option == 'create') {
                $person = new User($firstname, $lastname, $age, $description, $status);
                $person->save();
            } elseif ($option == 'update') {
                $person = new User($firstname, $lastname, $age, $description, $status, $id);
                $person->update();
            }
        } else {
            header('Location:?view=home');
        }
    }
}

 */


/* 
?>

<?php include('src/views/components/nav.php') ?>

<form method="POST" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
    <span>name</span>
    <input type="text" name="txt_first" value="<?php echo ($form ? '' : $paciente->get_first_name()); ?>">
    <br>
    <span>last name</span>
    <input type="text" name="txt_last">
    <br>
    <span>age in number</span>
    <input type="number" name="txt_age">
    <br>
    <span>description for the person</span>
    <input type="text" name="txt_desc">
    <br>
    <span>state account</span>
    <input type="number" name="txt_state">

    <?php echo ($form ? "<input type='submit' value='Create'>" : "<input type='submit' value='Update'>"); ?>

</form>

</body>

</html> */


use Gabriel\ServerTienda\models\User;

$pacientes = User::get_data_all_pacientes();
?>

<?php include('src/views/components/nav.php') ?>
<section id="container_users">
    <nav>
        <ul>
            <li><Button>Nuevo paciente</Button></li>
            <li><label for="">Buscar paciente</label><input type="search" name="search" id="search">
                <details>
                    <summary>Aplicar filtros</summary>
                    <ul>
                        <li>Estado</li>
                        <li>Alfabeticamente</li>

                    </ul>
                </details><button>Buscar</button>
            </li>
        </ul>
        <div x-data="{ count: 0 }">
            <button x-on:click="count++">Increment</button>

            <span x-text="count"></span>
        </div>
        <div x-data="{modal=false}">
            <button x-on:click="modal=true">openmodal</button>
            <div id="modal" x-show="modal=true">show or not</div>
        </div>

    </nav>
    <?php foreach ($pacientes as $paciente) { ?>

        <article>
            <header>
                <h1><span> num.<?php echo $paciente->get_id() ?></span> <?php echo $paciente->get_first_name() ?></h1>
            </header>
            <section>
                <h2></h2>
            </section>
            <footer>
                <a href="?view=user&option=update&id=<?php echo $paciente->get_id(); ?>">
                    <span>More info</span>
                </a>
            </footer>
        </article>
    <?php } ?>
</section>
<style>
    div#modal {
        background-color: red;
    }
</style>
</body>

</html>