<!DOCTYPE html>
<html>
<?php
$uploadOk = 1;
$first_name = $_REQUEST["tenantSignfirstName"];
$last_name = $_REQUEST["tenantSignlastName"];
$date_of_birth = $_REQUEST["tenantSigndateOfBirth"];
$DOB=explode("-",$_REQUEST["tenantSigndateOfBirth"]);
$gender = $_REQUEST["tenantSigngender"];
$target_dir = "uploadedPhotos/";
$image_file = $target_dir . $_FILES["tenantSignuserPhoto"]["name"];
$address = $_REQUEST["tenantSignaddress"];
$phone_no = $_REQUEST["tenantSignphoneNumber"];
$email = $_REQUEST["tenantSignemail"];
$national_id = $_REQUEST["tenantSignnationalId"];
$other_member = $_REQUEST["tenantSignotherMember"];
$building_name = $_REQUEST["tenantSignbuildingName"];
$flat_no = $_REQUEST["tenantSignflatNo"];
$flat_rent = $_REQUEST["tenantSignflatRent"];
$rent_start_date = $_REQUEST["tenantSignrentStartDate"];
$advance_payment = $_REQUEST["tenantSignadvPayment"];
$tanent_id = $DOB[2]."T-".$first_name."-".$DOB[1];
$payment_status = "..";
$gas_bill = "..";
$water_bill = "..";
$electricity_bill = "..";
$other_bill = ".."; 
$total_payment = "..";
$leave_date = "..";
$security_question = $_REQUEST["tenantSignsecurityQuestion"];
$security_answer = $_REQUEST["tenantSignsecurityAnswer"];
$password =$_REQUEST["tenantSignpassword"];
$building_owner_id = "..";
$confirm_password=$_REQUEST["tenantSignconfirmPassword"];


/*echo "$first_name</br>";
echo "$last_name</br>";
echo "$date_of_birth</br>";
echo "$gender</br>";
echo "$image_file</br>";
echo "$address</br>";
echo "$phone_no</br>";
echo "$email</br>";
echo "$national_id</br>";
echo "$other_member</br>";
echo "$building_name</br>";
echo "$flat_no</br>";
echo "$flat_rent</br>";
echo "$rent_start_date</br>";
echo "$advance_payment</br>";
echo "$tanent_id</br>";
echo "$payment_status</br>";
echo "$gas_bill</br>";
echo "$water_bill</br>";
echo "$electricity_bill</br>";
echo "$other_bill</br>"; 
echo "$total_payment</br>";
echo "$leave_date</br>";
echo "$security_question</br>";
echo "$security_answer</br>";
echo "$password</br>";
echo "$building_owner_id</br>"; */



function insertDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}
if (file_exists($image_file)) {
    echo "Sorry, file already exists<br>";
    $uploadOk = 0;
}
if ($_FILES["tenantSignuserPhoto"]["size"] > 500000000) {
    echo "File size exceeded<br>";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded<br>";
}
else{
if((move_uploaded_file($_FILES["tenantSignuserPhoto"]["tmp_name"], $image_file))&&((strpos($first_name, '1') == false)&&(strpos($first_name, '2') == false)&&(strpos($first_name, '3') == false)&&(strpos($first_name, '4') == false)&&(strpos($first_name, '5') == false)&&(strpos($first_name, '6') == false)&&(strpos($first_name, '7') == false)&&(strpos($first_name, '8') == false)&&(strpos($first_name, '9') == false)&&(strpos($first_name, '0')==false))&&((strpos($last_name, '1') == false)&&(strpos($last_name, '2') == false)&&(strpos($last_name, '3') == false)&&(strpos($last_name, '4') == false)&&(strpos($last_name, '5') == false)&&(strpos($last_name, '6') == false)&&(strpos($last_name, '7') == false)&&(strpos($last_name, '8') == false)&&(strpos($last_name, '9') == false)&&(strpos($last_name, '0')==false))&&(strlen($phone_no)==11)&&((strlen($password)>6) && ((strpos($password,'@') == true) || (strpos($password,'$') == true) || (strpos($password,'!') == true) || (strpos($password,'#') == true) ||(strpos($password,'%') == true) || (strpos($password,'&') == true) || (strpos($password,'*') == true)))&&(strcmp($password,$confirm_password)==0))  { 
	$s="INSERT INTO tenant (tenantId, firstName, lastName, dateOfBirth, gender, tenantPhoto, address, email, phone, nationalId, paymentStatus, houseRent, gasBill, waterBill, electricityBill, otherBill, totalPayment, rentDate, leaveDate, securityQuestion, securityAnswer, password, buildingName, flatNo, otherNo, buildingOwnerId, advancePayment)
	VALUES ('$tanent_id', '$first_name', '$last_name', '$date_of_birth', '$gender', '$image_file', '$address', '$email', '$phone_no',  '$national_id', '$payment_status', '$flat_rent', '$gas_bill', '$water_bill', '$electricity_bill', '$other_bill', '$total_payment', '$rent_start_date', '$leave_date', '$security_question', '$security_answer', '$password', '$building_name', '$flat_no', '$other_member', '$building_owner_id', '$advance_payment')";
    echo insertDb($s);
}
else
{
	header("location:tenantSignUpForSelection.php"); 
}

}

?>
</body>
</html>
