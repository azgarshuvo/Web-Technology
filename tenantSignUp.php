<!DOCTYPE html>
<html >
<head>
  <title>Add New Tenant</title>
      <link rel="stylesheet" href="css/test.css">;
	   <script>
	function showHint() {
	str=document.getElementById("tenantmail").value;
	//document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			msg="";
			for(i=0;i<resp.length;i++){
				msg=msg+"<p style='color:red;'>This Email is already taken!!</p>";
			}
			//alert(msg);
			document.getElementById("em").innerHTML = msg;
		}
	};
	var url="emailCheck.php?signal=read&email="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

function showHintNID() {
	str=document.getElementById("tenantnationalId").value;
	//document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			msg="";
			for(i=0;i<resp.length;i++){
				msg=msg+"<p style='color:red;'>This NID is already taken!!</p>";
			}
			//alert(msg);
			document.getElementById("nid").innerHTML = msg;
		}
	};
	var url="nidCheck.php?signal=read&nationalId="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

        function signIn()
        {
          window.location="index.html";
        }
		
		function test_fname(){
	    a=document.frm.tenantfirstName.value;
	    if((a.includes("0") == false) && (a.includes("1") == false) && (a.includes("2") == false) && (a.includes("3") == false) && (a.includes("4") == false) && (a.includes("5") == false) && (a.includes("6") == false)&& (a.includes("7") == false) && (a.includes("8") == false) && (a.includes("9") == false)){
		msg=document.getElementById("fn");
		msg.innerHTML="<p style='color:blue;'>Valid Name</p>";
		
	}
		else{
		msg=document.getElementById("fn");
		msg.innerHTML="<p style='color:red;'>Name can not have digit</p>";
	}
}
        function test_lname(){
	    a=document.frm.tenantlastName.value;
	    if((a.includes("0") == false) && (a.includes("1") == false) && (a.includes("2") == false) && (a.includes("3") == false) && (a.includes("4") == false) && (a.includes("5") == false) && (a.includes("6") == false)&& (a.includes("7") == false) && (a.includes("8") == false) && (a.includes("9") == false)){
		msg=document.getElementById("ln");
		msg.innerHTML="<p style='color:blue;'>Valid Name</p>";
		
	}
		else{
		msg=document.getElementById("ln");
		msg.innerHTML="<p style='color:red;'>Name can not have digit</p>";
	}
}
function test_pn(){
	a=document.frm.tenantphoneNumber.value;
		if(a.length != 11){
		msg=document.getElementById("pn");
		msg.innerHTML="<p style='color:red;'>Phone No must be 11 digit</p>";
	}
		else{
		msg=document.getElementById("pn");
		msg.innerHTML="<p style='color:blue;'>ok to go</p>";
	}
}		
function backToHome()
{
	window.location="LoadPage.php";
}
</script>
	  
<body>
<?php session_start(); if(($_SESSION["userId"]!="")&&($_SESSION["user"]=="homeowner")) { ?>
  <div class="cont">
  <div class="ttenantdemo">
    <div class="ttenantsignUp">
      <div class="ttenanthome__management">Add New Tenant</div>
      <div class="ttenantSignUp__form">
	  <form action="getTenantSignUpInfo.php" method="post" name="frm" id="frm" enctype="multipart/form-data">
        <div class="ttenantSignUp__row">
          First Name :
          <input type="text" class="ttenantSignUp__input name" onkeyup="test_fname()" placeholder="First Name" name="tenantfirstName" id="tenantfirstName" required/>
		   <p id="fn"></p>
        </div>
        <div class="ttenantSignUp__row">
          Last Name :
          <input type="text" class="ttenantSignUp__input name" onkeyup="test_lname()" placeholder="Last Name" name="tenantlastName" id="tenantlastName" required/>
		   <p id="ln"></p>
        </div>
        <div class="ttenantSignUp__row">
          Date Of Birth :
          <input type="date" class="ttenant_date" placeholder="Date Of Birth" name="tenantdateOfBirth" id="tenantdateOfBirth" required/>
        </div>
        <div class="ttenantSignUp__row">
        Gender :
        <input type="radio" name="tenantgender" id="gender" value="male" checked/> Male
        <input type="radio" name="tenantgender" id="gender" value="female"/> Female
        <input type="radio" name="tenantgender" id="gender" value="other"/> Other
        </div>
        <div class="ttenantSignUp__row">
        Select Your Photo :
        <input type="file" name="tenantuserPhoto" id="tenantuserPhoto">
        </div>
        <div class="ttenantSignUp__row">
          Permanent Address :
          <input type="text" class="ttenantSignUp__input name" placeholder="Address" name="tenantaddress" id="tenantaddress" required/>
        </div>
        <div class="ttenantSignUp__row">
          Phone Number :
          <input type="number" class="ttenantSignUp__input name" onkeyup="test_pn()" placeholder="Phone Number" name="tenantphoneNumber" id="tenantphoneNumber" required/>
		   <p id="pn"></p>
        </div>
        <div class="ttenantSignUp__row">
          Email :
          <input type="email" class="ttenantSignUp__input name" placeholder="example@exm.com" name="tenantmail" onkeyup="showHint()" id="tenantmail" required/>
		  <p id="em" ></p>
        </div>
        <div class="ttenantSignUp__row">
          National ID :
          <input type="number" class="ttenantSignUp__input name" onkeyup="showHintNID()" placeholder="National ID" name="tenantnationalId" id="tenantnationalId" required/>
		  <p id="nid" ></p>
        </div>
        <div class="ttenantSignUp__row">
          Other Members :
          <input type="text" class="ttenantSignUp__input name" placeholder="Members Information" name="tenantotherMember" id="tenantotherMember" required/>
        </div>
        <div class="ttenantSignUp__row">
          Building Name :
          <input type="text" class="ttenantSignUp__input name" placeholder="Building Name" name="tenantbuildingName" id="tenantbuildingName" value="<?php echo $_SESSION["tenantBuildingForm"] ?>" required/>
        </div>
        <div class="ttenantSignUp__row">
           Flat No :
          <input type="text" class="ttenantSignUp__input name" placeholder="Flat No" name="tenantflatNo" id="tenantflatNo" value="<?php echo $_SESSION["tenantFlatForm"] ?>" required/>
        </div>
        <div class="ttenantSignUp__row">
           Flat Rent :
          <input type="number" class="ttenantSignUp__input name" placeholder="Flat Rent" name="tenantflatRent" id="tenantflatRent" value="<?php echo $_SESSION["tenantFlatRentForm"] ?>" required/>
        </div>
       <div class="ttenantSignUp__row">
          Rent Start Date :
          <input type="date" class="ttenant_date" placeholder="Start Date" name="tenantrentStartDate" id="tenantrentStartDate" required/>
        </div>
         <div class="ttenantSignUp__row">
          Advance Payment :
          <input type="number" class="ttenantSignUp__input name" placeholder="Payment in TK" name="tenantadvPayment" id="tenantadvPayment" required/>
        </div>
        <input type="submit" class="ttenantSignUp__submit" value="Add New Tenant" name="tenantsubmit">
        <button type="button" class="ttenantSignUp__submit" onclick="backToHome()" >Cancel</button>
      </div>
	  </form>
    </div>
<?php } ?>
</body>
</html>
