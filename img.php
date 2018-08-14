<?php
session_start();
if (empty($_SESSION['usr']) && '' == $_SESSION['usr']) {
    header('Location:/index.php?id=login');
}

if (!isset($_GET['imgId']) || empty($_GET['imgId'])) {
    header('Location:/index.php/index.php?id=galary');
}
require __DIR__ . '/classes/Images.php';
require __DIR__ . '/classes/View.php';
$template = __DIR__ . '/templates/img.php';
$view = new View();
$images = new Images();
$imgsArr = [];
$imgId = $_GET['imgId'];
include __DIR__ . '/templates/header.php';
foreach ($images->getImgFileName() as $img) {
    $imgsArr[] = $img->getImg();
}
if ( in_array($_GET['imgId'], $imgsArr) ) {
    echo $view->render($template);
}


