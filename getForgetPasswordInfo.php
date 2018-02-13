<!DOCTYPE html>
<html>
<?php

$user_id = $_REQUEST["userId"];
$security_question = $_REQUEST["securityQuestion"];
$security_answer = $_REQUEST["answer"];

echo "$user_id </br>";
echo "$security_question </br>";
echo "$security_answer </br>";


function getJSONFromDB($sql){
    $conn = mysqli_connect("localhost", "root", "","homemanagement");
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    $arr=array();
    while($row = mysqli_fetch_assoc($result)) {
        $arr[]=$row;
    }
    return json_encode($arr);
}
$sql="select * from owner where buildingOwnerId='$user_id' AND securityAnswer = '$security_answer' AND securityQuestion='$security_question'";
    $jsonData= getJSONFromDB($sql);
    $arr = json_decode($jsonData, true);
	if($arr == null){
		header("location:forgetPassword.php");
	}
	else{
		session_start();
		$_SESSION['id']=$user_id;
		header("location:forgetPasswordRecovery.php");
		
	}
?>
</body>
</html>
