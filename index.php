<?php
session_start();
$pages = include __DIR__ . '/data/pages.php';
$id = $_GET['id'];

if ($id == $pages[0]) {
    include __DIR__ . '/view/guestbook.php';
} elseif ($id == $pages[1]) {
    include __DIR__ . '/view/galary.php';
} elseif ($id == $pages[2]) {
    include __DIR__ . '/view/login.php';
} elseif ($id == $pages[3]) {
    include __DIR__ . '/view/news.php';
} elseif ($id == $pages[4]) {
    include __DIR__ . '/img.php';
} else {
    include __DIR__ . '/view/index.php';
}


