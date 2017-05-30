<?php
require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/News.php';

if (isset($_GET['id'])) {

    $data = (new News(__DIR__ . '/db.txt'))->getId($_GET['id']);

    $view = new View();
    $view->assign('news', $data);
    $view->display(__DIR__ . '/template/Article.html');
}