<?php
$servername="localhost"; //$servername = "localhost";
$username="root";
$user_pwd="";
$dbname="mydbtest";

$con= mysqli_connect($servername,$username,$user_pwd,$dbname);

if(!$con){
    die("Connection is failed.".mysqli_connect_error());
}
else{
    echo "Connection is created";
}

?>