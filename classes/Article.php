<?php

class Article
{
    /**
     * @var
     */
    protected $author;
    protected $title;
    protected $textNews;
    protected $id;

    /**
     * Article constructor.
     * @param $news
     */
    public function __construct($news)
    {
        $row = explode('%', $news);
        $this->id = $row[0];
        $this->author = $row[1];
        $this->title = $row[2];
        $this->textNews = $row[3];
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
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