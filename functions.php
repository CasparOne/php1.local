<?php
/** Функция читает данные из файла и возвращает массив записей */

function getRecord()
{
    $dataPath = __DIR__ . '/data.txt';
    $records = file($dataPath, FILE_IGNORE_NEW_LINES);
    return $records;

}
