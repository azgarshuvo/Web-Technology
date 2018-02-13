<!DOCTYPE html>
<html>
<?php
session_start();
$user_id = $_REQUEST["userId"];
$new_password = $_REQUEST["newPassword"];
$confirm_password = $_REQUEST["confirmPassword"];

function insertDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}

if($new_password == $confirm_password){
	$s="Update owner set password='$new_password' where buildingOwnerId = '".$_SESSION['id']."'";
	insertDb($s);
	header("location:loginPage.php");
}
else
{
	header("location:forgetPasswordRecovery.php");
}
?>
</body>
</html>