<?php
$x = intval($_GET['firstN'] ?? 0);
$y = intval($_GET['secondN'] ?? 0);
$z = $_GET['oper'] ?? null;
if ((isset($x)) &&
    (isset($y)) &&
    (isset($z))) {
        switch ($z) {
            case 'minus':
                $result = $x - $y;
                break;
            case 'plus':
                $result = $x + $y;
                break;
            case 'div':
                if (0 != $y) {
                $result = $x / $y;
                } else {
                    $result = 'Деление на ноль!';
                }
                break;
            case 'mult':
                $result = $x * $y;
                break;
            default:
                $result = 'Error!';
        }
} else {
    $result = null;
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
<h1>Калькулятор вариант 2</h1>
<form action="/calc_up.php" method="GET">
    X = <input type="text" name="firstN" value="<?php echo $x; ?>"><br>
    Y = <input type="text" name="secondN" value="<?php echo $y; ?>"><br>
    <input type="radio" name="oper" value="minus">-
    <input type="radio" name="oper" value="plus">+
    <input type="radio" name="oper" value="div">/
    <input type="radio" name="oper" value="mult">*<br>
    <button type="submit">равно</button> <?php echo $result ?? 0; ?>
</form>
</body>
</html>