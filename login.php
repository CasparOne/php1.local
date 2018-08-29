<?php
/** стартуем сессию
 * ЕСЛИ пользователь авторизирован - перенаправляем на главную страницу
 * ИНАЧЕ остаемся на странице авторизации*/
session_start();
include __DIR__ . '/functions.php';

if (isset($_POST['login']) && isset($_POST['password'])) {
    if (checkPassword($_POST['login'], $_POST['password'])) {
        $_SESSION['usr'] = $_POST['login'];
    }
}

if (null !== getCurrentUser()) {
    header('Location:/index.php');
} else {
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div align="center">
    <form action="/login.php" method="post">
        Login:<input name="login"><br><br>
        Password:<input name="password"><br><br>
        <button type="submit">Войти</button>
</form>
</div>
</body>
</html>
<?php }
?>