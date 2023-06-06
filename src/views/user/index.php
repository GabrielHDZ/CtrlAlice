<?php

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
                </details><button class="button is-primary">Buscar</button>
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
                    <h1><span>Num.
                            <?php echo $paciente->get_id() ?>
                        </span>
                        <?php echo $paciente->getFirst_name() ?>
                    </h1>
                </header>
                <section>
                    <p>aqui va una pequeña informacion respecto al paciente, mas informacion darle al boton de "mas
                        informacion"
                    </p>
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