<?php
session_start();
$id = $_GET['id'] ?? '';
if (!isset($_SESSION['usr']) && empty($_SESSION['usr'])) {
    $id = 'login';
}
$pages = include __DIR__ . '/data/pages.php';


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
} elseif ($id == $pages[5]) {
    include __DIR__ . '/view/article.php';
} elseif ($id == $pages[6]) {
    include  __DIR__ . '/scripts/upload.php';
} else {
    include __DIR__ . '/view/index.php';
}
