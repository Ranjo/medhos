<?php
$localhost="localhost";
$root="root";
$pass="";
$db="patientrec";
$conn=mysqli_connect($localhost,$root,$pass,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>