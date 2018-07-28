<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $Article[$_GET['news']]->getTitle(); ?></title>
</head>
<body>
<h3><?php
    echo $Article[$_GET['news']]->getTitle();
    ?></h3>
<article><?php
echo $Article[$_GET['news']]->getTextNews();
?></article>

</body>
</html>