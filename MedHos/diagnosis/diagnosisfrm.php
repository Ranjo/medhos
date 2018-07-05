<?php
session_start();
?>
<?php 
require '../config/dbconfig.php';
$patientid=$_SESSION["patientid"];

$sql4="SELECT * FROM diagnosis where patientid= '$patientid'";
$result4 = mysqli_query($conn,$sql4);

$genquery=mysqli_query($conn,"SELECT * FROM patient where patientid= '$patientid'");
$genresult=mysqli_fetch_assoc($genquery);

if (!$patientid) {
	header("location: ../adminpanel/doctor/startpage.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Diagnosis Form</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/diagnosis.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.min.js"></script>
<script src="../script/jquery-1.11.0.min.js"></script>

<body >
	<?php include('../config/header.php'); ?>
<div class="bground" >
<div ><span class="fleft" title="Exit"><a class="fleft" href="../config/clearsession.php">&times;</a></span> </div>
  	<div class="patdet">
      <table class="table">
          <tr>
              <th width="6%">&nbsp;</th>
              <th width="15%">&nbsp;</th>
              <th width="6%">&nbsp;</th>
              <th width="15%">&nbsp;</th>
          </tr>
          <tr>
               <td>patient id:</td>
               <td><?php echo $patientid; ?></td>
               <td>DOB:</td>
               <td><?php   echo $genresult['dob']; ?></td>
          </tr>
          <tr>
               <td>Name:</td><td><?php echo $genresult['surname'] ;echo " "; echo $genresult['firstname']; echo " "; echo $genresult['othername'];   ?></td>
               <td>Date:</td><td><?php echo $genresult['datecreated']; ?></td>
          </tr>
      </table>
    </div>

    
    <div class="prevhist">
	    
        <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">View Previous Medical History</a>
       
    </div>
    <div id="id01" class="modal">
   
   <span onclick="document.getElementById('id01').style.display='none'" class="closes" title="Close Page">&times;   
   </span>
<div class="modal-content">
  <table class="table table-hover table-striped">

      <tr class="success">
	      <th>No</th>
	      <th>Date</th>
	      <th>Final Diagnosis</th>
	
      </tr>
                 <?php
                 $no= 1;
                 while($row = mysqli_fetch_array($result4)){
                 echo '<tr>
                        <td>'.$no.'</td>
                        <td> '.$row['datev'].' </td>
                        <td> '.$row['finaldiagnosis'].' </td>
                       </tr>';
                 $no++;
    
                 }
                 ?>
  </table>
</div>
    </div>

<div class="sided">
   <form method="POST" action="../config/diagno.php" >
   	<div>
      <div class="form-group">
      
        <legend>Symptoms</legend>
        <textarea class="form-control" required rows="4" name="symptoms"></textarea>
      
      </div>
      
      <div class="form-group">
        <legend>Final Diagnosis</legend>
        <textarea class="form-control" required rows="4" name="finaldiagnosis"></textarea>
      </div>
      <div class="form-group">
      	<legend>Medicine Prescription</legend>
         <textarea class="form-control" required rows="4" name="medprescription"></textarea>
      </div>
      <div align="center" class="clearfix">
         <button type="submit" class="savebtn" name="save">Save</button>
         <button type="button" class="closebtn" name="Close">Close</button>
      </div>
    </div> 
   </form>
</div>

</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



</body>
</html>
