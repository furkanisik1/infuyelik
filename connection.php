<?php

$host="localhost";
$admin="root";
$admin_password="";
$db="infuyelik";


$connection = mysqli_connect($host, $admin, $admin_password, $db);
mysqli_set_charset($connection, "UTF8");


?>