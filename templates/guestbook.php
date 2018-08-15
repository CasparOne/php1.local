<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<body>
<h5><a href="/index.php">Главная</a></h5>
<h2>Гостевая книга</h2>
<br>
<?php
foreach ( $guestbook as $record) { ?>
   <article><?php echo $record; ?></article>
       <?php
}
?>
<form action="/append.php" method="post">
    <textarea name="message"  placeholder="Сюда пишем комент" rows="10" cols="30"></textarea><br>
    <button type="submit">Отправить</button>
</form>
</body>
</html>





