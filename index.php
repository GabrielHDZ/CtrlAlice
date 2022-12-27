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
    <table>
        <thead>routes</thead>

        <tr>
            <th>action</th>
            <th>route</th>
            <th>type access</th>
        </tr>
        <tr>
            <td>login to form acces</td>
            <td>/login</td>
            <td>REST</td>
        </tr>
        <tr>
            <td>create account</td>
            <td>/create</td>
            <td>REST</td>
        </tr>
    </table>

    <form id="form">
        <label>username</label>
        <input type="text" id="" placeholder="Username">

        <label>password</label>
        <input type="password" name="pass">

        <input type="submit" value="access">

    </form>
    <script>
        /* et connectdb = (e) => {
                    e.preventDefault();
                    alert('second');
                }; */
    </script>
</body>

</html>