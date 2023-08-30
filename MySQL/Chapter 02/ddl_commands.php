<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername="localhost"; //$servername = "localhost";
$username="root";
$user_pwd="";

$con= mysqli_connect($servername,$username,$user_pwd);

if(!$con){
    die("Connection is failed.".mysqli_connect_error());
}
else{
    echo "Connection is created";
}

$q= "CREATE DATABASE mostakin";
mysqli_query($con,$q);

?>
</body>
</html>