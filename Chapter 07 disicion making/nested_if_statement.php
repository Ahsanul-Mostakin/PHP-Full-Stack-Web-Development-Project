<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=12 ;
    if($num %2 ==0){
        if($num%3==0){
           echo "Number is divisible by 2 and 3";
        }
        else{
            echo "Number isn't divisible by 3";
        }
        
    }
    else{
        echo "Number is not divisible by 2";
    }
    ?>
</body>
</html>