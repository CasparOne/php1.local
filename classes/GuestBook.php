<?php
require_once __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    /**
     * GuestBook constructor.
     * @param $path
     */
    public function __construct($path)
    {
        parent::__construct($path);
    }

    /**
     * @return array|bool
     */
    public function getData()
    {
        return $this->records;
    }

    /**
     * @param $text
     */
    public function append($text)
    {
        $this->records[] = $text;
    }

}