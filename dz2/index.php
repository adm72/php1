<?php
require __DIR__.'/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>1. Таблица истинности</p>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>&&</th>
        <th>0</th>
        <th>1</th>
    </tr>
    <tr>
        <th>0</th>
        <td><?php echo (int) (0 && 0); ?></td>
        <td><?php echo (int) (0 && 1); ?></td>
    </tr>
    <tr>
        <th>1</th>
        <td><?php echo (int) (1 && 0); ?></td>
        <td><?php echo (int) (1 && 1); ?></td>
    </tr>
</table>
<br>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>||</th>
        <th>0</th>
        <th>1</th>
    </tr>
    <tr>
        <th>0</th>
        <td><?php echo (int) (0 || 0); ?></td>
        <td><?php echo (int) (0 || 1); ?></td>
    </tr>
    <tr>
        <th>1</th>
        <td><?php echo (int) (1 || 0); ?></td>
        <td><?php echo (int) (1 || 1); ?></td>
    </tr>
</table>
<br>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>xor</th>
        <th>0</th>
        <th>1</th>
    </tr>
    <tr>
        <th>0</th>
        <td><?php echo (int) (0 xor 0); ?></td>
        <td><?php echo (int) (0 xor 1); ?></td>
    </tr>
    <tr>
        <th>1</th>
        <td><?php echo (int) (1 xor 0); ?></td>
        <td><?php echo (int) (1 xor 1); ?></td>
    </tr>
</table>
D = b2 - 4ac
<p>2. Дискриминант:</p>
<?php $a = 1; $b = -70; $c = 600; ?>
<p>1)   <?php echo 'a = '.$a.' b = '.$b.' c = '.$c; ?><br>
        <?php echo 'D = '.$b; ?><sup>2</sup> - 4 * <?php echo $a.' * '.$c.' = '.discrim($a, $b, $c); ?></p>

<?php $a = 3; $b = -18; $c = 27; ?>
<p>2)   <?php echo 'a = '.$a.' b = '.$b.' c = '.$c; ?><br>
        <?php echo 'D = '.$b; ?><sup>2</sup> - 4 * <?php echo $a.' * '.$c.' = '.discrim($a, $b, $c); ?></p>

<?php $a = 1; $b = 15; $c = 100; ?>
<p>3)   <?php echo 'a = '.$a.' b = '.$b.' c = '.$c; ?><br>
        <?php echo 'D = '.$b; ?><sup>2</sup> - 4 * <?php echo $a.' * '.$c.' = '.discrim($a, $b, $c); ?></p>

<br>

<p>3. include:</p>
<?php

//include берет один файл и вставляет его в другой, причем не как обычный текст, а как код т.е. программу
include __DIR__.'/inc1.php';
/*файл inc1.php подключается и выводит "тест"
*если в подключаемом файле будут объявлены переменные, то
*здесь они будут так же доступны
*/
echo $abc;

include __DIR__.'/inc2.php';
//точно так же файл inc2.php подключается и выводит "еще тест"

//используем include в качестве функции
echo $b = include __DIR__.'/inc2.php';
//выводит "еще тест1", добавилась 1 т.к. подключение успешно

echo $c = include __DIR__.'/inc3.php';
/*если используем include как функцию, значит она может что-то возвращать.
 *при помощи return вернет строку "снова тест"
 */

?>
<br>
<p>4. Угадываем пол</p>
<?php
$name = 'Светлана';
if(sex($name) != null){
    echo 'Имя: '.$name.' - Пол: '.sex($name);
} else {
    echo 'Не удалось установить пол';
}
?>
<br>
<?php
$name = 'Георгий';
if(sex($name) != null){
    echo 'Имя: '.$name.' - Пол: '.sex($name);
} else {
    echo 'Не удалось установить пол';
}
?>
<br>
<?php
$name = '';
if(sex($name) != null){
    echo 'Имя: '.$name.' - Пол: '.sex($name);
} else {
    echo 'Не удалось установить пол';
}
?>
</body>
</html>

