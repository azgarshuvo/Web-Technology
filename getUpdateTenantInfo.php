<?php
session_start();
echo $_SESSION['loadPageForTenantdata'];
echo $_SESSION['userId'];

$first_name = $_REQUEST["firstName"];
$last_name = $_REQUEST["lastName"];
$date_of_birth = $_REQUEST["dateOfBirth"];
$gender = $_REQUEST["gender"];
$address = $_REQUEST["address"];
$phone_no = $_REQUEST["phoneNumber"];
$email = $_REQUEST["email"];
$national_id = $_REQUEST["nationalId"];
$other_member = $_REQUEST["otherMember"];


function updateDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}

	$s="Update tenant set firstName='$first_name', lastName='$last_name',dateOfBirth='$date_of_birth',gender='$gender',address='$address',phone='$phone_no',email='$email',nationalId='$national_id',otherNo='$other_member' where (buildingOwnerId LIKE '".$_SESSION['userId']."' AND tenantId LIKE '".$_SESSION['loadPageForTenantdata']."')";
    echo updateDb($s);
	header("LOCATION:homeOwnerPage.php");

?>