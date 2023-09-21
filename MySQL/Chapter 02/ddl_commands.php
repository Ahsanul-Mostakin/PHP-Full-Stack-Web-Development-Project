<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername="localhost"; 
$username="root";        
$user_pwd="";
$db="student";

$con= mysqli_connect($servername,$username,$user_pwd,$db);

if(!$con){
    die("Connection is failed.".mysqli_connect_error());
}
else{
    echo "Connection is created";
}

 $q= "CREATE DATABASE student";
 mysqli_query($con,$q);
$q_std_info = "create table std_info(
    std_id int(10) NOT NULL,
    std_name VARCHAR(100),
    std_father VARCHAR(50),
    std_city VARCHAR(10),
    std_marks int(50),
    std_status VARCHAR(10),
    primary key(std_id)
    )";
    mysqli_query($con,$q_std_info);
?>
</body>
</html>