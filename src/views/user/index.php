<?php

use Gabriel\ServerTienda\models\User;

$form = true;
if (isset($_GET['view'])) {
    if (isset($_GET['option'])) {
        //$option equals 'update' or 'create' no more
        $option = $_GET['option'];
        if ($option == 'create') {
            $form = true;
        } elseif ($option == 'update') {
            $form = false;
        }
    }
} else {
    header('Location:?view=home');
}


if (count($_POST) > 0) {
    $firstname = $_POST['txt_first'];
    $lastname = $_POST['txt_last'];
    $age = $_POST['txt_age'];
    $description = $_POST['txt_desc'];
    $status = $_POST['txt_state'];
    //desicion if option is create or update
    if (isset($_GET['view'])) {
        if (isset($_GET['option'])) {
            //$option equals 'update' or 'create' no more
            $option = $_GET['option'];
            if ($option == 'create') {
                $form = true;
            } elseif ($option == 'update') {
                $form = false;
            }
        }
    } else {
        header('Location:?view=home');
    }

    $person = new User($firstname, $lastname, $age, $description, $status);
    $person->save();
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
    <form action="?view=create_user" method="POST">
        <span>name</span>
        <input type="text" name="txt_first">
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

</html>