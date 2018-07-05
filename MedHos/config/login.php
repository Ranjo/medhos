<?php
require 'dbconfig.php';
session_start();

$doctorid = $_POST['docid'];
$password = $_POST['password'];


$result = mysqli_query($conn,"SELECT * FROM docotor WHERE doctorid = $doctorid AND password = $password");

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];
$count = mysqli_num_rows($result);

if($count == 1) {
// session_register("doctorid");
	
	$_SESSION['login_user'] = $doctorid;

header("location: ../adminpanel/doctor/startpage.php");
}
else{
header("location: ../index.php?msg=2");
	
}


?>