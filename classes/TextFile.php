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
        $this->pathFile = $path;
        $this->records = file($this->pathFile,FILE_IGNORE_NEW_LINES);
    }

    /**
     * Saves data to file
     */
    public function save()
    {
        $this->readyLine = implode("\n", $this->records);
        file_put_contents($this->pathFile, $this->readyLine);
    }
}