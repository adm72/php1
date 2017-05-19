<?php
class GuestBook
{
    protected $arr;
    public $dir;

    public function __construct($path)
    {
        $this->dir = $path;
        $this->arr = file($this->dir, FILE_IGNORE_NEW_LINES);

    }
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






