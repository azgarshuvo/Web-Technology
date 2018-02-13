<?php
session_start();
$_SESSION['searchTenant']=$_REQUEST['searchTenant'];
echo $_SESSION['searchTenant'];
header("Location:homeOwnerPage.php");
?>