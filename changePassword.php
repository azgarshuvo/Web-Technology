<?php
session_start();
echo $_SESSION["userId"];
$oldPassword = $_REQUEST["oldPassword"];
$newPassword = $_REQUEST["newPassword"];
function updateDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}
if($_SESSION["user"]=="homeowner")
{
	$s="Update owner set password='".$newPassword."' where ((buildingOwnerId LIKE '".$_SESSION['userId']."') AND (password LIKE '".$oldPassword."'))";
	updateDb($s);
}
if($_SESSION["user"]=="tenant")
{
	$s="Update tenant set password='".$newPassword."' where ((tenantId LIKE '".$_SESSION['userId']."') AND (password LIKE '".$oldPassword."'))";
	updateDb($s);
}
	header("LOCATION:loginPage.php");
?>