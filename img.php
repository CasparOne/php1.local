<?php
session_start();
if (empty($_SESSION['usr']) && '' == $_SESSION['usr']) {
    header('Location:/index.php?id=login');
}

if (isset($_GET['imgId'])) {
    require __DIR__ . '/classes/Images.php';
    require __DIR__ . '/classes/View.php';
    $template = __DIR__ . '/templates/img.php';
    $view = new View();
    $images = new Images();
    $imgsArr = [];
    $imgId = $_GET['imgId'];
    foreach ($images->getImgFileName() as $img) {
        $imgsArr[] = $img->getImg();
    }
    echo $view->render($template);
}

