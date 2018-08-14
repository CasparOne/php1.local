<?php

$imgPath = __DIR__ . '/images';
$imgList = array_diff(scandir($imgPath), ['..', '.']);


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $imgId = $_GET['id'];
} else {
    header('Location:/galary.php');
}

if (isset($imgId) && in_array($imgId, $imgList)) {
    $img = $imgId;
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
<img src="/images/<?php echo $img; ?>">
</body>
</html>
