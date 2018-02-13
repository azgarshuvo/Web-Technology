<?php
session_start();
echo $_SESSION["userId"];
echo $_SESSION["user"];
$securityQuestion = $_REQUEST["securityQuestion"];
$securityAnswer = $_REQUEST["securityAnswer"];
$yourPassword = $_REQUEST["yourPassword"];
function updateDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}
if($_SESSION["user"]=="homeowner")
{
	$s="Update owner set securityQuestion='".$securityQuestion."', securityAnswer='".$securityAnswer."' where ((buildingOwnerId LIKE '".$_SESSION['userId']."') AND (password LIKE '".$yourPassword."'))";
	updateDb($s);
header("LOCATION:homeOwnerPage.php");
}
if($_SESSION["user"]=="tenant")
{
	$s="Update tenant set securityQuestion='".$securityQuestion."',securityAnswer='".$securityAnswer."' where ((tenantId LIKE '".$_SESSION['userId']."') AND (password LIKE '".$yourPassword."'))";
	updateDb($s);
//header("LOCATION:homeOwnerPage.php");
}
?>