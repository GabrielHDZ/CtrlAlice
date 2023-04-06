<?php

use Gabriel\ServerTienda\models\User;

$pacientes = User::get_data_all_pacientes();
?>

<?php include('src/views/components/nav.php') ?>
<section id="container_users">
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
</body>

</html>