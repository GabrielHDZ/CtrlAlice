--POO--
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "glucosaday");

/* get the name of the current default database */
$result = $mysqli->query("SELECT DATABASE()");
$row = $result->fetch_row();
printf("Defaultdatabass %s.\n", $row[0]);

/* change default database to "world" */
$mysqli->select_db("glucosaday");

/* get the name of the current default database */
$result = $mysqli->query("SELECT DATABASE()");
$row = $result->fetch_row();
printf("Defaultdatabaseis %s.\n", $row[0]);
?>

--PROCEDUAL--
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "", "glucosaday");

/* get the name of the current default database */
$result = mysqli_query($link, "SELECT DATABASE()");
$row = mysqli_fetch_row($result);
printf("Default database is %s.\n", $row[0]);

/* change default database to "world" */
mysqli_select_db($link, "glucosaday");

/* get the name of the current default database */
$result = mysqli_query($link, "SELECT DATABASE()");
$row = mysqli_fetch_row($result);
printf("Default database is %s.\n", $row[0]);
