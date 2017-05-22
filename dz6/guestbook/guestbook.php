<?php

class TextFile
{
    protected $arr;
    public $dir;

    public function getData()
    {
        return $this->arr;
    }

    public function append($text)
    {
        $this->arr[] = $text;
    }

    public function save()
    {
        file_put_contents($this->dir, implode("\n", $this->arr));
    }
}

class GuestBook extends TextFile
{
    public function __construct($path)
    {
        $this->dir = $path;
        $this->arr = file($this->dir, FILE_IGNORE_NEW_LINES);

    }
}






