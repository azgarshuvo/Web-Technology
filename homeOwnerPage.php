<!DOCTYPE html>
<html >
<head>
  <title>HomeOwner</title>
      <link rel="stylesheet" href="css/homeOwner.css">
	  <script src="js/source.js"></script>
	  <?php
	  include("getInformation.php");
	  if($_SESSION['searchTenant']!="")
	  {
		  $tenantData= getSpecificTenantInfoFromDB();
		  $_SESSION['searchTenant']="";
	  }
	  else
	  {
		  $tenantData= getTenantInfoFromDB();
	  }
	$arr = json_decode($tenantData, true);
	$ownerData= getOwnerInfoFromDB();
	$ownerArr=json_decode($ownerData, true);
	$buildingData = getBuildingInfoFromDB();
	$buildingArr=json_decode($buildingData, true);
	$flatData = getFlatInfoFromDB();
	$flatArr=json_decode($flatData, true);
    ?>
      <script type="text/javascript">
	    var flatTenantId;
		var flatBuildingId;
		var tenantFlatRent;
		var tenantFlatdata;
        function  getId(element) {
		var leaveTenantId;
        $row=element.parentNode.parentNode.rowIndex;
        leaveTenantId=(document.getElementById("myTable").rows[$row].cells[0].innerHTML);
		document.getElementById("leaveTenantId").setAttribute('value',leaveTenantId);
		$(".demoess").show();
		$(".demoUtilities").hide();
      }
	  function addBuildingPage()
	  {
		  window.location="addBuilding.php";
	  }
	    function  getIdUtilities(element) {
		var utilitiesTenantId;
		var homeRentId;
		var flatId;
		var buildingId;
        $row=element.parentNode.parentNode.rowIndex;
        utilitiesTenantId=(document.getElementById("myTable").rows[$row].cells[0].innerHTML);
		homeRentId=(document.getElementById("myTable").rows[$row].cells[5].innerHTML);
		flatId=(document.getElementById("myTable").rows[$row].cells[6].innerHTML);
		buildingId=(document.getElementById("myTable").rows[$row].cells[7].innerHTML);
		document.getElementById("utilitiesTenantId").setAttribute('value',utilitiesTenantId);
		document.getElementById("houseRentId").setAttribute('value',homeRentId);
		document.getElementById("flatId").setAttribute('value',flatId);
		document.getElementById("buildingId").setAttribute('value',buildingId);
		$(".demoUtilities").show();
		$(".demoess").hide();
      }
	    function getIdMonthlyPayment(element)
	  {
	  	var tenantMonthlyPaymentId;
        $row=element.parentNode.parentNode.rowIndex;
        tenantMonthlyPaymentId=(document.getElementById("myTable").rows[$row].cells[0].innerHTML);
		document.getElementById("tenantMonthlyPaymentId").setAttribute('value',tenantMonthlyPaymentId);
		document.tenantMonthlyPayment.submit();
		}
	  function getIdDetails(element)
	  {
	  	var tenantDetailsId;
        $row=element.parentNode.parentNode.rowIndex;
        tenantDetailsId=(document.getElementById("myTable").rows[$row].cells[0].innerHTML);
		document.getElementById("loadPageForTenantdata").setAttribute('value',tenantDetailsId);
		document.loadPageForTenantInfo.submit();
		}
	   function  getFlatIdDetails(element) {
	    var flatDetailsId;
        $row=element.parentNode.parentNode.rowIndex;
        flatDetailsId=(document.getElementById("myBuildingTable").rows[$row].cells[0].innerHTML);
		document.getElementById("flatDetailsdata").setAttribute('value',flatDetailsId);
		document.flatDetailsForm.submit();
      }
	   function  getFlatId(element) {
        $row=element.parentNode.parentNode.rowIndex;
        flatTenantId=(document.getElementById("myFlatsTable").rows[$row].cells[0].innerHTML);
		flatBuildingId=(document.getElementById("myFlatsTable").rows[$row].cells[1].innerHTML);
		tenantFlatRent=(document.getElementById("myFlatsTable").rows[$row].cells[4].innerHTML);
		tenantFlatdata=(document.getElementById("myFlatsTable").rows[$row].cells[6].innerHTML);
		document.getElementById("tenantBuilding").setAttribute('value',flatTenantId);
		document.getElementById("tenantFlat").setAttribute('value',flatBuildingId);
		document.getElementById("tenantFlatRent").setAttribute('value',tenantFlatRent);
		$(".demoTenantAdd").show();
      }
	  function AddNewTenant()
	  {
		document.getElementById("tenantBuildingForm").setAttribute('value',flatTenantId);
		document.getElementById("tenantFlatForm").setAttribute('value',flatBuildingId);
		document.getElementById("tenantFlatRentForm").setAttribute('value',tenantFlatRent);
		document.getElementById("tenantFlatDataFrom").setAttribute('value',tenantFlatdata);
		$(".demoTenantAdd").hide();
		document.createNewTenantForm.submit();
	  }
	    function  getBuildingId(element) {
        $row=element.parentNode.parentNode.rowIndex;
        alert(document.getElementById("myBuildingTable").rows[$row].cells[0].innerHTML);
      }
	  function showHomePage()
	  {
		  window.location="LoadPage.php";
	  }
	  function logOut()
	  {
		  window.location ="logout.php" 
	  }
      </script>
