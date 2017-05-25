<?php

require __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getData()
    {
        $data = file($this->path, FILE_IGNORE_NEW_LINES);
        $arr = [];
        foreach ($data as $item) {
            $arr[] = new GuestBookRecord($item);
        }
        return $arr;
        //чтобы запилить каждую запись в объект, нам нужно 2 массива.
        //1й с записями из тхт, а другой чистый, в который зальются новые объекты.
    }
}