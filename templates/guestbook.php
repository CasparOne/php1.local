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
<h1>Гостевая книга</h1>
<br><br>
<?php
foreach ( $gb as $record) { ?>
   <article><?php echo $record; ?></article>
       <?php
}
?>
<form action="/scripts/append.php" method="post">
    <textarea name="message" style="align-content: center" placeholder="Сюда пишем комент" rows="5" cols="40"></textarea><br>
    <button type="submit">Отправить</button>
</form>
</body>
</html>





