<?php
require __DIR__ . '/../classes/News.php';
require __DIR__ . '/../classes/View.php';

$news = new News();
$view = new View();

$template = __DIR__ . '/../templates/article.php';
$articles = $news->getNews();
$view->assign('Article', $articles);
echo $view->render($template);