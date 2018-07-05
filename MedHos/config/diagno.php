<?php
session_start();
require 'dbconfig.php';
$patientid=$_SESSION['patientid'];
$symptoms=$_POST['symptoms'];
//$labtest=$_POST['labtest'];
$finaldiagnosis=$_POST['finaldiagnosis'];
$medprescription=$_POST['medprescription'];
/* ********************************/
if (!$conn) {
	echo "could not connect";
				}
else{
$result=mysqli_query($conn,"INSERT INTO diagnosis(patientid,symptoms,finaldiagnosis,medprescription)
	Values('$patientid','$symptoms','$finaldiagnosis','$medprescription')");
if (!$result) {
	echo "Not Successfull";
}else{
	header("location: ../diagnosis/diagnosisfrm.php");
}
}

?> 