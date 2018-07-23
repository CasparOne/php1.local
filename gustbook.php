<?php
include __DIR__ . '/functions.php';
$dataFile = __DIR__ . '/data.txt';
$records = getRecord();
$newRecord = $_POST['newRecord'];

if ('' != $newRecord) {
$records[] = trim($newRecord);
file_put_contents($dataFile,implode("\n", $records));
    header('Location:/index.php');
} else {
    header('Location:/index.php');
}