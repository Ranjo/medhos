<?php
require 'dbconfig.php';

$hospitalname=$_POST['hosname'];
$phoneno=$_POST['phoneno'];
$emailadd=$_POST['emailadd'];
$hosadd=$_POST['address'];
//$password=md5($_POST['pass']);
//$status="";
//$conpass=$_POST['conpass'];

	
	if (!$conn) {
	echo "could not connect";
				}
else{

//if ($password==$conpass) {
		$result=mysqli_query($conn,"INSERT INTO hospital(hospitalname, phoneno, emailaddress, address) VALUES('$hospitalname', '$phoneno', '$emailadd', '$hosadd')");
			if(!$result){
				//	$status ="Null";
				
				header("location: ../adminpanel/hospital/addhospital.php?msg=2");
			}
			else{
				//$status ="successfull";
				header("location: ../adminpanel/hospital/addhospital.php?msg=1");
			}
//}


//else{
//header("location: adddoctor.php?msg=3");
//}
}
?>