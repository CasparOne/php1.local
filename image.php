<?php
/** Присваеваем значение, содержащее путь к директории с изображениями
 * получаем массив, содержащий список всех изображений в директории*/
$imgPath = __DIR__ . '/images';
$imgList = array_diff(scandir($imgPath), ['..', '.']);
/** Присваеваем $imgId значение переданное от пользователя*/
$imgId = $_GET['id'];
/** Проверяем получили ли мы значение id и соответствует ли переданное значение одному из ключей
 * массива изображений  */
if (isset($imgId) && key_exists($imgId, $imgList)) {
    $img = $imgList[$imgId];
} else {
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<img src="/images/<?php echo $img; ?>">
</body>
</html>
