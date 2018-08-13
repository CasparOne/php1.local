<?php
include __DIR__ . '/functions.php';

$dataFile = __DIR__ . '/data.txt';
$records = getRecord();
$newRecord = $_POST['newRecord'];


/** Проверяем пустая ли строка и если есть пробелы убираем в начале и в конце строки
 * Строку добавляем в массив записей
 * массв записей приводим в строку
 * Записываем в файл
 * после окончания работы скрипта перенаправляем на главную*/
if ('' != $newRecord) {
    $records[] = trim($newRecord);
    file_put_contents($dataFile,implode("\n", $records));
}
header('Location:/index.php');