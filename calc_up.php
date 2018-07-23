<?php
/** Проверяем, и если лементы массива установленны, присваеваем значения переменным,
 * иначе присваеваем переменным 0
 */
if (isset($_GET['x'])) {
    $x = (float)$_GET['x'];
} else {
    $x = 0;
}
if (isset($_GET['x'])) {
    $y = (float)$_GET['y'];
} else {
    $y = 0;
}
/** Если элемент массива установлен, то переменной $a присваемваем значение элемента массива,
 * ИНАЧЕ присваеваем пустую строку.
 */
$a = $_GET['oper'] ?? '';
/** $result присваеваем ноль */
$result = 0;
/** блок вычислений */
if ('' != $a) {
    switch ($a) {
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
                $result = 'Выбранна не верная операция!';
                break;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
</head>
<h1>Калькулятор вариант 2</h1>
<form action="/calc_up.php" method="GET">
    X = <input type="text" name="x" value="<?php echo $x; ?>"><br>
    Y = <input type="text" name="y" value="<?php echo $y; ?>"><br>
    <input type="radio" name="oper" value="minus">-
    <input type="radio" name="oper" value="plus">+
    <input type="radio" name="oper" value="div">/
    <input type="radio" name="oper" value="mult">*<br>
    <button type="submit">равно</button> <?php echo $result; ?>
</form>
</body>
</html>