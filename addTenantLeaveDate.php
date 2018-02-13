<?php
session_start();
if($_SESSION["userId"]!="")
{
	$leaveTenantId = $_REQUEST["leaveTenantId"];
	$tenantleavedate=$_REQUEST["tenantleavedate"];
function updateDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}
if($_SESSION["user"]=="homeowner")
{
	$s="Update tenant set leaveDate='".$tenantleavedate."' where ((buildingOwnerId LIKE '".$_SESSION['userId']."') AND (tenantId LIKE '".$leaveTenantId."'))";
	updateDb($s);
	$s="Update ftatinformation set leaveDate='".$tenantleavedate."' where ((buildingOwnerId LIKE '".$_SESSION['userId']."') AND (tenantId LIKE '".$leaveTenantId."'))";
	updateDb($s);
	header("Location:homeOwnerPage.php");
}
}
?>