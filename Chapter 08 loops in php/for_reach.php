<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $marks=array ("Ahsanul "=>43,"Mostakin"=>44,"Zamir"=>50);

    foreach($marks as $k => $v){
        echo $k. " = " .$v."<br/>";
    }
    ?>
</body>
</html>