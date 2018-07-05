<?php //include ("../../config/session.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title> Add Hospital</title>
</head>
<link rel="stylesheet" type="text/css" href="../../css/ind.css">
<link rel="stylesheet" type="text/css" href="../../css/dpdown.css">
<link rel="stylesheet" type="text/css" href="../../css/panel.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.min.css">
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../script/jquery-1.11.0.min.js"></script>

<body>
	<?php // session_start(); ?>
<nav class="panel panel-default">Add Doctor</nav>
<div class="contaner">
	<div id="sidebar" class="col-md-3">
 
	</div>
	<div id="navsection" class="col-md-3">
<form  name="hosregform" method="POST" action="../../config/hos.php" autocomplete="on" >
<p><?php

if (isset($_GET['msg'])) {
	$message = $_GET['msg'];
	if ($message == 1) {
		echo "<span style ='color: green' fontsize: '50'>successfull</span>";
		
	}
	if ($message == 2) {
	echo "<span  style ='color: red'>Could not add patient</span>";	
	}
}
?></p>
	
	<div >
		<div>
			<div align="left">
             <fieldset><strong>Register Hospital</strong>
			 <table id="centdiv" width="427" border="0">
			  <tr>
			    <td>&nbsp;</td>
			    <td>Hospital Details</td>
			  </tr>
			 
			<tr>
			<td>Hospital ID</td>
			<td><input type="text"  name="hosid"></td>
			</tr>
			<tr>
			    <td>Hospital Name</td>
			    <td><input type="text" required  placeholder="Hospital Name" autofocus name="hosname"/></td>
			  </tr>
			  <tr>
			<td>Phone Number</td>
			<td><input type="text" required placeholder="Phone Number" name="phoneno"></td>
			</tr>
			  <tr>
			    <td>Email Address</td>
			    <td><input type="email" required  placeholder="Email address" name="emailadd"/></td>
			  </tr>
			<tr>
			<td>Hospital Address</td>
			<td><input type="text" required placeholder="Home address" name="address"></td>

			</tr>
			  
			</table>

<input type="submit" id="padiv" class="btn-large" value="Register">
</fieldset>
			</div>
		</div>
	</div>
	
</form>
	</div>
</div>
</body>
</html>