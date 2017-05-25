<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>
<h3>Записи:</h3>

<?php
foreach ($this->arr['book'] as $value) {
    ?><p><?php echo $value->getMessage(); ?></p><?php
}
?>
<form action="/dz7/add.php" method="post">
    <input type="text" name="text" size="40">
    <input type="submit">
</form>
</body>
</html>