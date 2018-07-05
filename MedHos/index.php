<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>

</head>
<meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="icon" href="../../favicon.ico">  
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="script/jquery-1.11.0.min.js"></script>
<body>
    <div class="medhos top">
        
        MedHos Referral Hospital
        <span class="plus">+</span>
        <div class="w3-container top div w3-right w3-hide-small w3-wide toptext">Providing Better healthcare</div>
        
    </div>
   <nav class="navbar navbar-inverse">
<div class="container-fluid">
     <div class="navbar-header">
        <a class="navbar-brand" href="#">Patient Record System</a>
     </div>
   <ul class="nav navbar-nav navbar-right">
       <li><a href="adminpanel/AdminPanel.php">Admin Panel</a></li>
     </ul>
     
</div>
</nav>
    
<div id="all">
	<div id="padd">
		<div  align="center" >
	<form  method="POST" action="config/login.php" role="form"><br>
        <table class="table">
		<tr>
        <td>
            <div class="form-group" >
            <span class="glyphicon glyphicon-user"></span><input type="text" name="docid" class="form-control" placeholder="Doctor Id">
            </div>
        </td>
		</tr>
        <tr>
        <td>
            <div class="form-group">
            <span class="glyphicon glyphicon-asterisk "></span><input type="password" class="form-control" name="password" placeholder="password">
            </div>
        </td>
        </tr>
        </table>
         <div class="form-group"> 
    
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      
    </div>
  </div>
        <p>
            <?php

    if (isset($_GET['msg'])) {
    $message = $_GET['msg'];
    if ($message == 1) {
        echo "<span style ='color: green' fontsize: '50'>successfull</span>";
        
    }
    if ($message == 2) {
        echo "<span  style ='color: red'>Invalid username or Password</span>";  
    }
}
?>
</p>
		<input type="submit" class="btn-primary btn-sm" value="Login">

        </div>
	</form>
    <?php // ?>
    
	</div>
</div>
<footer class="navbar-fixed-bottom navbar-inverse">
<div align="right" >
            <ul class="nav navbar-nav">
             <li><a class="active" href="#">MedHos inc</a></li>
            
            </ul>
        </div>

        
</footer>
</body>
</html>