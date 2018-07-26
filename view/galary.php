<?php
if (empty($_SESSION['usr']) && '' == $_SESSION['usr']) {
    header('Location:/index.php?id=login');
}
require __DIR__ . '/../classes/Users.php';
require __DIR__ . '/../classes/Images.php';
require __DIR__ . '/../classes/View.php';
$template = __DIR__ . '/../templates/galary.php';
$view = new View();
$users = new Users();
$imgList = new Images();
$view->assign('Galary', $imgList->getImgFileName());
echo $view->render($template);