 <?php
 session_start();
 function getTenantInfoFromDB(){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$arr=array();
	if(($_SESSION["buildingData"]=="All")||($_SESSION["buildingData"]==""))
	{$result = mysqli_query($conn, "select * from tenant where buildingOwnerId LIKE '".$_SESSION["userId"]."'")or die(mysqli_error($conn));
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	}
	else
	{
	$result = mysqli_query($conn, "select * from tenant where (buildingOwnerId LIKE '".$_SESSION["userId"]."') AND ( buildingNo LIKE '".$_SESSION["buildingData"]."')")or die(mysqli_error($conn));
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}	
	}
	mysqli_close($conn);
	return json_encode($arr);
}
 function getSpecificTenantInfoFromDB(){
	$conn2 = mysqli_connect("localhost", "root", "","homemanagement");
	$result2 = mysqli_query($conn2, "select * from tenant where (tenantId LIKE '%".$_SESSION['searchTenant']."%') OR (firstName LIKE '%".$_SESSION['searchTenant']."%') OR (lastName LIKE '%".$_SESSION['searchTenant']."%')")or die(mysqli_error($conn2));
	$arr2=array();
	while($row2 = mysqli_fetch_assoc($result2)) {
		$arr2[]=$row2;
	}
	mysqli_close($conn2);
	return json_encode($arr2);
}
 function getDetailsTenantInfoFromDB(){
	$conn7 = mysqli_connect("localhost", "root", "","homemanagement");
	$result7 = mysqli_query($conn7, "select * from tenant where (tenantId LIKE '%".$_SESSION['loadPageForTenantdata']."%')")or die(mysqli_error($conn7));
	$arr7=array();
	while($row7 = mysqli_fetch_assoc($result7)) {
		$arr7[]=$row7;
	}
	mysqli_close($conn7);
	return json_encode($arr7);
}
 function getOwnerInfoFromDB(){
	$conn1= mysqli_connect("localhost", "root", "","homemanagement");
	$result1 = mysqli_query($conn1, "select * from owner where buildingOwnerId LIKE '".$_SESSION["userId"]."'")or die(mysqli_error($conn1));
	$owner=array();
	while($row1 = mysqli_fetch_assoc($result1)) {
		$owner[]=$row1;
	}
	mysqli_close($conn1);
	return json_encode($owner);
}
 function getBuildingInfoFromDB(){
	$conn3= mysqli_connect("localhost", "root", "","homemanagement");
	$result3 = mysqli_query($conn3, "select * from building where buildingOwnerId LIKE '".$_SESSION["userId"]."'")or die(mysqli_error($conn3));
	$buildings=array();
	while($row3 = mysqli_fetch_assoc($result3)) {
		$buildings[]=$row3;
	}
	mysqli_close($conn3);
	return json_encode($buildings);
}
 function getFlatInfoFromDB(){
	$conn4= mysqli_connect("localhost", "root", "","homemanagement");
	$result4 = mysqli_query($conn4, "select * from ftatinformation where buildingOwnerId LIKE '".$_SESSION["userId"]."' AND (tenantId ='' OR leaveDate !='0000-00-00')")or die(mysqli_error($conn4));
	$flats=array();
	while($row4 = mysqli_fetch_assoc($result4)) {
		$flats[]=$row4;
	}
	mysqli_close($conn4);
	return json_encode($flats);
}
 function getFlatDetailsFromDB(){
	$flatconn= mysqli_connect("localhost", "root", "","homemanagement");
	$resultF = mysqli_query($flatconn, "select * from ftatinformation where buildingOwnerId LIKE '".$_SESSION["userId"]."' AND buildingId LIKE '".$_SESSION["allFlatDetailsInfo"]."'")or die(mysqli_error($flatconn));
	$flatF=array();
	while($rowF = mysqli_fetch_assoc($resultF)) {
		$flatF[]=$rowF;
	}
	mysqli_close($flatconn);
	return json_encode($flatF);
}
function getTenantMonthlyPaymentFromDB()
{
	$connInfo= mysqli_connect("localhost", "root", "","homemanagement");
	$resultInfo = mysqli_query($connInfo, "select * from tenantmonthlypayment where ( buildingOwnerId LIKE '".$_SESSION["userId"]."' AND tenantId LIKE '".$_SESSION['tenantMonthlyPaymentId']."')")or die(mysqli_error($connInfo));
	$monthlyPayment=array();
	while($rowInfo = mysqli_fetch_assoc($resultInfo)) {
		$monthlyPayment[]=$rowInfo;
	}
	mysqli_close($connInfo);
	return json_encode($monthlyPayment);
}
?>