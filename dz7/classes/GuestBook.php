<?php

require __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    public $path;
    protected $arr;

    public function __construct($path)
    {
        $this->path = $path;
        $this->arr = [];
    }

    public function getData()
    {
        $data = file($this->path, FILE_IGNORE_NEW_LINES);

        foreach ($data as $item) {
            $this->arr[] = new GuestBookRecord($item);
        }
        return $this->arr;

    }

    public function add(GuestBookRecord $text)
    {
        $this->arr[] = $text;
        return $this;
    }

    public function save()
    {
        $mass = [];
        foreach ($this->getData() as $value) {
            $mass[] = $value->getMessage();
        }
        file_put_contents($this->path, implode("\n", $mass));
    }
}