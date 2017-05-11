<?php
require __DIR__.'/function.php';

if(isset($_GET['a'])){
    $a = (int) $_GET['a'];
} else {
    $a = null;
}
if(isset($_GET['b'])){
    $b = (int) $_GET['b'];
} else {
    $b = null;
}
if(isset($_GET['operator'])){
    $operator = $_GET['operator'];
} else {
    $operator = null;
}

$result = calculator($a, $b, $operator);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DZ3</title>
</head>
<body>
<form action="calculator.php" method="get">
    <input type="number" name="a" value="<?php echo $a; ?>">
    <select name="operator">
        <?php
        $array = ['+', '-', '/', '*'];
        foreach ($array as $value){
            ?><option value="<?php echo $value; ?>"<?php
            if($operator == $value){
                echo ' selected';
            }
            ?>><?php echo $value; ?></option><?php
        }
        ?>
    </select>
    <input type="number" name="b" value="<?php echo $b; ?>">
    <input type="submit" value="=">
    <?php
    if($result !== null){
        if($b < 0) {
            echo $a .' '. $operator .' ('. $b .') = '. $result;
        } else {
            echo $a .' '. $operator .' '. $b .' = '. $result;
        }
    }
    ?>
</form>
</body>
</html>
