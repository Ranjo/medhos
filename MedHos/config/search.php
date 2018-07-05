<?php
session_start();
require 'header.php';
?>
<?php
require 'dbconfig.php';
$error = "No Result";
$search = $_POST['search'];
$result =mysqli_query($conn,"SELECT patientid, firstname, surname from patient WHERE patientid = $search");

?>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/startp.css">
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
<script src="../script/jquery-1.11.0.min.js"></script>
<body>
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../adminpanel/doctor/startpage.php">Patient Record System</a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="../adminpanel/doctor/startpage.php">Main Page</a></li>
        <li><a href="../adminpanel/patient/addpatients.php">Add Patient</a></li>
        <li><a href="../adminpanel/patient/viewpatient.php">View Patient</a></li>
        <li><a href="#"><?php echo $_SESSION['login_user']?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div>
	<div>
		<div id="top" align="center" padding="50px">
						<div align="left">
				
<p class="lead "> 
	<form method="POST" action="search.php">
		<input type="text" required placeholder="Search..." name="search">
		<input type="submit" value='Search' name="Search">
</form>

</p>
			</div>
		</div>
	</div>
</div>
<div id="searchside">
  <div class="panel panel-default">
    <div class="panel-heading">Search Results</div>
      <div class="panel-body">
        <a href="../diagnosis/diagnosisfrm.php">
            <?php
            echo "<table class=' overides table'>
            <tr>

            <th>Firstname</th>
            <th>Surname</th>


            </tr>";
            if($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                echo "</tr>";
                echo "</table>";

                $_SESSION["patientid"]="$search";
                }
                else{
                   header("location: ../adminpanel/doctor/startpage.php?msg=2");
                  
                }
                
            ?>
        </a>
    </div>
</div>

 
<footer>
<div class="fixed-bottom" align="center">MedHos inc</div>
</footer>
</body>
</html>



