<?php
require __DIR__.'/guestbook.php';

$gb = new GuestBook(__DIR__ . '/data.txt');

if (isset($_POST['text'])) {

    $gb->append($_POST['text']);
    $gb->save();
    header('Location: /dz6/guestbook/index.php');
    exit();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>guestbook2</title>
</head>
<body>
<?php

foreach ($gb->getData() as $item) {
    ?><p><?php echo $item; ?></p><?php
}

?>
<br>
<form action="/dz6/guestbook/index.php" method="post">
    <input type="text" name="text" size="40">
    <input type="submit">
</form>
</body>
</html>