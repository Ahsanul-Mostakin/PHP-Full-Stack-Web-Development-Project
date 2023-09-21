<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $user_pwd = "";
    $db = "hellodarknessmyoldfriends";

    $con = mysqli_connect($servername, $username, $user_pwd, $db);

    if (!$con) {
        die("Connection is not created." . mysqli_connect_error());
    } else {
        echo "Connection is created";
    }

    // $q = "CREATE DATABASE hellodarknessmyoldfriends";
    // mysqli_query($con, $q);

    $q_std_inf = "CREATE TABLE std_inf (
        std_id int(10) NOT NULL,
        std_name varchar(100),
        std_father varchar(100),
        std_city varchar(100),
        std_marks int(50),
        std_status varchar(10),
        primary key(std_id)
    )";
    mysqli_query($con, $q_std_inf);

    //add new colum
    // $std_q="alter table std_inf add std_country varchar(10)";
    // mysqli_query($con,$std_q);

    // $std_d="alter table std_inf drop std_country";
    // mysqli_query($con,$std_d);

    // $std_m="alter table std_inf modify std_status varchar(100)";
    // mysqli_query($con,$std_m);

    // $s="drop table std_inf";
    // mysqli_query($con,$s);

    $s="rename table std_inf to std_info"; //rename
    mysqli_query($con,$s);



    ?>
</body>
</html>
