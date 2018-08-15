<?php
require __DIR__ . '/classes/GuestBook.php';

$gb = new GuestBook(__DIR__ . '/data/gb.txt');

$record = new GuestBookRecord(str_replace("\n", ' ', $_POST['message']));
if ($gb->append($record)->save()) {
    header('Location: /guestbook.php');
}
