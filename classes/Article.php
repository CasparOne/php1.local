<?php

class Article
{
    /**
     * @var
     */
    protected $id;
    protected $title;
    protected $textNews;


    /**
     * Article constructor.
     * @param $news
     */
    public function __construct($news)
    {
        $row = explode('||', $news);
        $this->id = $row[0];
        $this->title = $row[1];
        $this->textNews = $row[2];
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getTextNews()
    {
        return $this->textNews;
    }

}