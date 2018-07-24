<?php

/**
 * Класс загрузки файлов на сервер
 */
class Uploader
{
    protected $formName;

    /** Метод конструктор принимает в качестве аргумента имя поля формы для загрузки файлов */
    public function __construct($upfile)
    {
        $this->formName = $upfile;
    }

    /** Метод ЕСЛИ файл загружен на сервер, помещает его в папку images от корня сайта ИНАЧЕ
     * возвращает false*/
    public function upload()
    {
        if ($this->isUploaded()) {
            move_uploaded_file($_FILES[$this->formName]['tmp_name'],
                __DIR__ . '/../images/' . strtolower($_FILES[$this->formName]['name']));
        } else {
            return false;
        }
    }

    /** Метод проверяет загружен файл или нет без ошибок*/
    public function isUploaded()
    {
        return (is_uploaded_file($_FILES[$this->formName]['tmp_name']) && (0 == $_FILES[$this->formName]['error']));

    }
}