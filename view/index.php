<?php
require __DIR__ . '/../classes/View.php';

$view = new View();
$header = __DIR__ . '/../templates/header.php';
$template = __DIR__ . '/../templates/index.php';
if (isset($_SESSION['usr']) && '' == $_SESSION['usr']) {
    header('Location:/index.php?id=login');
}
echo $view->render($template);