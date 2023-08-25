<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $a=10;
    $b=20;
    $c=30;
    $d=40;

    echo var_dump (($a > $b)&&($c < $d));

    echo var_dump (($a < $b)||($c < $d));
    ?>
</body>
</html>