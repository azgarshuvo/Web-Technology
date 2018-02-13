<!DOCTYPE html>
<html >
<head>
  <title>Update Info</title>
      <link rel="stylesheet" href="css/adminUpdateStyle.css">
</head>
<body>
<?php
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
	
	<?php
    foreach($arr as $result){
        ?>
	
  <div class="cont">
  <div class="demo">
    <div class="signUp">
      <div class="home__management">Update Admin Info</div>
      <div class="signUp__form">
	  <form action="getAdminUpdateInfo.php" method="post" name="frm" id="frm" enctype="multipart/form-data">
        <div class="signUp__row">
          First Name :
	<input type="text" class="signUp__input name" placeholder="First Name" name="firstName" value="<?php echo $result['firstName'];?>" id="firstName" required/>
        </div>
        <div class="signUp__row">
          Last Name :
          <input type="text" class="signUp__input name" placeholder="Last Name" name="lastName" value="<?php echo $result['lastName'];?>" id="lastName" required/>
        </div>
        <div class="signUp__row">
          Date Of Birth :
	<input type="date" class="date" placeholder="Date Of Birth" name="dateOfBirth" value="<?php echo $result['dateOfBirth'];?>" id="dateOfBirth" required/>
        </div>
        <div class="signUp__row">
        Gender :
        <input type="radio" name="gender" id="gender" value="male" checked/> Male
        <input type="radio" name="gender" id="gender" value="female"/> Female
        <input type="radio" name="gender" id="gender" value="other"/> Other
        </div>
       
        <div class="signUp__row">
          Address :
          <input type="text" class="signUp__input name" placeholder="Address" name="address" value="<?php echo $result['address'];?>" id="address" required/>
        </div>
        <div class="signUp__row">
          Phone Number :
          <input type="number" class="signUp__input name" placeholder="Phone Number" name="phoneNumber" value="<?php echo $result['phoneNumber'];?>" id="phoneNumber" required/>
        </div>
        <div class="signUp__row">
          Email :
          <input type="email" class="signUp__input name" placeholder="example@exm.com" name="email" value="<?php echo $result['email'];?>" id="email" required/>
        </div>
        <div class="signUp__row">
          National ID :
	<input type="number" class="signUp__input name" placeholder="National ID" name="nationalId" value="<?php echo $result['nationalId'];?>" id="nationalId" required/>
        </div>
        <div class="signUp__row">
           Your Bikash Number :
	<input type="number" class="signUp__input name" placeholder="bikash Number" name="bikashNumber" value="<?php echo $result['bikashNumber'];}?>" id="bikashNumber"/>
        </div>
       
        <div class="signUp__row">
        Admin Position :
	<select class="securityquestion" name="adminPosition"  id="adminPosition">
        <option value="Junior">JUNIOR</option>
        <option value="Senior">SENIOR</option>
        <option value="Top">TOP</option>
        </select>
        </div>
        <input type="submit" class="signUp__submit" value="Update Info"  name="submit">
        <button type="button" class="signUp__submit">Cancel</button>
      </div>
	  </form>
    </div>
</body>
</html>
