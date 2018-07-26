<?php
require __DIR__ . '/Image.php';
class Images
{
    protected $listImg;
    public function __construct()
    {
        $lines = array_diff(scandir(__DIR__ . '/../images'), ['.', '..']);
        $this->listImg = [];
        foreach ($lines as $img) {
            $this->listImg[] = new Image($img);
        }
    }
    public function getImgFileName()
    {
        return $this->listImg;
    }
}