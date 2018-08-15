<?php
require __DIR__ . '/Article.php';

class News
{
    protected $listArticles = [];
    protected $path;

    /**
     * News constructor.
     */
    public function __construct($datafile)
    {
        if (file_exists($datafile) && is_readable($datafile) && (0 != filesize($datafile))) {
            $this->path = $datafile;
            $lines = file($this->path, FILE_IGNORE_NEW_LINES);
            foreach ($lines as $line ) {
                $article = new Article($line);
                $this->listArticles[$article->getId()] = $article;
            }
         } else {
            echo 'Ошибка создания объекта! Не возможно прочитать файл с данными';
        }
    }

    /**
     * @return array
     */
    public function getNews()
    {
        return $this->listArticles;
    }

}
