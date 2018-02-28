<?php
include_once('config.inc.php');
include_once('Database.php');
$platform = new db();

    $name = $_POST["name"];


$rows = $platform->create("NULL,'4',''.$name.'','+792812312311','informacia'")

?>