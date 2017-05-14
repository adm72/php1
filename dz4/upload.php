<?php

$rand = rand(1, 999);
$dir = scandir(__DIR__.'/img/');

if (isset($_FILES['myimg'])) {

    $myimg = $_FILES['myimg'];

    if (0 == $myimg['error'] && $myimg['type'] == 'image/jpeg') {

        if (in_array($myimg['name'], $dir)) {

            move_uploaded_file($myimg['tmp_name'], __DIR__.'/img/'.$rand.'_'.$myimg['name']);

        } else {

            move_uploaded_file($myimg['tmp_name'], __DIR__.'/img/'.$myimg['name']);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>upload</title>
</head>
<body>
<form action="/dz4/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimg">
    <input type="submit" name="Отправить">
</form>
</body>
</html>