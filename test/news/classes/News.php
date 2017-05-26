<?php

require __DIR__ . '/Article.php';

class News
{
    public $arr;

    public function __construct($path)
    {
        $this->path = $path;
        $this->arr = [];
    }

    public function getNews()
    {
        $data = file($this->path, FILE_IGNORE_NEW_LINES);

        foreach ($data as $datum) {
            list ($id, $title, $news) = explode("|", $datum);
            $this->arr[] = new Article($id, $title, $news);
        }
        return $this->arr;
    }
}