<?php

use Gabriel\ServerTienda\models\User;

$pacientes = User::get_data_all_pacientes();

?>

<?php include('src/views/components/nav.php') ?>
<section>
    <h1>aqui se va a desarrolar un dashboard, con contenido dinamico para visualizar los graficos,
        correspondientes a citas del dia, a eventos de la semana y demas propiedades del sistema.
    </h1>

</section>
<?php include('src/views/components/footer.php') ?>