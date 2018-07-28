<?php
require __DIR__ . '/Article.php';

class News
{
    protected $lisArticles = [];
    protected $path = __DIR__ . '/../data/news.txt';

    /**
     * News constructor.
     */
    public function __construct()
    {
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $id => $line ) {
            $article = new Article($line);
            $this->lisArticles[$id] = $article;
        }
    }

    /**
     * @return array
     */
    public function getNews()
    {
        return $this->lisArticles;
    }

}
