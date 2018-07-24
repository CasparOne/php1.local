<?php
/** стартуем сессию
 * ЕСЛИ пользователь авторизирован - перенаправляем на главную страницу
 * ИНАЧЕ остаемся на странице авторизации*/
session_start();
require __DIR__ . '/classes/Users.php';
$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';
$users = new Users();
if (!empty($_SESSION['usr'])) {
    header('Location:http://php1.local/index.php');
}
if ($users->isUserExists($login)){
    if ($users->checkPass($login, $password)) {
        $_SESSION['usr'] = $login;
        header('Location:http://php1.local/index.php');
    }
}
include __DIR__ . '/templates/login.php';

