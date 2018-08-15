<?php
if (isset($_GET['id']) && !empty($_GET['id']) ) {
    $id = (int)$_GET['id'];
} else {
    header('Location:/news.php');
}

require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/data/news.txt');
$view = new View();
if (!key_exists($id, $news->getNews())) {
    header('Location:/news.php');
}
$view->assign('article', $news->getNews());
echo $view->render(__DIR__ . '/templates/article.php');

