<?php
$uploadOk = 1;
$first_name = $_REQUEST["firstName"];
$last_name = $_REQUEST["lastName"];
$date_of_birth = $_REQUEST["dateOfBirth"];
$DOB=explode("-",$_REQUEST["dateOfBirth"]);
$gender = $_REQUEST["gender"];
$target_dir = "uploadedPhotos/";
$image_file = $target_dir . $_FILES["userPhoto"]["name"];
$address = $_REQUEST["address"];
$phone_no = $_REQUEST["phoneNumber"];
$email = $_REQUEST["mail"];
$nationalId = $_REQUEST["nationalId"];
$password = $_REQUEST["password"];
$confirm_password = $_REQUEST["confirmPassword"];
$security_question = $_REQUEST["securityQuestion"];
$security_answer = $_REQUEST["securityAnswer"];
$registration_Date=date("y-m-d");
$owner_id=$DOB[2]."HO-".$first_name."-".$DOB[1];

function insertDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}
if (file_exists($image_file)) {
    
    $uploadOk = 0;
	echo "<script > alert('sorry the file already exsist');
window.location.href='SignUpForm.php';
 </script>";
}
if ($_FILES["userPhoto"]["size"] > 1000000000) {
    
    $uploadOk = 0;
	echo "<script > alert('file size exceeded');
window.location.href='SignUpForm.php';
 </script>";
}
if ($uploadOk == 0) {
    echo "<script > alert('sorry the file was not uploaded');
window.location.href='SignUpForm.php';
 </script>";
}
else
   {
  if((move_uploaded_file($_FILES["userPhoto"]["tmp_name"], $image_file)==true)&&((strpos($first_name, '1') == false)&&(strpos($first_name, '2') == false)&&(strpos($first_name, '3') == false)&&(strpos($first_name, '4') == false)&&(strpos($first_name, '5') == false)&&(strpos($first_name, '6') == false)&&(strpos($first_name, '7') == false)&&(strpos($first_name, '8') == false)&&(strpos($first_name, '9') == false)&&(strpos($first_name, '0')==false))&&((strpos($last_name, '1') == false)&&(strpos($last_name, '2') == false)&&(strpos($last_name, '3') == false)&&(strpos($last_name, '4') == false)&&(strpos($last_name, '5') == false)&&(strpos($last_name, '6') == false)&&(strpos($last_name, '7') == false)&&(strpos($last_name, '8') == false)&&(strpos($last_name, '9') == false)&&(strpos($last_name, '0')==false))&&(strlen($phone_no)==11)&&((strlen($password)>6) && ((strpos($password,'@') == true) || (strpos($password,'$') == true) || (strpos($password,'!') == true) || (strpos($password,'#') == true) ||(strpos($password,'%') == true) || (strpos($password,'&') == true) || (strpos($password,'*') == true)))&&(strcmp($password,$confirm_password)==0))
  {
	$s="INSERT INTO owner (buildingOwnerId, firstName, lastName, dateOfBirth, gender,userPhotoAddress, address, phoneNo, email, nationalId, registrationDate, leaveDate,securityQuestion, securityAnswer, password,)
	VALUES ('$owner_id', '$first_name', '$last_name', '$date_of_birth', '$gender','$image_file', '$address', '$phone_no', '$email', '$nationalId', '$registration_Date', '0000-00-00', '$security_question', '$security_answer', '$password')";
    echo insertDb($s);
   }
   else
		{
			header("location:signUpForm.php"); 
		}
    }
?>
