<?php

require_once('Authorization/db.php');


$name = $_POST['name'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];
$email = $_POST['email'];


$SQL = "INSERT INTO register (name, password, repeat_password, email) VALUES ($name, $password, $repeat_password, $email)";



?>
