<?php
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/View.php';


$news = new News(__DIR__ . '/data/news.txt');
$view = new View();
$view->assign('news', $news->getNews());
echo $view->render(__DIR__ . '/templates/news.php');