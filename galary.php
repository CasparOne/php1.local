<?php
/** Присваеваем значение, содержащее путь к директории с изображениями
 * получаем массив, содержащий список всех изображений в директории */
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
foreach ($imgList as $value) {
    ?><a href="/image.php?id=<?echo $value; ?>"><img src="/images/<?php echo $value?>" height="180"></a>
<?php
}
?><br><br>
<h3>Загрузка изображений</h3>
    <p>К загрузке принимаются файлы только JPG и PNG размером не более 1 Мб</p>
<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimage">
    <button type="submit">Загрузить</button><br><br>
</form>
</body>
</html>
