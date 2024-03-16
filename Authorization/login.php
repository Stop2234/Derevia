<?php

// Подключаем файл для работы с базой данных
require_once('db.php');

// Получаем значения логина и пароля из POST-запроса
$login = pg_escape_string($_POST["login"]);
$password = pg_escape_string($_POST["password"]);

// Проверяем, заполнены ли оба поля
if (empty($login) || empty($password)) {
    echo "Заполните все поля";
} else {
    // Формируем SQL-запрос для выборки пользователя из базы данных
    // Формируем SQL-запрос для выборки пользователя из базы данных
    $SQL = "SELECT * FROM USERS WHERE login = '$login' AND (password = '$password' OR password IS NULL)";

    var_dump($result);
    // Выполняем запрос
    $result = pg_query($dbconn, $SQL);

    // Проверяем, есть ли результаты запроса и нет ли ошибок
    if ($result && pg_num_rows($result) > 0) {
        // Если пользователь найден, выводим приветствие
        while ($row = pg_fetch_assoc($result)) {
            echo "Добро пожаловать " . htmlspecialchars($row['login']);
        }
    } else {
        // Если пользователь не найден или есть ошибка, выводим сообщение об ошибке
        echo "Нет такого пользователя";
    }
}
?>
