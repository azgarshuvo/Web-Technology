<?php
session_start();
if($_SESSION["userId"]!="")
{
    $utilitiesTenantId = $_REQUEST["utilitiesTenantId"];
	$flatId=$_REQUEST["flatId"];
	$buildingId=$_REQUEST["buildingId"];
    $houseRent= $_REQUEST["houseRentId"];
	$gasBill= $_REQUEST["gasBill"];
	$waterBill= $_REQUEST["waterBill"];
	$otherBill= $_REQUEST["otherBill"];
	$electricityBill= $_REQUEST["electricityBill"];
	$utilitiesMonth= $_REQUEST["utilitiesMonth"];
	$totalPayment=$houseRent+$gasBill+$waterBill+$electricityBill+$otherBill;	
	
function insertDb($sql){
	$connn = mysqli_connect("localhost", "root", "","homemanagement");
	$results = mysqli_query($connn, $sql)or die(mysqli_error($connn));
	return $results;
}
function updateDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}
if($_SESSION["user"]=="homeowner")
{
	$s="Update tenant set gasBill='".$gasBill."', waterBill='".$waterBill."', electricityBill='".$electricityBill."', totalPayment='".$totalPayment."',utilitiesDate='".$utilitiesMonth."',otherBill='".$otherBill."' where ((buildingOwnerId LIKE '".$_SESSION['userId']."') AND (tenantId LIKE '".$utilitiesTenantId."'))";
	echo updateDb($s);
	$s1="INSERT INTO tenantmonthlypayment (paymentDate,tenantId,buildingName,flatNo,gasBill,waterBill,electricityBill, otherBill, houseRent, totalPayment,buildingOwnerId) VALUES ('$utilitiesMonth', '$utilitiesTenantId', '$buildingId', '$flatId', '$gasBill','$waterBill', '$electricityBill','$otherBill', '$houseRent', '$totalPayment','".$_SESSION['userId']."')";
    echo insertDb($s1);
	header("Location:homeOwnerPage.php");
}
}
?>