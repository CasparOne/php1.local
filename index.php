<?php
session_start();
if (empty($_SESSION['usr'])) {
    header('Location:http://php1.local/login.php');
}
require __DIR__ . '/classes/Users.php';
require __DIR__ . '/classes/Images.php';
$users = new Users();
$imgList = new Images();
include __DIR__ . '/templates/galary.php';
