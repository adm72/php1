<?php
require __DIR__.'/classes/GuestBook.php';
require __DIR__ . '/classes/View.php';

$gb = new GuestBook(__DIR__ . '/data.txt');
$dataobj = $gb->getData(); //получили все записи-объекты в массив

$view = new View();
$view->assign('book', $dataobj); //book ключ массива $this->arr['book' => $dataobj]
$view->display(__DIR__.'/template/index.php');