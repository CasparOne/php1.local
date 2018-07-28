<?php
require __DIR__ . '/../classes/View.php';
require __DIR__ . '/../classes/Users.php';

$template = __DIR__ . '/../templates/login.php';
$user = new Users();
$view = new View();
$login = trim($_POST['login']);
$password = trim($_POST['password']);

if (isset($user->getUserList()[$user->getCurUser()])) {
    header('Location:/index.php');
}

if ($user->isUsrExists($login)){
    if ($user->checkLogPass($login, $password)) {
        session_start();
        $_SESSION['usr'] = $login;
        header('Location:/index.php');
    }
}
echo $view->render($template);

