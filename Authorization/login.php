<?php

// Подключаем файл для работы с базой данных
require_once('db.php');

// Получаем значения логина и пароля из POST-запроса
$login = pg_escape_string($_POST["login"]);
$password = pg_escape_string($_POST["password"]);


if (empty($login) || empty($password)) {
    echo "Заполните все поля";
} else {
    $SQL = "SELECT * FROM registeruser.public.register WHERE login = '$login' AND (password = '$password' OR password IS NULL)";

    $result = pg_query($dbconn, $SQL);


    if ($result && pg_num_rows($result) > 0) {

        while ($row = pg_fetch_assoc($result)) {
            echo "Добро пожаловать " . htmlspecialchars($row['login']);
        }
    } else {
        echo "Нет такого пользователя";
    }
}
?>
