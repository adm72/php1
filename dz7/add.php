<?php
require __DIR__ . '/classes/GuestBook.php';

$gb = new GuestBook(__DIR__ . '/data.txt');

if (isset($_POST['text'])) {

    $text = new GuestBookRecord($_POST['text']);
    $gb->add($text)->save();
    header('Location: /dz7/index.php');
    exit();

}