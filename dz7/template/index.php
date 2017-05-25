<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>
<h3>Записи:</h3>

<?php foreach ($this->data['book'] as $value) {
    ?><p><?php echo $value->getMessage(); ?></p><?php
} ?>

</body>
</html>