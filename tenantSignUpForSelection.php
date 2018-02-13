<!DOCTYPE html>
<html >
<head>
  <title>Tenant SignUp</title>
      <link rel="stylesheet" href="css/test.css">;
<script type="text/javascript">
        function signIn()
        {
          window.location="index.html";
        }
		
		function test_fname(){
	    a=document.frm.tenantSignfirstName.value;
	    if((a.includes("0") == false) && (a.includes("1") == false) && (a.includes("2") == false) && (a.includes("3") == false) && (a.includes("4") == false) && (a.includes("5") == false) && (a.includes("6") == false)&& (a.includes("7") == false) && (a.includes("8") == false) && (a.includes("9") == false)){
		msg=document.getElementById("fn");
		msg.innerHTML="<p style='color:blue;'>Valid Name</p>";
		
	}
		else{
		msg=document.getElementById("fn");
		msg.innerHTML="<p style='color:red;'>Invalid Name</p>";
	}
}
        function test_lname(){
	    a=document.frm.tenantSignlastName.value;
	    if((a.includes("0") == false) && (a.includes("1") == false) && (a.includes("2") == false) && (a.includes("3") == false) && (a.includes("4") == false) && (a.includes("5") == false) && (a.includes("6") == false)&& (a.includes("7") == false) && (a.includes("8") == false) && (a.includes("9") == false)){
		msg=document.getElementById("ln");
		msg.innerHTML="<p style='color:blue;'>Valid Name</p>";
		
	}
		else{
		msg=document.getElementById("ln");
		msg.innerHTML="<p style='color:red;'>Invalid Name</p>";
	}
}
function test_pn(){
	a=document.frm.tenantSignphoneNumber.value;
		if(a.length != 11){
		msg=document.getElementById("pn");
		msg.innerHTML="<p style='color:red;'>Phone No must be 11 digit</p>";
	}
		else{
		msg=document.getElementById("pn");
		msg.innerHTML="<p style='color:blue;'>ok to go</p>";
	}
}

function test_password(){
		a=document.frm.tenantSignpassword.value;
		if((a.length<6) || (a.includes("@") == false) && (a.includes("$") == false) && (a.includes("!") == false) && (a.includes("#") == false) && (a.includes("%") == false) && (a.includes("&") == false) && (a.includes("*") == false)){
			msg=document.getElementById("pw");
			msg.innerHTML="<p style='color:red'>password must be more than 7 Character including special character</p>";
		}
		else{
			msg=document.getElementById("pw");
			msg.innerHTML="<p style='color:blue;'>ok to go</p>";
	}
}
function confirm_password(){
	a=document.frm.tenantSignpassword.value;
	b=document.frm.tenantSignconfirmPassword.value;
	if(a!=b){
		msg=document.getElementById("cp");
		msg.innerHTML="<p style='color:red;'>password does not match</p>";
	}
		else{
		msg=document.getElementById("cp");
		msg.innerHTML="<p style='color:blue;'>valid password</p>";
	}
}

