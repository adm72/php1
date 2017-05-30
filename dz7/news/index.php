<?php

require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/News.php';

$news = new News(__DIR__ . '/db.txt');
$data = $news->getNews();

$view = new View();
$view->assign('news', $data);
$view->display(__DIR__ . '/template/News.html');