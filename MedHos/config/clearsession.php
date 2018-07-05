<?php
session_start();
unset($_SESSION["patientid"]);
header('location:../adminpanel/doctor/startpage.php');
 

?>