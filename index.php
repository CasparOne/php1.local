<?php
include __DIR__ . '/functions.php';
$records = getRecord();
foreach ($records as $record) {
    echo $record; ?><hr>
<?php
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Добавление новой записи</h3>
<form action="/gustbook.php" method="post">
    <input type="text" name="newRecord"><br>
    <button type="submit">Добавить запись</button>
</form>
</body>
</html>
