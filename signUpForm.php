<!DOCTYPE html>
<html >
<head>
  <title>SignUp</title>
      <link rel="stylesheet" href="css/signUp.css">]
      <script type="text/javascript">
        function signIn()
        {
          window.location="index.html";
        }
		
		function test_fname(){
	    a=document.frm.firstName.value;
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
	    a=document.frm.lastName.value;
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
	a=document.frm.phoneNumber.value;
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
		a=document.frm.password.value;
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
	a=document.frm.password.value;
	b=document.frm.confirmPassword.value;
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
	str=document.getElementById("mail").value;
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
	var url="ownerEmailCheck.php?signal=read&email="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

function showHintNID() {
	str=document.getElementById("nationalId").value;
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
	var url="ownerNidCheck.php?signal=read&nationalId="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
		
		
      </script>
</head>
<body>
  <div class="cont">
  <div class="demo">
    <div class="signUp">
      <div class="home__management">Create An Account</div>
      <div class="signUp__form">
	  <form action="getSignUpInfo.php" method="post" name="frm" id="frm" enctype="multipart/form-data">
        <div class="signUp__row">
          First Name :
          <input type="text" class="signUp__input name" onkeyup="test_fname()" placeholder="First Name" name="firstName" id="firstName" required/>
		  <p id="fn"></p>
        </div>
        <div class="signUp__row">
          Last Name :
          <input type="text" class="signUp__input name" onkeyup="test_lname()" placeholder="Last Name" name="lastName" id="lastName" required/>
		  <p id="ln"></p>
        </div>
        <div class="signUp__row">
          Date Of Birth :
          <input type="date" class="date" placeholder="Date Of Birth" name="dateOfBirth" id="dateOfBirth" required/>
        </div>
        <div class="signUp__row">
        Gender :
        <input type="radio" name="gender" id="gender" value="male" checked/> Male
        <input type="radio" name="gender" id="gender" value="female"/> Female
        <input type="radio" name="gender" id="gender" value="other"/> Other
        </div>
        <div class="signUp__row">
        Select Your Photo :
        <input type="file" name="userPhoto" id="userPhoto" required>
        </div>
        <div class="signUp__row">
          Address :
          <input type="text" class="signUp__input name" placeholder="Address" name="address" id="address" required/>
        </div>
        <div class="signUp__row">
          Phone Number :
          <input type="number" class="signUp__input name" onkeyup="test_pn()" placeholder="Phone Number" name="phoneNumber" id="phoneNumber" required/>
		  <p id="pn"></p>
        </div>
        <div class="signUp__row">
          Email :
          <input type="email" class="signUp__input name" onkeyup="showHint()" placeholder="example@exm.com" name="mail" id="mail" required/>
		  <p id="em"></p>
        </div>
        <div class="signUp__row">
          National ID :
          <input type="number" class="signUp__input name" onkeyup="showHintNID()" placeholder="National ID" name="nationalId" id="nationalId" required/>
		  <p id="nid"></p>
        </div>
        <div class="signUp__row">
        Password :
          <input type="password" class="signUp__input pass" onkeyup="test_password()" placeholder="Password" name="password" id="password" required/>
		  <p id="pw"></p>
        </div>
        <div class="signUp__row">
        Confirm Password :
          <input type="password" class="signUp__input pass" onkeyup="confirm_password()" placeholder="Confirm Password" name="confirmPassword" id="confirmPassword" required/>
		  <p id="cp"></p>
        </div>
        <div class="signUp__row">
        Security Question :
        <select class="securityquestion" value="Select A Question" placeholder="Select A Question" name="securityQuestion" id="securityQuestion">
        <option value="What is your favorite food ?">What is your favorite food ?</option>
        <option value="What is your favorite game ?">What is your favorite game ?</option>
        <option value="Where is your father born ?">Where is your father born ?</option>
        <option value="Who is your best friend ?">Who is your best friend ?</option>
        </select>
        </div>
        <div class="signUp__row">
           Your Answer :
          <input type="text" class="signUp__input name" placeholder="Your Answer" name="securityAnswer" id="securityAnswer" required/>
        </div>
        <input type="submit" class="signUp__submit" value="Confirm Registration" name="submit">
      </div>
	  </form>
    </div>
</body>
</html>
