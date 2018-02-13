<?php
session_start();
$buildingName=$_REQUEST['buildingName'];
$address=$_REQUEST['address'];
$totalFlat=$_REQUEST['totalFlat'];
$buildingId=$totalFlat.$_SESSION['userId']."-".$buildingName;
$_SESSION['newBuildingId']=$buildingId;
$_SESSION['newBuildingAddress']=$address;
$_SESSION['newTotalFlats']=$totalFlat;
$_SESSION['newBuildingName']=$buildingName;

$take=0;
	
  function insertDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}

if (((strpos($totalFlat, 'a') == true)||(strpos($totalFlat, 'b') == true)||(strpos($totalFlat, 'c') == true)||(strpos($totalFlat, 'd') == true)||(strpos($totalFlat, 'e') == true)||(strpos($totalFlat, 'f') == true)||(strpos($totalFlat, 'g') == true)||(strpos($totalFlat, 'h') == true)||(strpos($totalFlat, 'i') == true)||(strpos($totalFlat, 'j') == true)||(strpos($totalFlat, 'k') == true)||(strpos($totalFlat, 'l') == true)||(strpos($totalFlat, 'm') == true)||(strpos($totalFlat, 'n') == true)||(strpos($totalFlat, 'o') == true)||(strpos($totalFlat, 'p') == true)||(strpos($totalFlat, 'q') == true)||(strpos($totalFlat, 'r') == true)||(strpos($totalFlat, 's') == true)||(strpos($totalFlat, 't') == true)||(strpos($totalFlat, 'u') == true)||(strpos($totalFlat, 'v') == true)||(strpos($totalFlat, 'w') == true)||(strpos($totalFlat, 'x') == true)||(strpos($totalFlat, 'y') == true)||(strpos($totalFlat, 'z') == true))||(strlen($buildingName)<3)||(strlen($address)<8)) {
    header("location:addBuilding.php");
}
else{
$s1="INSERT INTO building (buildingId, buildingName, buildingOwnerId,address,totalFlats)
	VALUES ('$buildingId', '$buildingName', '".$_SESSION['userId']."', '$address','$totalFlat')";
	$take=insertDb($s1);
}
	
	
    if($take ==1)
	{ 
echo "<script > alert('message successfully sent');
window.location.href='addFlat.php';
 </script>";
		
	}


?>


