<?php

class Article
{
    public $id;
    public $title;
    public $news;

    public function __construct($id, $title, $news)
    {
        $this->id = $id;
        $this->title = $title;
        $this->news = $news;
    }

    public function getArticleId()
    {
        return $this->id;
    }

    public function getArticle()
    {
        return $this->news;
    }

    public function getArticleTitle()
    {
        return $this->title;
    }

}