<?php
require __DIR__ . '/../classes/Users.php';
require __DIR__ . '/../classes/Images.php';
require __DIR__ . '/../classes/View.php';
$template = __DIR__ . '/../templates/galary.php';
$view = new View();
$users = new Users();
$imgList = new Images();
$view->assign('galary', $imgList->getImgFileName());
echo $view->render($template);