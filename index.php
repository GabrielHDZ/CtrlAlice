<?php

echo 'welcome';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="/route.php" method="post" name="form1" onsubmit="return validate()">
        <label>username</label>
        <input type="text" name="username" placeholder="Username" require>

        <label>password</label>
        <input type="password" name="pass" placeholder="password" require>

        <input type="submit" value="Send">

    </form>
    <script>
        function validate() {


        }
    </script>
</body>

</html>