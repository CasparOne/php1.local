<?php
if (empty($_SESSION['usr']) && '' == $_SESSION['usr']) {
    header('Location:/index.php?id=galary');
}
require __DIR__ . '/../classes/Uploader.php';
$formName = 'myimage';
$imgUpload = new Uploader($formName);
$imgUpload->upload();
