<?php
/** присваеваем значения переменным $a (action) и $result (результат) */
$a = $_GET['oper'] ?? '';
$result = 0;
$expr = '';
/** Проверяем переданные значения от пользователя и присваеваем их переменным */
if (isset($_GET['x'])) {
    $x = (float)$_GET['x'];
} else {
    $x = 0;
}
if (isset($_GET['y'])) {
    $y = (float)$_GET['y'];
} else {
    $y = 0;
}
/** Блок рассчетов */
switch ($a) {
    /** Вычитание 2х чисел */
    case 'minus':
        $a = '-';
        $result = $x . ' ' . $a . ' ' . $y . ' = ' . ($x - $y);
        break;
    /** Сложение 2х чисел  */
    case 'plus':
        $a = '+';
        $result = $x . ' ' . $a . ' ' . $y . ' = ' . ($x + $y);
        break;
    /** Деление 2х чисел с проверкой на делитель */
    case 'div':
        $a = '/';
        if (0 != $y) {
            $result = $x . ' ' . $a . ' ' . $y . ' = ' . ($x / $y);
        } else {
            $result = 'Деление на ноль!';
        }
        break;
    /** умножение 2х числе */
    case 'mult':
        $a = '*';
        $result = $x . ' ' . $a . ' ' . $y . ' = ' . ($x * $y);
        break;
    /** Если пользователь передал в качестве операции невалидное значение
     * выводится соответствующее предупреждение*/
    default:
        $a = '';
        $result = 'Выбранна не верная операция!';
        break;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Результат</title>
</head>
<body>
<p>Результат вычислений:  <?php echo $result; ?></p>
</body>
</html>
