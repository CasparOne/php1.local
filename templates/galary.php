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
<?php
foreach ($galary as $record) { ?>
<a href="/img.php?imgId=<?php echo $record->getImg(); ?>"><img src="/images/<?php echo $record->getImg(); ?>" height="160" ></a>
<?php
}
?>
<form action="/index.php?id=upl" method="post" enctype="multipart/form-data">
    <input type="file" name="myimage">
    <button type="submit">Загрузить</button>
    <br><br>
</form>

</body>
</html>