<script>
$(document).ready(function(){
	CancelTenantAddSubmit
	$("#CancelTenantAddSubmit").click(function(){
        $(".demoess").hide();
		$(".demoUtilities").hide();
		$(".demoTenantAdd").hide();
    });
    $("#profileMenu").click(function(){
		$(".demoTenantAdd").hide();
        $(".tableView").hide();
        $(".buildingInfo").hide();
		$(".flatsTableView").hide();
		$(".profileInfo").show();
		$(".buildingsTableView").hide();
		$(".demo").hide();
		$(".demoes").hide();
		$(".updateProfileInfo").hide();
		$(".demoess").hide();
		$(".demoUtilities").hide();
		$(".demoess").hide();
    });
	$("#flatMenu").click(function(){
		$(".demoTenantAdd").hide();
        $(".profileInfo").hide();
		$(".updateProfileInfo").hide();
		$(".tableView").hide();
        $(".buildingInfo").hide();
		$(".flatsTableView").show();
		$(".buildingsTableView").hide();
		$(".demo").hide();
		$(".demoes").hide();
		$(".demoess").hide();
		$(".demoUtilities").hide();
		$(".demoess").hide();
    });
	$("#viewBuildingMenu").click(function(){
		$(".demoTenantAdd").hide();
        $(".profileInfo").hide();
		$(".updateProfileInfo").hide();
		$(".tableView").hide();
        $(".buildingInfo").hide();
		$(".flatsTableView").hide();
		$(".buildingsTableView").show();
		$(".demo").hide();
		$(".demoes").hide();
		$(".demoess").hide();
		$(".demoUtilities").hide();
		$(".demoess").hide();
    });
	$("#upbutton").click(function(){
		$(".demoTenantAdd").hide();
        $(".profileInfo").hide();
		$(".flatsTableView").hide();
		$(".tableView").hide();
        $(".buildingInfo").hide();
		$(".updateProfileInfo").show();
		$(".buildingsTableView").hide();
		$(".demo").hide();
		$(".demoes").hide();
		$(".demoess").hide();
		$(".demoUtilities").hide();
		$(".demoess").hide();
    });
	$("#changePasswordMenu").click(function(){
		$(".demoTenantAdd").hide();
		$(".demo").show();
		$(".demoes").hide();
		$(".demoess").hide();
		$(".demoUtilities").hide();
		$(".demoess").hide();
    });
	$("#CancelPassSubmit").click(function(){
		$(".demo").hide();
		$(".demoes").hide();
    });
	$("#changeSecurityMenu").click(function(){
		$(".demoTenantAdd").hide();
		$(".demo").hide();
		$(".demoes").show();
		$(".demoess").hide();
    });
	$("#cancelChangeSecurity").click(function(){
		$(".demo").hide();
		$(".demoes").hide();
    });
	$("#cancelAddLeaveDateButton").click(function(){
		$(".demoTenantAdd").hide();
		$(".demoess").hide();
		$(".demoUtilities").hide();
    });
	$("#cancelAddUtilitiesId").click(function(){
		$(".demoess").hide();
		$(".demoUtilities").hide();
    });
});
</script>
</head>
<body>
<?php if(($_SESSION['userId']=="")||($_SESSION['user']!="homeowner")){ 
header("Location:loginPage.php");
}
else {?>
  <div class="homeOwner">
  <h1>Home Owner</h1>
  <div>
  <div >
<button type="button"  onclick="logOut()"><h3>-LOG OUT-</h3></button>
</div>
    <div class="tableView">
        <table id="myTable">
  <tr>
    <th>Tenant Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Rent Cost</th>
    <th>Flat No</th>
	<th>Building Name</th>
    <th>Control Options</th>
  </tr>
 <tbody>
  <?php
    foreach($arr as $result){
        ?>
  <tr>
    <td><?php echo $result['tenantId']; ?></td>
    <td><?php echo $result['firstName']; ?></td>
    <td><?php echo $result['lastName']; ?></td>
    <td><?php echo $result['email']; ?></td>
    <td><?php echo $result['phone']; ?></td>
    <td><?php echo $result['houseRent']; ?></td>
    <td><?php echo $result['flatNo']; ?></td>
	<td><?php echo $result['buildingNo']; ?></td>
    <td><button class="btn red" onclick="getId(this)">Add Leave Date</button><button class="btn blue" onclick="getIdMonthlyPayment(this)">Show Monthly Payment</button><button class="btn green" onclick="getIdUtilities(this)">Add Utilities</button><button class="btn purple" onclick="getIdDetails(this)">Details</button></td>
  </td>
  </tr>
	<?php   
}
?>
</tbody>
</table>
</div>
<div class="flatsTableView">
<h2>Available Flats Informations : </h2><br>
        <table id="myFlatsTable">
  <tr>
    <th>Flat Number</th>
    <th>Building Name</th>
	<th>Location</th>
    <th>Flat Details</th>
    <th>Rent Cost</th>
	<th>Availability</th>
	<th>Indentity</th>
    <th>Control Option</th>
  </tr>
  <tbody>
  <?php
    foreach($flatArr as $resultflat){
        ?>
  <tr>
    <td><?php echo $resultflat['flatId']; ?></td>
    <td><?php echo $resultflat['buildingName']; ?></td>
	<td><?php echo $resultflat['address']; ?></td>
    <td><?php echo $resultflat['otherInfo']; ?></td>
    <td><?php echo $resultflat['rentCost']; ?></td>
	<td><?php if($resultflat['leaveDate']!="0000-00-00"){echo "Available from ".$resultflat['leaveDate'];}
	else{
		echo "Available";
	}?></td>
	<td><?php echo $resultflat['uniqueFlat']; ?></td>
    <td><button class="btn blue" onclick="getFlatId(this)">Add New Tenant Here</button></td>
  </tr>
	<?php } ?>
	</tbody>
</table>
</div>
<div class="buildingsTableView">
<h2>Buildings Informations :</h2><br>
   <table id="myBuildingTable">
  <tr>
    <th>Building Id</th>
    <th>Building Name</th>
    <th>Address</th>
    <th>Total Flats</th>
    <th>Control Option</th>
  </tr>
  <tbody>
  <?php
    foreach($buildingArr as $resultBuilding){
        ?>
  <tr>
    <td><?php echo $resultBuilding['buildingId']; ?></td>
    <td><?php echo $resultBuilding['buildingName']; ?></td>
    <td><?php echo $resultBuilding['address']; ?></td>
    <td><?php echo $resultBuilding['totalFlats']; ?></td>
    <td><button class="btn green" onclick="getFlatIdDetails(this)">Show Flat Details Of This Building</button></td>
  </tr>
  	<?php   
}
?>
</tbody>
</table>
</div>
        <div class="buildingInfo">
        <form action ="LoadPage.php" class="searchForm" name="searchForm" id="searchForm" method="post">
        <h2>Tenants Of Building :<h2>
        <select class="buildingData" value="buildingData" placeholder="buildingData" name="buildingData" id="buildingData">
        <option value="<?php echo $_SESSION["buildingData"]?>"><?php echo $_SESSION["buildingData"]?></option>
		<?php
		if($_SESSION["buildingData"]!="All")
		{?>
		<option value="All">All</option>
		<?php } ?>
		<?php
        foreach($buildingArr as $resultBuildingShow){
		if($resultBuildingShow['buildingName']==$_SESSION['buildingData'])
		{continue;}
        ?>
        <option value="<?php echo $resultBuildingShow['buildingName']; ?>"><?php echo $resultBuilding['buildingName']; ?></option>
		<?php } ?>
        </select>
        <input  class="buildingDateButton" type="submit" name="showDetails" id="showDetails" value="Show Details Information"/>
        </form>
        </div>
		 <?php
        foreach($ownerArr as $result1){
        ?>
		<div class="profileInfo">
        <h4>User Id  :<h4> <h4 class="userId" name="userId" id="userId"><?php echo $result1['buildingOwnerId'];?><h4><br>
        <h4>First Name  :<h4> <h4 class="fName" name="fName" id="fName"><?php echo $result1['firstName'];?><h4> <br><h4>Last Name  :<h4> <h4 class="lName" name="lName" id="lName"><?php echo $result1['lastName'];?><h4><br>
		<h4>Date of Birth  :<h4> <h4 class="dob" name="dob" id="dob"><?php echo $result1['dateOfBirth'];?><h4><br> <h4>Gender :<h4> <h4 class="gender" name="gender" id="gender"><?php echo $result1['gender'];?><h4><br>
		<h4>Email  :<h4> <h4 class="email" name="email" id="email"><?php echo $result1['email'];?><h4> <br><h4>Phone No :<h4> <h4 class="phoneNo" name="phoneNo" id="phoneNo"><?php echo $result1['phoneNo'];?><h4><br>
		<h4>Address  :<h4> <h4 class="address" name="address" id="address"><?php echo $result1['address'];?><h4><br> <h4>National ID :<h4> <h4 class="NID" name="NID" id="NID"><?php echo $result1['nationalId'];?><h4><br>
		<h4>Registration Date  :<h4> <h4 class="regiDate" name="regiDate" id="regiDate"><?php echo $result1['registrationDate'];?><h4><br>
		<img src=<?php echo $result1['userPhotoAddress'];?> alt="upload" height="300" width="400" class="image">
		<input class="updateButton" type="button" name="upbutton" id="upbutton" value="Update">
		</div>
		<div>
		<form  action="updateOwnerInfo.php" class="updateProfileInfo" name="uppdateProfile" method="post">
        <h4>User Id  :<h4> <h4 class="updateuserId" name="userId" id="userId"><?php echo $result1['buildingOwnerId'];?><h4><br>
        <h4>First Name  :<h4> <input class="updatefName" type="text" name="updatefName" id="updatefName" value="<?php echo $result1['firstName'];?>"/><br><h4>Last Name  :<h4> <input class="updatelName" type="text" name="updatelName" id="updatelName" value="<?php echo $result1['lastName'];?>"/><br>
		<h4>Date of Birth  :<input class="updatedob" type="text" name="updateDateOfBirth" id="updateDateOfBirth" value="<?php echo $result1['dateOfBirth'];?>"/><br><br><h4>Gender :<h4> <h4 class="updategender" name="gender" id="gender"><?php echo $result1['gender'];?><h4><br>
		<h4>Email  :<h4> <input class="updateemail" type="text" name="updateEmail" id="updateEmail" value="<?php echo $result1['email'];?>"/><br><h4>Phone No :<h4> <input class="updatephoneNo" type="text" name="updatePhoneNumber" id="updatePhoneNumber" value="<?php echo $result1['phoneNo'];?>"/><br>
		<h4>Address  :<h4> <input class="updateaddress" type="text" name="updateAddress" id="updateAddress" value="<?php echo $result1['address'];?>"/><br><h4>National ID :<h4> <h4 class="updateNID" name="NID" id="NID"><?php echo $result1['nationalId'];?><h4><br>
		<h4>Registration Date  :<h4> <h4 class="updateregiDate" name="regiDate" id="regiDate"><?php echo $result1['registrationDate'];?><h4>
		<img src="<?php echo $result1['userPhotoAddress'];?>" alt="upload" height="100" width="35" class="updateimage">
		<input type="submit" name="updateConfirmButton" id="updateConfirmButton" value="Confirm Update" class="updateConfirmButton">
		</form>
		</div>
		<?php } ?>
  <div id="Navigation">
      <ul class="Navigation">
              <li><a id="homeMenu" href="#" onclick="showHomePage()">Home</a></li>
        <li><a id="profileMenu" href="#">Profile</a></li>
        <li><a href="#">Buildings</a>
         <ul>
              <li><a id="addBuildingMenu" href="#" onclick="addBuildingPage()" >Add New Building</a></li>
              <li><a id="viewBuildingMenu" href="#">View All Building</a></li>
          </ul></li>
              <li><a id="flatMenu" href="#">Show Free Flats</a></li>
              <li><a href="#">Security Setting</a>
          <ul>
              <li><a id="changePasswordMenu" href="#">Change Password</a></li>
              <li><a id="changeSecurityMenu" href="#">Change Securiy Question</a></li>
          </ul>
        </li>            
            </ul>
            </div>
            <div class="searchRow">
			<form action="searchTenant.php" name="searchTenantForm" id="searchTenantForm" method="post">
            <input class="searchInput" type="text" name="searchTenant" id="searchTenant" placeholder="Enter Tenant Name or Id" value="" required/>
            <input class="searchButton" type="submit" name="searchButton" id="searchButton" value="Search" />
			</form>
            </div>
<div class="demo">
    <div class="psw">
      <div class="changePassword">Change Password</div>
      <div class="passwordForm">
	  <form action="changePassword.php" method="post">
        <div class="passwordRow">
        Old Password :
          <input type="password" class="passwordInput name" placeholder="Old Password" name="oldPassword" id="oldPassword" required/>
        </div>
        <div class="passwordRow">
        New Password :
          <input type="password" class="passwordInput" placeholder="New Password" name="newPassword" id="newPassword" required/>
        </div>
        <input type="submit" class="passwordSubmit" value="Change Password" name="submit">
		<button class="passwordSubmit" id="CancelPassSubmit">Cancel</button>
      </div>
	  </form>
    </div>
	</div>
<div class="demoTenantAdd">
    <div class="psw">
      <div class="changePassword">Add Tenant By Tenant Id</div>
      <div class="addNewTenantForm">
	  <form action="changePassword.php" method="post">
        <div class="passwordRow">
        Building Name :
          <input type="text" class="passwordInput name" placeholder="Building Name" name="tenantBuilding" id="tenantBuilding" required/>
        </div>
		<div class="passwordRow">
        Flat ID :
          <input type="text" class="passwordInput name" placeholder="Flat Number" name="tenantFlat" id="tenantFlat" required/>
        </div>
		<div class="passwordRow">
        Flat Rent :
          <input type="text" class="passwordInput name" placeholder="Flat Rent" name="tenantFlatRent" id="tenantFlatRent" required/>
        </div>
        <div class="passwordRow">
        Tenant Id :
          <input type="text" class="passwordInput" placeholder="Enter Tenant Id" name="tenantAddId" id="tenantAddId" required/>
        </div>
        <input type="submit" class="passwordSubmit" value="Continue" name="Continue">
		<button class="passwordSubmit" id="CreateTenantAddSubmit" onclick="AddNewTenant();">Create New Tenant</button>
		<button class="passwordSubmit" id="CancelTenantAddSubmit">Cancel</button>
      </div>
	  </form>
    </div>
	</div>
<div class="demoes">
    <div class="ques">
      <div class="changeSecurityQuestion">Change Security Question</div>
      <div class="securityQuestionForm">
	  <form action="changeSecurityQuestion.php" method="post">
        <div class="questionRow">
         Security Question :
        <select class="securityquestion" value="Select A Question" placeholder="Select A Question" name="securityQuestion" id="securityQuestion">
        <option value="What is your favorite food ?">What is your favorite food ?</option>
        <option value="What is your favorite game ?">What is your favorite game ?</option>
        <option value="Where is your father born ?">Where is your father born ?</option>
        <option value="Who is your best friend ?">Who is your best friend ?</option>
        </select>
        </div>
        <div class="questionRow">
           Your Answer :
          <input type="text" class="questionInput name" placeholder="Your Answer" name="securityAnswer" id="securityAnswer" required/>
        </div>
		  <div class="questionRow">
        Your Password :
          <input type="password" class="questionInput pass" placeholder="Your Password" name="yourPassword" id="yourPassword" required/>
        </div>
        <input type="submit" class="questionSubmit" value="Continue" name="submit">
		<button class="questionSubmit" id="cancelChangeSecurity">Cancel</button>
      </div>
	  </form>
    </div>
	</div>
<div class="demoess">
    <div class="pay">
      <div class="levaDate">Add Leave Date</div>
      <div class="paymentForm">
	  <form action="addTenantLeaveDate.php" method="post">
        <h5>Tenant Id :</h5><input class="searchInput" type="text" name="leaveTenantId" id="leaveTenantId"></input><br><br>
         <h5>Select Leave Date :<h5>
		<div class="paymentRow">
          <input type="date" class="date" placeholder="Date" name="tenantleavedate" id="tenantleavedate" required/>
        </div>
        <input type="submit" class="paymentSubmit" value="Continue" />
		<input type="button" class="paymentSubmit" value="Cancel" id="cancelAddLeaveDateButton"/>
	  </form>
	  </div>
    </div>
	</div>
	<div class="demoUtilities">
    <div class="utility">
      <div class="add__utilities"><h2>Add Utilities<h2></div>
      <div class="utility__form">
	  <form action="AddUtilities.php" method="post" name="utilitiesfrm" id="utilitiesfrm" enctype="multipart/form-data">
	   <div class="utility__row">
          Tenant Id :
          <input type="text" class="utility__input name" placeholder="Input id" name="utilitiesTenantId" id="utilitiesTenantId" value="" required/>
        </div>
		<div class="utility__row">
          Building Name :
          <input type="text" class="utility__input name" placeholder="Input Building" name="buildingId" id="buildingId" value="" required/>
        </div>
		<div class="utility__row">
          Flat NO :
          <input type="text" class="utility__input name" placeholder="Input Flat" name="flatId" id="flatId" value="" required/>
        </div>
	   <div class="utility__row">
          House Rent :
          <input type="number" class="utility__input name" placeholder="Input Bill" name="houseRentId" id="houseRentId" value="" required/>
        </div>
        <div class="utility__row">
          Gas Bill :
          <input type="number" class="utility__input name" placeholder="Input Bill" name="gasBill" id="gasBill" value="" required/>
        </div>
        <div class="utility__row">
          Water Bill :
          <input type="number" class="utility__input name" placeholder="Input Bill" name="waterBill" id="waterBill" value="" required/>
        </div>
        <div class="utility__row">
          Electricity Bill :
          <input type="number" class="utility__input name" placeholder="Input Bill" name="electricityBill" id="electricityBill" value="" onkeyup="calculate()" required/>
        </div>
        <div class="utility__row">
          Others Bill :
          <input type="number" class="utility__input name" placeholder="Input Bill" name="otherBill" id="otherBill" value="" required/>
        </div>
		<div class="utility__row">
          Select Date :
          <input type="date" class="utility__input name" placeholder="Input Bill" name="utilitiesMonth" id="utilitiesMonth" value="" required/>
        </div>
		<button type="submit" class="utilitiessubmit" name="confirm">Confirm</button>
        <button type="button" class="utilitiessubmit" id="cancelAddUtilitiesId">Cancel</button>
      </div>
	  </form>
    </div>
	</div>
	<form class="submitForm" action="loadPageForTenantInfo.php" method="post" name="loadPageForTenantInfo">
  <input type="text" name="loadPageForTenantdata" id="loadPageForTenantdata" value=""/>
  </form>
  <form class="submitForm" action="tenantMonthlyPayment.php" method="post" name="tenantMonthlyPayment" id="tenantMonthlyPayment">
  <input type="text" name="tenantMonthlyPaymentId" id="tenantMonthlyPaymentId" value=""/>
  </form>
  <form class="submitForm" action="buildingFlat.php" method="post" name="flatDetailsForm" id="flatDetailsFrom">
  <input type="text" name="flatDetailsdata" id="flatDetailsdata" value=""/>
  </form>
  <form class="submitForm" action="getNewTenantCreateInfo.php" method="post" name="createNewTenantForm" id="createNewTenantForm">
  <input type="text" name="tenantBuildingForm" id="tenantBuildingForm" value=""/>
  <input type="text" name="tenantFlatForm" id="tenantFlatForm" value=""/>
  <input type="text" name="tenantFlatRentForm" id="tenantFlatRentForm" value=""/>
  <input type="text" name="tenantFlatDataFrom" id="tenantFlatDataFrom" value=""/>
  </form>
  </div>
<?php } 
?>
</body>
</html>