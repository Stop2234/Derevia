<?php
require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];
$email = $_POST['email'];


if (empty($login) || empty($password) || empty($repeat_password) || empty($email)) {
    var_dump($login, $password, $repeat_password, $email);

    echo "Заполните все поля!";
} else {
    if ($password != $repeat_password) {
        echo "Пароли не совпадают!";
    } else {
        $SQL = "INSERT INTO register (login, password, repeat_password, email) VALUES ('$login', '$password', '$repeat_password', '$email')";
        $result = pg_query($dbconn, $SQL);
        if ($result === TRUE) {
            echo "Успешная регистрация!";
        } else {
            echo "Ошибка!";
        }
        pg_close($dbconn);
    }
}
?>
