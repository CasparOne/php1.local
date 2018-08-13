<?php
include __DIR__ . '/classes/Uploader.php';

session_start();

if (!isset($_SESSION['usr']) || empty($_SESSION['usr'])) {
    header('Location:http://php1.local/login.php');
}

$upd = new Uploader('myimage');
if ($upd->isUploaded()) {
    $upd->upload();
}

header('Location:http://php1.local/index.php');
