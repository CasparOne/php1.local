<?php
require __DIR__ . '/Image.php';
class Images
{
    /**
     * @var array $listImg
     */
    protected $listImg;

    /**
     * Images constructor.
     */
    public function __construct()
    {
        $lines = array_diff(scandir(__DIR__ . '/../images'), ['.', '..']);
        $this->listImg = [];
        foreach ($lines as $img) {
            $this->listImg[] = new Image($img);
        }
    }

    /**
     * @return array
     */
    public function getImgFileName()
    {
        return $this->listImg;
    }
}