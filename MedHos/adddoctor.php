<?php include('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title> Admin Panel</title>
</head>
<link rel="stylesheet" type="text/css" href="ind.css">
<link rel="stylesheet" type="text/css" href="dpdown.css">
<link rel="stylesheet" type="text/css" href="panel.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/jquery-1.11.0.min.js"></script>

<body>
	<?php session_start(); ?>
<script type="text/javascript">
	function formValidate(){
	var pass = document.forms["docregform"]["pass"].value;
	var conpass = document.forms["docregform"]["conpass"].value;
	if (pass==conpass) {
		return true;
	}
else{
	alert("Password Dont Match");
	return false;
	
}

	}

</script>
<nav class="panel panel-default">Add Doctor</nav>
<div class="contaner">
	<div id="sidebar" class="dropdown">
  
	</div>
	<div id="navsection">
<form  name="docregform" method="POST" action="config/doc.php" autocomplete="on" onsubmit="return formValidate()">
<p><?php

if (isset($_GET['msg'])) {
	$message = $_GET['msg'];
	if ($message == 1) {
		echo "<span style ='color: green' fontsize: '50'>successfull</span>";
		
	}
	if ($message == 2) {
	echo "<span  style ='color: red'>Invalid username or Password</span>";	
	}
}
?></p>
	
	<div >
		<div>
			<div align="left">
             <fieldset><strong>Register Doctor</strong>
			 <table id="centdiv" width="427" border="0">
			  <tr>
			    <td>&nbsp;</td>
			    <td>Doctor</td>
			  </tr>
			  <tr>
			    <td>Id No</td>
			    <td><input type="text" required  placeholder="Id No" autofocus name="idno"/></td>
			  </tr>
			<tr>
			<td>Doctor Id</td>
			<td><input type="text"  name="docid"></td>
			</tr>
			<tr>
			<td>Hospital Id</td>
			<td><input type="text" required name="hosid"></td>
			</tr>
			  <tr>
			    <td>Firstname</td>
			    <td><input type="text" required  placeholder="First name" name="firstname"/></td>
			  </tr>
			  <tr >
			    <td>Surname</td>
			    <td><input type="text" required  placeholder="Surname" name="surname"/></td>
			  </tr>
			   <tr>
			    <td>Othername</td>
			    <td><input type="text" required  placeholder="Othername" name="othername"/></td>
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
			<td>Home Address</td>
			<td><input type="text" required placeholder="Home address" name="address"></td>

			</tr>
	
			<tr>
			    <td>Password</td>
			    <td><input type="password" required placeholder="Password" name="pass" /></td>
			  </tr>
			  <tr>
			    <td>Confirm Password</td>
			    <td><input type="password" required placeholder="Confirm Password" name="conpass"/></td>
			  </tr>
			  <tr>
			  	<td></td><td>
			  		<p >
			  		<?php

					if (isset($_GET['msg'])) {
					$message = $_GET['msg'];
						if ($message == 3) {
							echo "<span style ='color: red'>Password do not match</span>";	
						}
							if ($message == 4 ) {
								echo "<span  style ='color: red'>Invalid username or Password</span>";	
							}
					}
					?>
						
					</p>
					</td>
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