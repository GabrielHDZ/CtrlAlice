<?php

use Gabriel\ServerTienda\models\User;

$pacientes = User::get_data_all_pacientes();
?>

<?php include('src/views/components/nav.php') ?>
<h1>aquii se va a desarrolar un dashboard, con contenido dinamico para visualizar los graficos,
    correspondientes a citas del dia, a eevntos de la semana y demas propiedades del sistema.
</h1>
</body>

</html>