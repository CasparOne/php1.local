<?php
if (isset($_GET['id']) && !empty($_GET['id']) ) {
    $id = (int)$_GET['id'];
} else {
    header('Location:/');
}
$file = __DIR__ . '/config.php';

if (file_exists($file) && is_readable($file)) {
    $config = include $file;
} else {
    die('Не задан файл конфигурации');
}

require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/Db.php';

$view = new View();
$db = new Db($config);
$selected = $db->query('SELECT * FROM news WHERE id=:id', [':id' => $id])[0];
if (is_null($selected)) {
    header('Location:/');
}

$view->assign('article', $selected);
echo $view->render(__DIR__ . '/templates/article.php');

