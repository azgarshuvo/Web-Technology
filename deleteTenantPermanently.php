<?php
session_start();
function deleteDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}
$s1="Update ftatinformation set tenantId='' WHERE (tenantId LIKE '".$_SESSION['loadPageForTenantdata']."' AND buildingOwnerId = '".$_SESSION['userId']."')";
 $a=deleteDb($s1);
 if($a!=0)
 {$s="DELETE FROM tenant WHERE (tenantId LIKE '".$_SESSION['loadPageForTenantdata']."' AND buildingOwnerId = '".$_SESSION['userId']."')";
$c=deleteDb($s);
$s2="DELETE FROM tenantmonthlypayment WHERE (tenantId LIKE '".$_SESSION['loadPageForTenantdata']."' AND buildingOwnerId = '".$_SESSION['userId']."')";
$b=deleteDb($s2);
if($c!=0&&$b!=0)
{
	header("Location:LoadPage.php");
}
 }
?>