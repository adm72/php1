<?php
require __DIR__.'/foto-data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foto</title>
</head>
<body>
<?php

foreach ($foto as $key => $val){
    ?><a href="/dz3/images.php?id=<?php echo $key; ?>"><img src="/dz3/img/<?php echo $val; ?>" width="200"></a><?php
}

?>
</body>
</html>