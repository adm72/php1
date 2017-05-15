<?php

if (isset($_FILES['myimg'])) {

    if (0 == $_FILES['myimg']['error'] && $_FILES['myimg']['type'] == 'image/jpeg') {

            $imgname = $_FILES['myimg']['name'];
            $i = 0;

            while (file_exists(__DIR__.'/img/'.$imgname)) {
                $imgname = $i.'_'.$_FILES['myimg']['name'];
                $i++;
            }
            move_uploaded_file($_FILES['myimg']['tmp_name'], __DIR__.'/img/'.$imgname);
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