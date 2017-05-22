<?php

require __DIR__ . '/foto-data.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>images</title>
</head>
<body>
<?php
if (array_key_exists($id, $foto)) {
    ?><img src="/dz3/img/<?php echo $foto[$id]; ?>"><?php
} else {
    echo 'Изображения с таким id нет.';
}
?>
</body>
</html>
