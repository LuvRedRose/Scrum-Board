<?php
session_start();
include "koneksi_db.php";

$story = $_post['Stories'];
$task = $_post['Task'];
$query = "insert into scrum values ('$story','$task')";
$exe=mysql_query($query);
echo "data berhasil disimpan";