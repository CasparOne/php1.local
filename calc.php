<?php
$firstN = floatval($_GET['firstN']);
$secondN = floatval($_GET['secondN']);
if (!isset($_GET['oper'])) {
    echo 'Не верная операция!';
    die();
}
if (!isset($_GET['firstN']) || !isset($_GET['secondN'])) {
    echo 'Не верные значения!';
    die();
}
if ($_GET['firstN'] == '' || $_GET['secondN'] == '') {
    echo 'Вы не ввели числа! Операция не возможна';
    die();
}
switch ($_GET['oper']) {
    case '-':
        echo 'Результат<br>';
        echo $firstN . ' - ' . $secondN . ' = ' . ($firstN - $secondN);
        break;
    case '+':
        echo 'Результат<br>';
        echo $firstN . ' + ' . $secondN . ' = ' . ($firstN + $secondN);
        break;
    case '*':
        echo 'Результат<br>';
        echo $firstN . ' * ' . $secondN . ' = ' . ($firstN * $secondN);
        break;
    case '/':
        if ($secondN == 0) {
            echo 'Делить на ноль, сами знаете...';
        } else {
            echo 'Результат<br>';
            echo $firstN . ' / ' . $secondN . ' = ' . ($firstN / $secondN);
        }
        break;
    default:
        echo 'Что то пошло не так!!';
}