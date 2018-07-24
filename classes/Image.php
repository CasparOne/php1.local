<?php

/**
 * Класс Image метод @getImgList возвращает массив,
 * элементы которого являются названия файлов в директории
 */
class Image
{
    protected $img;

    public function __construct($img)
    {
        $this->img = $img;
    }

    public function getImg()
    {
        return $this->img;
    }


}