function showHint() {
	str=document.getElementById("tenantSignemail").value;
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
	str=document.getElementById("tenantSignnationalId").value;
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

			
 </script>	  
	  
<body>
  <div class="cont">
  <div class="ttenantdemo">
    <div class="ttenantsignUp">
      <div class="ttenanthome__management">Tenant SignUp</div>
      <div class="ttenantSignUp__form">
	  <form action="getTenantSignUpForSelection.php" method="post" name="frm" id="frm" enctype="multipart/form-data">
        <div class="ttenantSignUp__row">
          First Name :
          <input type="text" class="ttenantSignUp__input name" onkeyup="test_fname()" placeholder="First Name" name="tenantSignfirstName" id="tenantSignfirstName" required/>
		  <p id="fn"></p>
        </div>
        <div class="ttenantSignUp__row">
          Last Name :
          <input type="text" class="ttenantSignUp__input name" onkeyup="test_lname()" placeholder="Last Name" name="tenantSignlastName" id="tenantSignlastName" required/>
		  <p id="ln"></p>
        </div>
        <div class="ttenantSignUp__row">
          Date Of Birth :
          <input type="date" class="ttenant_date" placeholder="Date Of Birth" name="tenantSigndateOfBirth" id="tenantSigndateOfBirth" required/>
        </div>
        <div class="ttenantSignUp__row">
        Gender :
        <input type="radio" name="tenantSigngender" id="gender" value="male" checked/> Male
        <input type="radio" name="tenantSigngender" id="gender" value="female"/> Female
        <input type="radio" name="tenantSigngender" id="gender" value="other"/> Other
        </div>
        <div class="ttenantSignUp__row">
        Select Your Photo :
        <input type="file" name="tenantSignuserPhoto" id="tenantSignuserPhoto">
        </div>
        <div class="ttenantSignUp__row">
          Permanent Address :
          <input type="text" class="ttenantSignUp__input name" placeholder="Address" name="tenantSignaddress" id="tenantSignaddress" required/>
        </div>
        <div class="ttenantSignUp__row">
          Phone Number :
          <input type="number" class="ttenantSignUp__input name" onkeyup="test_pn()" placeholder="Phone Number" name="tenantSignphoneNumber" id="tenantSignphoneNumber" required/>
		  <p id="pn"></p>
        </div>
        <div class="ttenantSignUp__row">
          Email :
          <input type="email" class="ttenantSignUp__input name" onkeyup="showHint()" placeholder="example@exm.com" name="tenantSignemail" id="tenantSignemail" required/>
		  <p id="em"></p>
        </div>
        <div class="ttenantSignUp__row">
          National ID :
          <input type="number" class="ttenantSignUp__input name" onkeyup="showHintNID()" placeholder="National ID" name="tenantSignnationalId" id="tenantSignnationalId" required/>
		  <p id="nid"></p>
        </div>
        <div class="ttenantSignUp__row">
          Other Members :
          <input type="text" class="ttenantSignUp__input name" placeholder="Members Information" name="tenantSignotherMember" id="tenantSignotherMember" required/>
        </div>
        <div class="ttenantSignUp__row">
          Building Name :
          <input type="text" class="ttenantSignUp__input name" placeholder="Building Name" name="tenantSignbuildingName" id="tenantSignbuildingName" required/>
        </div>
        <div class="ttenantSignUp__row">
           Flat No :
          <input type="text" class="ttenantSignUp__input name" placeholder="Flat No" name="tenantSignflatNo" id="tenantSignflatNo" required/>
        </div>
        <div class="ttenantSignUp__row">
           Flat Rent :
          <input type="number" class="ttenantSignUp__input name" placeholder="Flat Rent" name="tenantSignflatRent" id="tenantSignflatRent"/>
        </div>
       <div class="ttenantSignUp__row">
          Rent Start Date :
          <input type="date" class="ttenant_date" placeholder="Start Date" name="tenantSignrentStartDate" id="tenantSignrentStartDate" required/>
        </div>
         <div class="ttenantSignUp__row">
          Advance Payment :
          <input type="number" class="ttenantSignUp__input name" placeholder="Payment in TK" name="tenantSignadvPayment" id="tenantSignadvPayment" required/>
        </div>
        <div class="ttenantSignUp__row">
          Password :
          <input type="password" class="ttenantSignUp__input pass" onkeyup="test_password()" placeholder="Password" name="tenantSignpassword" id="tenantSignpassword" required/>
		  <p id="pw"></p>
        </div>
        <div class="ttenantSignUp__row">
          Confirm Password :
          <input type="password" class="ttenantSignUp__input pass" onkeyup="confirm_password()" placeholder="Confirm Password" name="tenantSignconfirmPassword" id="tenantSignconfirmPassword" required/>
		  <p id="cp"></p>
        </div>
        <div class="ttenantSignUp__row">
          Security Question :
        <select class="ttenantsecurityquestion" value="Select A Question" placeholder="Select A Question" name="tenantSignsecurityQuestion" id="tenantSignsecurityQuestion">
        <option value="What is your favorite food ?">What is your favorite food ?</option>
        <option value="What is your favorite game ?">What is your favorite game ?</option>
        <option value="Where is your father born ?">Where is your father born ?</option>
        <option value="Who is your best friend ?">Who is your best friend ?</option>
        </select>
        </div>
        <div class="ttenantSignUp__row">
           Your Answer :
          <input type="text" class="ttenantSignUp__input name" placeholder="Your Answer" name="tenantSignsecurityAnswer" id="tenantSignsecurityAnswer" required/>
        </div>
        <input type="submit" class="ttenantSignUp__submit" value="Add New Tenant" name="tenantSignsubmit">
        <button type="button" class="ttenantSignUp__submit">Cancel</button>
      </div>
	  </form>
    </div>
</body>
</html>
