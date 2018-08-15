<?php
$file = __DIR__ . '/config.php';
if (!file_exists($file) || !is_readable($file)) {
    die('Не задан файл конфигурации');
}
$config = include $file;
require __DIR__ . '/classes/Db.php';
require __DIR__ . '/classes/View.php';

$db = new Db($config);
$view = new View();
$sql = 'SELECT * FROM news ORDER BY id DESC ';

$view->assign('news', $db->query($sql));
echo $view->render(__DIR__ . '/templates/news.php');
