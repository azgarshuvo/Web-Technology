<!DOCTYPE html>
<html >
<head>
  <title>HomeOwner</title>
      <link rel="stylesheet" href="css/homeOwner.css">
	  <script src="js/source.js"></script>
	  <script type="text/javascript">
	  function backToHome()
	  {
		  window.location="homeOwnerPage.php";
	  }
	  function homeOwnerPage2()
	  {
		  window.location="homeOwnerPage2.php";
	  }
	  function deletePermanent()
	  {
		  window.location="deleteTenantPermanently.php";
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
  <div class="homeOwner">
<div class="tenantdemo">
    <div class="tenantsignUp">
      <div class="tenanthome__management">Tenant Details</div>
      <div class="tenanttenantSignUp__form">
	  <?php foreach($arr as $result)
	  { ?>
	  <form action="getTenantSignUpInfo.php" method="post" enctype="multipart/form-data">
	  <img class="tenantimage" src="<?php echo $result['tenantPhoto']; ?>" alt="No Image">
        <h4>First Name  :</h4> <h4 class="tenantfName" name="fNameTenantDetail" id="fNameTenantDetail"><?php echo $result['firstName']; ?></h4> <br><h4>Last Name  :</h4> <h4 class="tenantlName" name="lNameTenantDetail" id="lNameTenantDetail"><?php echo $result['lastName']; ?></h4><br>
		<h4>Date of Birth  :</h4> <h4 class="tenantdob" name="dobTenantDetail" id="dobTenantDetail"><?php echo $result['dateOfBirth']; ?></h4><br> <h4>Gender :</h4> <h4 class="tenantgender" name="genderTenantDetail" id="genderTenantDetail"><?php echo $result['gender']; ?></h4><br>
		<h4>Permanent Address  :</h4> <h4 class="tenantaddress" name="addressTenantDetail" id="address"><?php echo $result['address']; ?></h4> <br><h4>Phone No :</h4> <h4 class="tenantphoneNo" name="phoneNoTenantDetail" id="phoneNoTenantDetail"><?php echo $result['phone']; ?></h4><br>
		<h4>Email  :</h4> <h4 class="tenantemail" name="email" id="emailTenantDetail"><?php echo $result['email']; ?></h4><br> <h4>National ID :</h4> <h4 class="tenantNID" name="NIDTenantDetail" id="NIDTenantDetail"><?php echo $result['nationalId']; ?></h4><br>
		<h4>Others Member  :</h4> <h4 class="tenantmember" name="memberTenantDetail" id="memberTenantDetail"><?php echo $result['otherNo']; ?></h4><br> <h4>Building Name:</h4> <h4 class="tenantbuildingName" name="buildingNameTenantDetail" id="buildingNameTenantDetail"><?php echo $result['buildingNo']; ?></h4><br>
        <h4>Flat No  :</h4> <h4 class="tenantflatNo" name="flatNoTenantDetail" id="flatNoTenantDetail"><?php echo $result['flatNo']; ?></h4><br> <h4>Flat Rent :</h4> <h4 class="tenantflatRent" name="flatRentTenantDetail" id="flatRentTenantDetail"><?php echo $result['houseRent']; ?></h4><br>
		<h4> Rent Start Date :</h4> <h4 class="tenantstartDate" name="startDateTenantDetail" id="startDateTenantDetail"><?php echo $result['rentDate']; ?></h4><br> <h4>Advance Payment :</h4> <h4 class="tenantpayment" name="paymentTenantDetail" id="paymentTenantDetail"><?php echo $result['advancePayment']; ?></h4><br>
		<button type="button" class="tenantSignUp__submit" name="update" onclick="homeOwnerPage2()">Update Tenant Info </button>
        <button type="button" class="tenantSignUp__submit" name="delete" onclick="deletePermanent()">Delete Permanently</button>
		<button type="button" class="tenantSignUp__submit" name="cancel" onclick="backToHome()">Back To Home</button>
      </div>
	  </form>
	  <?php } ?>
	</div>
	</div>
	</div>
	<?php } ?>
</body>
</html>