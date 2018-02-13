<?php
session_start();
$first_name = $_REQUEST['updatefName'];
$last_name = $_REQUEST['updatelName'];
$email = $_REQUEST['updateEmail'];
$phone_no = $_REQUEST['updatePhoneNumber'];
$date_of_birth = $_REQUEST['updateDateOfBirth'];
$address = $_REQUEST['updateAddress'];

function updateDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}
	$s="Update owner set firstName='$first_name', lastName='$last_name',dateOfBirth='$date_of_birth',address='$address',phoneNo='$phone_no',email='$email' where buildingOwnerId LIKE '".$_SESSION["userId"]."'";
	echo updateDb($s);
	header("LOCATION:homeOwnerPage.php");
?>