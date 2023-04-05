<?php

use Gabriel\ServerTienda\models\User;

$pacientes = User::get_data_all_pacientes();
?>

<?php include('src/views/components/nav.php') ?>
<?php foreach ($pacientes as $paciente) { ?>
    <a href="?view=user&option=update&id=<?php echo $paciente->get_id(); ?>">
        <span><?php echo $paciente->get_first_name(); ?></span>
    </a>
    <br>
<?php } ?>
</body>

</html>