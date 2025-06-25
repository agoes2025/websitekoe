<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database_name = "db_monggo";

$conn = mysqli_connect($hostname, $username, $password, $database_name);  

if ($conn->connect_error) {
    echo "koneksi terjadi masalah";
    die("error!!!");
}
    echo "";
?>
