<?php
session_start();
if (empty($_SESSION['usr'])) {
    header('Location:http://php1.local/login.php');
}

$imgPath = __DIR__ . '/images';
$imgList = array_diff(scandir($imgPath), ['..', '.']);

$imgId = $_GET['id'];

if (isset($imgId) && key_exists($imgId, $imgList)) {
    $img = $imgList[$imgId];
} else {
    die();
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
<body><br>
<a href="/index.php"><p>Назад </p></a>
<img src="/images/<?php echo $img; ?>">
</body>
</html>
