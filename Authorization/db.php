<?php

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "registeruser";

// Соединение с базой данных
$dbconn = pg_connect("host=$servername dbname=$dbname user=$username password=$password");

// Проверка соединения
if (!$dbconn) {
    die("Connection failed: " . pg_last_error());
}

// Закрываем соединение с базой данных
pg_close($dbconn);
