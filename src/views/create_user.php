<?php

use Gabriel\ServerTienda\models\User;

$person = new User('Alicia', 'Hernandez', 67, 'she is a my mother and is the best mom for ever', 1);
$person->save();
