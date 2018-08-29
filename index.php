<h1>Гостевая книга</h1>

<?php
include __DIR__ . '/classes/GuestBook.php';


$gb = new GuestBook(__DIR__ . '/gbdata.txt');
$gb->getData();
$gb->append('Александр Васильев');
$gb->save();
var_dump($gb->getData()); //это единственный способ на данном этапе обучения вывести данные на страницу
/* Можно сделать вот так
foreach ($gb->getData() as $record) {
    echo $record . '<br>'; // знаю!!! что так делать нельзя, но передал через echo потому что нужен был цельный кусок php кода
}*/
?>

<h1><a href="/upload.php">Галерея</a></h1>