<?php 
include 'koneksi.php';

$story = $_POST['Story'];
$task = $_POST['Task1'];
$task2 = $_POST['Task2'];

mysql_query("insert into user values('$story','$task','$task2')");

