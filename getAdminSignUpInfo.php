<!DOCTYPE html>
<html>
<?php
$uploadOk = 1;
$first_name = $_REQUEST["firstName"];
$last_name = $_REQUEST["lastName"];
$date_of_birth = $_REQUEST["dateOfBirth"];
$DOB=explode("-",$_REQUEST["dateOfBirth"]);
$gender = $_REQUEST["gender"];


$address = $_REQUEST["address"];
$phone_no = $_REQUEST["phoneNumber"];
$email = $_REQUEST["email"];
$national_id = $_REQUEST["nationalId"];
$bikash_no = $_REQUEST["bikashNumber"];
$admin_position = $_REQUEST["adminPosition"];
$target_dir = "uploadedPhotos/";
$image_file = $target_dir . $_FILES["adminPhoto"]["name"];


$admin_since=date("y-m-d");
$security_qustion="";
$security_answer="";
$password="12345";

$init;
if($admin_position=="Junior")
{
	$init="J";
}
if($admin_position=="Senior")
{
	$init="S";
}
if($admin_position=="Top")
{
	$init="T";
}
$admin_id=$DOB[2]."A".$init."-".$first_name."-".$DOB[1];
/*print_r($_FILES);

echo "$admin_id</br>";
echo "$first_name</br>";
echo "$last_name</br>";
echo "$date_of_birth </br>";
echo "$gender </br>";
echo "$address </br>";
echo "$phone_no </br>";
echo "$email </br>";
echo "$national_id </br>";
echo "$bikash_no </br>";
echo "$admin_position </br>";
echo "$image_file </br>";*/


function insertDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}
if (file_exists($image_file)) {
    echo "Sorry, file already exists<br>";
    $uploadOk = 0;
}
if ($_FILES["adminPhoto"]["size"] > 500000000) {
    echo "File size exceeded<br>";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded<br>";
}
else{
if(move_uploaded_file($_FILES["adminPhoto"]["tmp_name"], $image_file)) {
	$s="INSERT INTO admin (adminId,adminPosition, firstName, lastName, dateOfBirth, gender,adminPhoto, address, phoneNumber,email, nationalId,securityQuestion, securityAnswer,bikashNumber,adminSince,password)
	VALUES ('$admin_id','$admin_position','$first_name','$last_name','$date_of_birth','$gender','$image_file','$address','$phone_no','$email','$national_id','$security_qustion','$security_answer','$bikash_no','$admin_since','$password')";
    echo insertDb($s);
}
}

?>
<img src="<?php $image_file?>"/>
</body>
</html>
