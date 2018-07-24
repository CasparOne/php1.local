<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея фотографий</title>
</head>
<body>
<h1>Галерея изображений</h1>
<h3>Вы вошли, как <?php echo ucfirst($users->getCurrUser()); ?>!</h3>
<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimage">
    <button type="submit">Загрузить</button>
    <br><br>
</form>
<?php
foreach ($imgList->getImgFileName() as $id => $imgName) {
    ?><a href="/img.php?id=<?php echo $id; ?>"><img src="/images/<?php echo $imgName->getImg(); ?>" height="180"></a>
    <?php
}
?>
</body>
</html>