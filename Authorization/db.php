<?php

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "registeruser";


$dbconn = pg_connect("host=$servername dbname=$dbname user=$username password=$password");


if (!$dbconn) {
    die("Connection failed: " . pg_last_error());
}


pg_close($dbconn);
