<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myuserId = mysqli_real_escape_string($db,$_POST['userId']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $ar=explode("-",$myuserId);;
	 if($ar[0].include("HO")==true)
	 {
		 $_SESSION["user"]="homeowner";
		 $_SESSION["userId"]=$_POST['userId'];
		 $_SESSION["searchTenant"]="";
		 $_SESSION["buildingData"]="";
		 unset($_SESSION['loadPageForTenantdata']);
		 $sql = "SELECT buildingOwnerId FROM owner WHERE buildingOwnerId = '$myuserId' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['buildingOwnerId'];
      $count = mysqli_num_rows($result);
      if($count == 1) {
         header("location: homeOwnerPage.php");
      }else {
         header("location: loginPage.php");
      }
	 }
	 else {
         header("location: loginPage.php");
      }
   }
?>