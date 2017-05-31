<?php
if (isset($_GET['id'])) {

    require __DIR__ . '/classes/DB.php';
    require __DIR__ . '/classes/View.php';

    $data = [':id' => $_GET['id']];
    $db = new DB();
    $arr = $db->query('SELECT * FROM news WHERE id=:id', $data);

    $view = new View();
    $view->assign('article', $arr[0]);
    $view->display(__DIR__ . '/template/article.html');

} else {
    header('Location: /dz8/index.php');
    exit();
}