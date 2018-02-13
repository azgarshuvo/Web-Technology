<html>
<?php
session_start();
$uploadOk = 1;
$first_name = $_REQUEST["tenantfirstName"];
$last_name = $_REQUEST["tenantlastName"];
$date_of_birth = $_REQUEST["tenantdateOfBirth"];
$DOB=explode("-",$_REQUEST["tenantdateOfBirth"]);
$gender = $_REQUEST["tenantgender"];
$target_dir = "uploadedPhotos/";
$image_file = $target_dir . $_FILES["tenantuserPhoto"]["name"];
$address = $_REQUEST["tenantaddress"];
$phone_no = $_REQUEST["tenantphoneNumber"];
$email = $_REQUEST["tenantmail"];
$national_id = $_REQUEST["tenantnationalId"];
$other_member = $_REQUEST["tenantotherMember"];
$building_name = $_REQUEST["tenantbuildingName"];
$flat_no = $_REQUEST["tenantflatNo"];
$flat_rent = $_REQUEST["tenantflatRent"];
$rent_start_date = $_REQUEST["tenantrentStartDate"];
$advance_payment = $_REQUEST["tenantadvPayment"];
$tanent_id = $DOB[2]."T-".$first_name."-".$DOB[1];
$payment_status = "..";
$gas_bill = "..";
$water_bill = "..";
$electricity_bill = "..";
$other_bill = ".."; 
$total_payment = "..";
$leave_date = "0000-00-00";
$security_question = "..";
$security_answer = "..";
$password = "12345";
$building_owner_id = $_SESSION["userId"];
$_SESSION["NewTenantId"]=$tanent_id;


function insertDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}
function updateDb($sql){
	$conn1 = mysqli_connect("localhost", "root", "","homemanagement");
	$result1 = mysqli_query($conn1, $sql)or die(mysqli_error($conn1));
	return $result1;
}
if (file_exists($image_file)) {
       $uploadOk = 0;
	echo "<script > alert('file already exists');
window.location.href='tenantSignUp.php';
 </script>";
		

}
if ($_FILES["tenantuserPhoto"]["size"] > 1000000000) {
	$uploadOk = 0;
    echo "<script > alert('file Size Exceeds limit');
window.location.href='tenantSignUp.php';
 </script>";
    
}
if ($uploadOk == 0) {
    echo "<script > alert('sorry the file was not uploaded');
window.location.href='tenantSignUp.php';
 </script>";
}
else
{
    
	     if((move_uploaded_file($_FILES["tenantuserPhoto"]["tmp_name"], $image_file))&&((strpos($first_name, '1') == false)&&(strpos($first_name, '2') == false)&&(strpos($first_name, '3') == false)&&(strpos($first_name, '4') == false)&&(strpos($first_name, '5') == false)&&(strpos($first_name, '6') == false)&&(strpos($first_name, '7') == false)&&(strpos($first_name, '8') == false)&&(strpos($first_name, '9') == false)&&(strpos($first_name, '0')==false))&&((strpos($last_name, '1') == false)&&(strpos($last_name, '2') == false)&&(strpos($last_name, '3') == false)&&(strpos($last_name, '4') == false)&&(strpos($last_name, '5') == false)&&(strpos($last_name, '6') == false)&&(strpos($last_name, '7') == false)&&(strpos($last_name, '8') == false)&&(strpos($last_name, '9') == false)&&(strpos($last_name, '0')==false))&&(strlen($phone_no)==11)) {
       
	   $s="INSERT INTO tenant (tenantId, firstName, lastName, dateOfBirth, gender, tenantPhoto, address, email, phone, nationalId, paymentStatus, houseRent, gasBill, waterBill, electricityBill, otherBill, totalPayment, rentDate, leaveDate, securityQuestion, securityAnswer, password, buildingNo, flatNo, otherNo, buildingOwnerId, advancePayment)
	    VALUES ('$tanent_id', '$first_name', '$last_name', '$date_of_birth', '$gender', '$image_file', '$address', '$email', '$phone_no',  '$national_id', '$payment_status', '$flat_rent', '$gas_bill', '$water_bill', '$electricity_bill', '$other_bill', '$total_payment', '$rent_start_date', '$leave_date', '$security_question', '$security_answer', '$password', '$building_name', '$flat_no', '$other_member', '$building_owner_id', '$advance_payment')";
        $a=insertDb($s);
		
		$s1="Update ftatinformation set tenantId='".$_SESSION["NewTenantId"]."' where ((buildingOwnerId LIKE '".$_SESSION['userId']."') AND (uniqueFlat LIKE '".$_SESSION["tenantFlatIdForm"]."'))";
	    $b=updateDb($s1);
		if($a!=0&&$b!=0){
				echo "<script >
				window.location.href='successfullyAddedTenant.php';
				//window.location.href='LoadPage.php';
				</script>";
		}
        }
		else
		{
			header("location:tenantSignUp.php"); 
		}
    }


?>
</body>
</html>
