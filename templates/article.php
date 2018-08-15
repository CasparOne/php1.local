<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php

        echo $article['title']; ?></title>
</head>
<body>
<h5><a href="/index.php">Главная</a></h5>
<h4><?php
    echo $article['title'];
    ?></h4>
<article><?php
echo $article['text'];
?></article>
<p><i>Автор: </i><b><?php echo $article['author'] ?? 'Unknown'; ?></b></p>

</body>
</html>