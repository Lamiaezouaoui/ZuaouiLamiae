<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="conges";
// Create connection
$conn = mysqli_connect ($servername , $username , $password,$dbname);
// Check connection
if (!$conn) {
    session_start();
die("Connection failed : ". mysqli_connect_error());
}

// echo "Connected successfully";
?>