<?php
if (isset($_GET['view'])) {
    $view = $_GET['view'];
    require 'src/views/' . $view . '/index.php';
} else {
    require 'src/views/home/index.php';
}
