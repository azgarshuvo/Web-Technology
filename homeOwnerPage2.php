<!DOCTYPE html>
<html >
<head>
  <title>HomeOwner</title>
	  <link rel="stylesheet" href="css/tenantDetailsField.css">;
	  <script type="text/javascript">
	  function backToHome()
	  {
		  window.location="homeOwnerPage.php";
	  }
	  function homeOwnerPage2()
	  {
		  window.location="homeOwnerPage2.php";
	  }
	  </script>
	  <?php
	  include("getInformation.php");
	  if($_SESSION['loadPageForTenantdata']!="")
	  {
		  $tenantDetailsInfo=getDetailsTenantInfoFromDB();
	  }
	$arr = json_decode($tenantDetailsInfo, true);
    ?>
	</head>
<body>
<?php if($_SESSION['userId']==""){ 
header("Location:loginPage.php");
}
else {?>
  <div class="cont">
  <div class="demo">
    <div class="signUp">
      <div class="home__management">Tenant Details</div>
      <div class="tenantSignUp__form">
	  <?php foreach($arr as $result) {
		  ?>
	  <form action="getUpdateTenantInfo.php" method="post" name="frm" id="frm" enctype="multipart/form-data">
        <div class="tenantSignUp__row">
          First Name :
          <input type="text" class="tenantSignUp__input name" placeholder="First Name" name="firstName" id="firstName" value="<?php echo $result['firstName']; ?>" required/>
        </div>
        <div class="tenantSignUp__row">
          Last Name :
          <input type="text" class="tenantSignUp__input name" placeholder="Last Name" name="lastName" id="lastName" value="<?php echo $result['lastName']; ?>" required/>
        </div>
        <div class="tenantSignUp__row">
          Date Of Birth :
          <input type="text" class="tenantSignUp__input name" placeholder="Date Of Birth" name="dateOfBirth" id="dateOfBirth" value="<?php echo $result['dateOfBirth']; ?>" required/>
        </div>
        <div class="tenantSignUp__row">
        Gender :
        <input type="radio" name="gender" id="gender" value="male" <?php if($result['gender']=="male"){echo "checked";} ?>/> Male
        <input type="radio" name="gender" id="gender" value="female" <?php if($result['gender']=="female"){echo "checked";} ?>/> Female
        <input type="radio" name="gender" id="gender" value="other" <?php if($result['gender']=="other"){echo "checked";} ?>/> Other
        </div>
        <div class="tenantSignUp__row">
          Permanent Address :
          <input type="text" class="tenantSignUp__input name" placeholder="Address" name="address" id="address" value="<?php echo $result['address']; ?>" required/>
        </div>
        <div class="tenantSignUp__row">
          Phone Number :
          <input type="number" class="tenantSignUp__input name" placeholder="Phone Number" name="phoneNumber" id="phoneNumber" value="<?php echo $result['phone']; ?>" required/>
        </div>
        <div class="tenantSignUp__row">
          Email :
          <input type="email" class="tenantSignUp__input name" placeholder="example@exm.com" name="email" id="email" value="<?php echo $result['email']; ?>" required/>
        </div>
        <div class="tenantSignUp__row">
          National ID :
          <input type="number" class="tenantSignUp__input name" placeholder="National ID" name="nationalId" id="nationalId" value="<?php echo $result['nationalId']; ?>"/>
        </div>
        <div class="tenantSignUp__row">
          Other Members :
          <input type="text" class="tenantSignUp__input name" placeholder="Members Information" name="otherMember" id="otherMember" value="<?php echo $result['otherNo']; ?>" required/>
        </div>
        <div class="tenantSignUp__row">
          Building Name :
          <input type="text" class="tenantSignUp__input name" placeholder="Building Name" name="buildingName" id="buildingName" value="<?php echo $result['buildingNo']; ?>"/>
        </div>
        <div class="tenantSignUp__row">
           Flat No :
          <input type="text" class="tenantSignUp__input name" placeholder="Flat No" name="flatNo" id="flatNo" value="<?php echo $result['flatNo']; ?>"/>
        </div>
        <div class="tenantSignUp__row">
           Flat Rent :
          <input type="number" class="tenantSignUp__input name" placeholder="Flat Rent" name="flatRent" id="flatRent" value="<?php echo $result['houseRent']; ?>"/>
        </div>
       <div class="tenantSignUp__row">
          Rent Start Date :
          <input type="date" class="tenant_date" placeholder="Start Date" name="rentStartDate" id="rentStartDate" value="<?php echo $result['rentDate']; ?>"/>
        </div>
         <div class="tenantSignUp__row">
          Advance Payment :
          <input type="number" class="tenantSignUp__input name" placeholder="Payment in TK" name="advPayment" id="advPayment" value="<?php echo $result['advancePayment']; ?>"/>
        </div>
        <input type="submit" class="tenantSignUp__submit" name="update" value="Confirm Update"/>
		<button type="button" class="tenantSignUp__submit" name="cancel" onclick="backToHome()">Cancel</button>
      </div>
	  </form>
	  <?php } ?>
    </div>
<?php } ?>
</body>
</html>
