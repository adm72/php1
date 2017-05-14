<?php

require __DIR__.'/function.php';

$path = __DIR__.'/data.txt';

$arr = guestbook($path);

if (isset($_POST['text'])) {

    $arr[] = $_POST['text'];
    $str = implode("\n", $arr);
    file_put_contents($path, $str);
    header('Location: /dz4/guestbook.php');
    exit();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>guestbook</title>
</head>
<body>
<?php

foreach ($arr as $value) {
    ?><p><?php echo $value; ?></p><?php
}

?>
<br>
<form action="/dz4/guestbook.php" method="post">
    <input type="text" name="text" size="40">
    <input type="submit">
</form>
</body>
</html>