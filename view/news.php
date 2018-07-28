<?php
require __DIR__ . '/../classes/News.php';
require __DIR__ . '/../classes/View.php';

$news = new News();
$view = new View();
$template = __DIR__ . '/../templates/news.php';
$articles = $news->getNews();

$view->assign('News', $articles);
echo $view->render($template);