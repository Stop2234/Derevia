<?php
require_once('db.php');

$name = $_POST['login'];
$password = $_POST['pass']; // Исправлено с 'password' на 'pass'
$repeat_password = $_POST['repeatpass']; // Исправлено с 'repeat_password' на 'repeatpass'
$email = $_POST['email'];

$SQL = "INSERT INTO register (login, password, repeat_password, email) VALUES ('$name', '$password', '$repeat_password', '$email')";
$result = pg_query($dbconn, $SQL);

var_dump($result);

pg_close($dbconn);