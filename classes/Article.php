<?php

class Article
{
    protected $author;
    protected $title;
    protected $textNews;

    public function __construct($news)
    {
        $row = explode('%', $news);
        $this->author = $row[0];
        $this->title = $row[1];
        $this->textNews = $row[2];
    }

    public function getAuthor()
    {
        return $this->author;
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function getTextNews()
    {
        return $this->textNews;
    }

}