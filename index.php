<?php
require __DIR__ . '/classes/GuestBook.php';

$gb = new GuestBook();
foreach ($gb->getRecords() as $record) {?>
    <hr>
    <?php echo $record->getMessage(); ?>
    <?php
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br><br>
<form action="/scripts/append.php" method="post">
    <textarea name="message" style="align-content: center" placeholder="Сюда пишем комент" rows="5" cols="40"></textarea><br>
    <button type="submit">Отправить</button>
</form>
</body>
</html>
