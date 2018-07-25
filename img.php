<?php
session_start();
if (empty($_SESSION['usr'])) {
    header('Location:http://php1.local/login.php');
}
if (isset($_GET['id'])) {
    require __DIR__ . '/classes/Images.php';
    $images = new Images();
    $imgsArr = [];
    $id = $_GET['id'];
    include __DIR__ . '/templates/img.php';
}


