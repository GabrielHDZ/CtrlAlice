<?php

use Gabriel\ServerTienda\models\User;
use Gabriel\ServerTienda\views\components\Nav;

print_r($_POST);

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



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-git scale=1.0">
    <title>Users</title>
</head>

<body>
    <?php include 'Nav.php' ?>
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
<script>
    console.log('hello wold');
</script>

//example script
<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form> -->

<!-- <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = htmlspecialchars($_REQUEST['fname']);
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?> -->

</html>