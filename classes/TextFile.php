<?php

class TextFile
{


    public function __construct($path)
    {

    }
    public function save()
    {
        file_put_contents($this->pathFile, implode("\n", $this->records));
    }
}