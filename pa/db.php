<?php
$mysql = mysqli_connect('localhost', 'root', 'password');

if (!$mysql) die('Error con MySQL');

$db = mysqli_select_db($mysql, "pa");

if (!$db) die('Error con la tabla');
