<?php
require __DIR__ . '/classes/GuestBook.php'; //создали объект
require __DIR__ . '/classes/View.php';

$gb = new GuestBook(__DIR__ . '/test.txt', FILE_IGNORE_NEW_LINES); //данные запросили

$data = $gb->getAll(); //данные получили

$view = new View();
$view->assign('book', $data);
$view->display(__DIR__ . '/template/index.php');