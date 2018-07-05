<?php 

   include('dbconfig.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select firstname from docotor where doctorid = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['firstname'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:c:/xampp/htdocs/MedHos/index.php");
   }
   
?>