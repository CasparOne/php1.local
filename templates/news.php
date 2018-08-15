<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
</head>
<body>
<h5><a href="/index.php">Главная</a></h5>
<h2>Новости</h2>
<?php
foreach ($news as $article) { ?>
<a href="/article.php?id=<?php echo $article->getId()?>"><h3><?php echo $article->getTitle(); ?></h3></a>
    <p><?php echo substr($article->getTextNews(), 0, stripos($article->getTextNews(), '.')) . '...'; ?>
<?php
}
?>
</body>
</html>
