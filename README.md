/guestbook.php - гостевая книга


return $this;
Т.н. chaining паттерн. Используется, когда необходимо
вызвать подряд несколько методов объекта эотго класса.
***
Например:
```php
<?php
class chaning
{
    protected $array = [];

    public function setArr($item) {
        echo '<p>Добавляем новый элемент</p>'; //
        $this->array[] = $item;
        return $this;
    }
    public function getArr() {
        echo 'Выводим: ';
        var_dump($this->array);
        return $this;
    }
    public function closeArr() {
        echo '<p>Чистим массив<p>';
        $this->array = [];
    }
}
$chaining = new chaning();
$chaining->setArr('привет')->getArr()->closeArr();
$chaining->getArr();
```
***
Методы вызываются друг за другом.