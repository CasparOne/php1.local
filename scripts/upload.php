<?php
require __DIR__ . '/../classes/Uploader.php';
$formName = 'myimage';
$imgUpload = new Uploader($formName);
$imgUpload->upload();
header('Location:/index.php?id=galary');