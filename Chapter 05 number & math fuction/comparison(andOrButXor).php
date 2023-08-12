<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators in PHP</title>
</head>
<body>
    <?php
    $a=10;
    $b=20;
    $c=30;
    $d=15;
    
    // && will return true if both statement are true 

    echo var_dump(($a<$b)&&($c>$d));

    // || will ruturn true if any statement is true

    echo var_dump(($a>$b)||($c<$d));

    // ! will return opposite value

    echo var_dump(!($a<$b));

    // xor will return true if any satemenmts is true.But return false when both satements are true

    echo var_dump(($a<$b) xor ($c>$d));  


    ?>
</body>
</html>