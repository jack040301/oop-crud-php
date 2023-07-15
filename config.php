<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "dost_db";


 $db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db)
    die("database error: " . mysqli_connect_error());
 



