<?php

require __DIR__.'/uploader.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploader</title>
</head>
<body>
<form action="/dz6/uploader/index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <input type="submit" name="Отправить">
</form>
</body>
</html>