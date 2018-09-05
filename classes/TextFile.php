<?php

class TextFile
{
    protected $records = [];
    protected $pathFile;
    protected $readyLine;

    /**
     * TextFile constructor.
     * @param $path
     */
    public function __construct($path)
    {
        if (file_exists($path) && is_readable($path)) {
            $this->pathFile = $path;
            $this->records = file($this->pathFile,FILE_IGNORE_NEW_LINES);
        } else {
            die('Не удалось открыть файл. Чуть позже здесь будет Exeption');
        }

    }

    /**
     * Saves data to file
     */
    public function save()
    {
        if (file_exists($this->pathFile) && is_writable($this->pathFile)) {
            file_put_contents($this->pathFile, implode("\n", $this->records));
            return true;
        }
        return false;

    }
}