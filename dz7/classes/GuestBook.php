<?php

require __DIR__ . '/GuestBookRecord.php';

class GuestBook //получаем данные
{
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function getAll()
    {
        $arr = [];
        $data = file($this->file);
        foreach ($data as $value) {
            $arr[] = new GuestBookRecord($value);
        }
        return $arr;

    }
}