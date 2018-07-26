<?php
require __DIR__ . '/../classes/View.php';

$view = new View();
$template = __DIR__ . '/../templates/index.php';
if (empty($_SESSION['usr']) && '' == $_SESSION['usr']) {
    header('Location:/index.php?id=login');
}
echo $view->render($template);