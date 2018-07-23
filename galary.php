<?php
/** Присваеваем значение, содержащее путь к директории с изображениями
 * получаем массив, содержащий список всех изображений в директории*/
$imgPath = __DIR__ . '/images';
$imgList = array_diff(scandir($imgPath), ['..', '.']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея</title>
</head>
<body>
<h1>Галерея</h1>
<?php
/** выводим все изображения, содержащиеся в директории */
foreach ($imgList as $key => $value) {
    ?><a href="/image.php?id=<?echo $key; ?>"><img src="/images/<?php echo $value?>" height="180">
<?php
}
?>
</body>
</html>
