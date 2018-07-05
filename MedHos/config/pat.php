<?php
require 'dbconfig.php';
$idno=$_POST['idno'];
//$docid=$_POST['docid'];
//$hospitalid=$_POST['hosid'];
$dob=$_POST['dob'];
$firstname=$_POST['firstname'];
$surname=$_POST['surname'];
$othername=$_POST['othername'];
$phoneno=$_POST['phoneno'];
$emailadd=$_POST['emailadd'];
$homeadd=$_POST['address'];
//$password=md5($_POST['pass']);
//$status="";
//$conpass=$_POST['conpass'];

	
	if (!$conn) {
	echo "could not connect";
				}
else{

//if ($password==$conpass) {
		$result=mysqli_query($conn,"INSERT INTO patient(dob,nationalid, surname, firstname, othername, phone, emailadress, address) VALUES('$dob', '$idno', '$surname', '$firstname', '$othername', '$phoneno', '$emailadd', '$homeadd')");
			if(!$result){
				//	$status ="Null";
				
				header("location: ../adminpanel/patient/addpatients.php?msg=2");
			}
			else{
				//$status ="successfull";
				header("location: ../adminpanel/patient/addpatients.php?msg=1");
			}
//}


//else{
//header("location: adddoctor.php?msg=3");
//}
}
?>