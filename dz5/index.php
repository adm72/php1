<?php
require __DIR__ . '/function.php';

$cities = ['Москва', 'Санкт-Петербург', 'Екатеринбург', 'Тюмень', 'Ишим', 'Курган', 'Новгород', 'Тамбов',];

if (isset($_POST['text'])) {

    $mycity = mb_strtoupper(mb_substr($_POST['text'], -1));

    if ($mycity == 'Ь' || $mycity == 'Ъ') {
        $mycity = mb_strtoupper(mb_substr($_POST['text'], -2, 1));
    }

} else {
    $mycity = null;
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

$result = gameCity($cities, $mycity);

if ($result != null) {
    echo $result;
}

?>
<form action="/dz5/index.php" method="post">
    <input type="text" name="text">
    <input type="submit">
</form>
</body>
</html>
