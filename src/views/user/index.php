<!-- SCRIPT -->
<?php
use Gabriel\ServerTienda\models\User;

$pacientes = User::get_data_all_pacientes();
?>

<!-- TEMPLATE -->
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
            <article class="card">
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4">
                                <?php echo $paciente->getFirst_name() ?>
                            </p>
                            <p class="subtitle is-6">
                                <?php echo $paciente->getLast_name() ?>
                            </p>
                        </div>
                    </div>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                        <a href="#">#css</a> <a href="#">#responsive</a>
                        <br>
                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                    </div>
                </div>
            </article>
        <?php } ?>
    </section>
</section>
<script src="src/views/user/functions.js"></script>
<?php include('src/views/components/footer.php') ?>