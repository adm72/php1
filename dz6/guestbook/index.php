<?php

require __DIR__ . '/guestbook.php';

$guestbook = new GuestBook(__DIR__ . '/data.txt');

if (isset($_POST['text'])) {
    $guestbook->append($_POST['text']);
    $guestbook->save();
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

foreach ($guestbook->getData() as $item) {
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