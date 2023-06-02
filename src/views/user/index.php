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
<section id="pacientes">
    <aside>
        <ul>
            <li><Button onclick="open_close_modal()">Nuevo paciente</Button></li>
            <li><label>Buscar paciente</label>
                <input type="search" name="search" id="search">
                <details>
                    <summary>Aplicar filtros</summary>
                    <ul>
                        <li>Estado</li>
                        <li>Alfabeticamente</li>

                    </ul>
                </details><button>Buscar</button>
            </li>
        </ul>

    </aside>
    <div id="modales">
        <div>
            <h1>Formulario para nuevos pacientes</h1>
            <button onclick="open_close_modal()">Close modal</button>
        </div>

    </div>
    <section>
        <?php foreach ($pacientes as $index => $paciente) { ?>
            <article>
                <header>
                    <h1><span> num.<?php echo $paciente->get_id() ?></span> <?php echo $paciente->get_first_name() ?></h1>
                </header>
                <section>
                    <p>aqui va una pequeña informacion respecto al paciente, mas informacion darle al boton de "mas informacion"</p>
                </section>
                <footer>
                    <a href="?view=user&option=update&id=<?php echo $paciente->get_id(); ?>">
                        <span>More info</span>
                    </a>
                </footer>
            </article>
        <?php } ?>
    </section>
</section>

<script src="src/views/user/functions.js"></script>
<?php include('src/views/components/nav.php') ?>