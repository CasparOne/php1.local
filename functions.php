<?php

function getRecord()
{
    $dataPath = __DIR__ . '/data.txt';
    $records = file($dataPath, FILE_IGNORE_NEW_LINES);
    return $records;

}
