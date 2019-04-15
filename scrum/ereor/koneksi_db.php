<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scrum";

$conn = mysqli_connect($servername,$username,$password);
if ($conn->connect_error){
    die("connection failed  : ". $conn->connect_error);
}
    echo "Connected successfully";