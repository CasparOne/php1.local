<?php
/** Родительский класс TextFile описывает свойства и методы объекта TextFile
 * метод конструктор принимает путь к файлу и читает из него данные.*/
class TextFile
{
    protected $records = [];
    protected $pathFile;
    protected $readyLine;
    public function __construct($path)
    {
        $this->pathFile = $path;
        $this->records = file($this->pathFile,FILE_IGNORE_NEW_LINES);
    }

    public function save()
    {
        file_put_contents($this->pathFile, $this->readyLine);
    }
}
/** GuestBook - дочерний класс от класса TextFile имеет своиметоды
 getData() - возвращает массив записей
 append() - принимает значение агрумента и добавляет к существующему массиву
 save() - переопределенный метод от родительского, преобразуетмассив в строку и сохраняет в файл*/
class GuestBook extends TextFile
{
    public function __construct($path)
    {
        parent::__construct($path);
    }

    public function getData()
    {
        return $this->records;
    }

    public function append($text)
    {
        $this->records[] = $text;
    }

    public function save()
    {
        $this->readyLine = implode("\n", $this->records);
        parent::save();
    }
}

/** Класс Uploader описывает объект и его свойства */
class Uploader
{
    protected $formName;
    protected $myimg;
/** Метод конструктор принимает имя формы и присваевает это значение защищенному свойству $formName */
    public function __construct($formName)
    {
        $this->formName = $formName;
        $this->myimg = $_FILES[$this->formName];
    }
/** Метод isUploaded() проверяет был ли загружен файл и ЕСЛИ был загружен - true
 *  ИНАЧЕ - false*/
    public function isUploaded()
    {
        if (is_uploaded_file($_FILES[$this->formName]['tmp_name'])) {
            return true;
        } else {
            return false;
        }
    }
/** Метод upload() осуществляет перенос загруженного файла извременного места расположения в постоянное */
    public function upload()
    {
        if ($this->isUploaded()) {
            move_uploaded_file($this->myimg['tmp_name'], __DIR__ . '/images' . $this->myimg['name']);
        }
    }
}
