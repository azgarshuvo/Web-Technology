<?php
/*
function getJSONFromDB($sql){
    $conn = mysqli_connect("localhost", "root", "","homemanagement");
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    $arr=array();
    while($row = mysqli_fetch_assoc($result)) {
        $arr[]=$row;
    }
    return json_encode($arr);
}
$sql="select * from admin where adminId='02AS-tanmoy-01'";
    $jsonData= getJSONFromDB($sql);
    $arr = json_decode($jsonData, true);
    ?>

    <table border="1" align="center">
<thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
         <th>Address</th>
          <th>Phone no</th>
           <th>Email</th>
            <th>National ID</th>
               
    </tr>
</thead>    
<tbody>
<?php
    foreach($arr as $result){
        ?>
        <tr>
 
            <td><?php echo $result['firstName']; ?></td>
            <td><?php echo $result['lastName']; ?></td>
            <td><?php echo $result['gender']; ?></td>
            <td><?php echo $result['address']; ?></td>
            <td><?php echo $result['phoneNumber']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['nationalId']; ?></td>

<?php   
}
?>
</tbody>
</table>*/
$uploadOk = 1;
$first_name = $_REQUEST["firstName"];
$last_name = $_REQUEST["lastName"];
$date_of_birth = $_REQUEST["dateOfBirth"];
$gender = $_REQUEST["gender"];
$target_dir = "uploadedPhotos/";
$image_file = $target_dir . $_FILES["adminPhoto"]["name"];
$address = $_REQUEST["address"];
$phone_no = $_REQUEST["phoneNumber"];
$email = $_REQUEST["email"];
$national_id = $_REQUEST["nationalId"];
$bikash_no = $_REQUEST["bikashNumber"];
$admin_position = $_REQUEST["adminPosition"];

function updateDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}

if ($_FILES["adminPhoto"]["size"] > 500000000) {
    echo "File size exceeded<br>";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded<br>";
}
else{
	$s="Update admin set firstName='$first_name', lastName='$last_name',dateOfBirth='$date_of_birth',gender='$gender',address='$address',phoneNumber='$phone_no',email='$email',nationalId='$national_id',bikashNumber='$bikash_no' where adminId='02AS-tanmoy-01'";
    echo updateDb($s);
	 header("LOCATION:adminUpdate.php");
}


?>
<img src="<?php $image_file?>"/>
</body>
</html>