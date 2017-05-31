<?php
require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';

$db = new DB();
$arr = $db->query('SELECT * FROM news ORDER BY id DESC');

$view = new View();
$view->assign('news', $arr);
$view->display(__DIR__ . '/template/news.html');

