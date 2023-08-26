<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $marks=array(32132,3213,3165515,110,220,330,400,3254,35463,635435);
    sort ($marks);

    foreach($marks as $i)
    {
        echo $i ."<br>";
    }
       


    $marks=array(
    array("Ahsanul"=>110),
    array("Mostakin"=>120),
    array("Zisun"=>101)
   );
    asort($marks); // Sort the array based on values in ascending order

    foreach ($marks as $key => $val){
    echo $key . " = " . $val . "<br>"; // Print each key-value pair
}
?>



</body>
</html>