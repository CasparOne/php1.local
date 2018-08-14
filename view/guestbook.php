<?php
require __DIR__ . '/../classes/GuestBook.php';
require __DIR__ . '/../classes/View.php';

$template = __DIR__ . '/../templates/guestbook.php';
$gb = new GuestBook();
$view = new View();

foreach ($gb->getRecords() as $record) {
   $data[] = $record->getMessage();
}
$view->assign('gb', $data);
echo $view->render($template);




