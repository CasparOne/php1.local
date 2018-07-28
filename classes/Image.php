<?php

class Image
{
    /**
     * @var string $img
     */
    protected $img;

    /**
     * Image constructor
     * @param $img
     */
    public function __construct($img)
    {
        $this->img = $img;
    }

    /** @return string */
    public function getImg()
    {
        return $this->img;
    }
}