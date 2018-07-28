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
<?php
foreach ($News as $news=>$article) { ?>
<a href="/view/article.php?news=<?php echo $news?>"><h3><?php echo $article->getTitle(); ?></h3></a>
    <p><span style="font-size: small">Автор: </span><?php echo $article->getAuthor(); ?></p>
    <p><?php echo substr($article->getTextNews(), 0, stripos($article->getTextNews(), '.')) . '...'; ?>
    <span style="color: purple"><a href="/view/article.php?news=<?php echo $news?>">Подробнее</a></span></p>
<?php
}
?>
</body>
</html>
