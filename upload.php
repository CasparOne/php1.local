<?php
session_start();
require __DIR__ . '/classes/Uploader.php';
$formName = 'myimage';
$fileSize = 5 * (2 ** 20) ; //размер файла 5 мегабат. Значение (int)5 можно поменять "по вкусу"
$uploader = new Uploader($formName);

if (isset($_FILES[$formName])) {
    if ($uploader->isUploaded() &&
        /** Дальше проверки разные, в след релизе все это будет проверяться внутри класса */
        ($_FILES[$formName]['type'] == 'image/jpeg' || $_FILES[$formName]['type'] == 'image/png') &&
        $_FILES[$formName]['size'] <=$fileSize) {
        $uploader->upload();
    }
    else {
        echo 'Error uploading image!';
        ?><br> <a href="/index.php"><< НАЗАД</a> <?php
    }
}
header('Location: http://php1.local/');

