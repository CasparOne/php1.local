<?php
include __DIR__ . '/classes.php';
$gb = new GuestBook(__DIR__ . '/gbdata.txt');
$gb->getData();
$gb->append('Александр Васильев');
$gb->save();