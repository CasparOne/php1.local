<?php


require __DIR__ . '/classes/GuestBook.php';
require  __DIR__ . '/classes/View.php';
$data = [];
$view = new View();
$guestbook = new GuestBook(__DIR__ . '/data/gb.txt');

foreach ($guestbook->getRecords() as $record) {
    $data[] = $record->getMessage();
}

$view->assign('guestbook', $data);
echo $view->render(__DIR__ . '/templates/guestbook.php');