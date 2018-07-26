<?php
if (empty($_SESSION['usr']) && '' == $_SESSION['usr']) {
    header('Location:/index.php?id=login');
}

require __DIR__ . '/../classes/GuestBook.php';
require __DIR__ . '/../classes/View.php';

$template = __DIR__ . '/../templates/guestbook.php';
$gb = new GuestBook();
$view = new View();

foreach ($gb->getRecords() as $record) {
   $data[] = $record->getMessage();
}
$view->assign('GuestBook', $data);
echo $view->render($template);




