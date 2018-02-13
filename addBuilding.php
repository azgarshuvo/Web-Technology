<script  language="javascript">
      xmlhttp = new XMLHttpRequest();
	function buildingname_check(){  	
	a=document.frm.buildingName.value;
	if(a.length<3){
		msg=document.getElementById("bname");
		msg.innerHTML="<p style='color:red;'>should have atleast 3 letters</p>";
	
	}
	else{
		msg=document.getElementById("bname");
		msg.innerHTML="<p style='color:green;'>building name is ok </p>";
	}
	
}
function address_check(){  	
	a=document.frm.address.value;
	if(a.length<8){
		msg=document.getElementById("add");
		msg.innerHTML="<p style='color:red;'>Enter your full address</p>";
	
	}
	else{
		msg=document.getElementById("add");
		msg.innerHTML="<p style='color:green;'>address is good </p>";
	}
	
}
	function totalflat_check(){  	
	a=document.frm.totalFlat.value;
if((a.includes("a")==true)||(a.includes("b")==true)||(a.includes("c")==true)||(a.includes("d")==true)||(a.includes("e")==true)||(a.includes("f")==true)||(a.includes("g")==true)||(a.includes("h")==true)||(a.includes("i")==true)||(a.includes("j")==true)||(a.includes("k")==true)||(a.includes("a")==true)||(a.includes("l")==true)||(a.includes("m")==true)||(a.includes("n")==true)||(a.includes("o")==true)||(a.includes("p")==true)||(a.includes("q")==true)||(a.includes("r")==true)||(a.includes("s")==true)||(a.includes("t")==true)||(a.includes("a")==true)||(a.includes("u")==true)||(a.includes("v")==true)||(a.includes("w")==true)||(a.includes("x")==true)||(a.includes("y")==true)||(a.includes("z")==true))
{
msg=document.getElementById("tflat");
		msg.innerHTML="<p style='color:red;'>needs to be a number only</p>";
	}
	
	
	else{
		msg=document.getElementById("tflat");
		msg.innerHTML="<p style='color:green;'>ok </p>";
	}
	}
	function home_page(){
		window.location.href='LoadPage.php';
	}
	  
 
</script>
 
<html >
<head>
  <title>AddNewAdmin</title>
      <link rel="stylesheet" href="css/building.css">
</head>
<body>
<?php session_start(); if(($_SESSION['userId']!="")&&($_SESSION['user']=="homeowner")) { ?>
  <div class="cont">
  <div class="demo">
    <div class="signUp">
      <div class="home__management">Add Building</div>
      <div class="signUp__form">
      <form  action="addBuildingInfo.php" method="post" name="frm" id="frm" enctype="multipart/form-data">
        
        
        <div class="signUp__row">
          Building Name :
          <input type="text" class="signUp__input name" placeholder="building name" name="buildingName" id="buildingName" onkeyup="buildingname_check()"required/></br>
		  <p id="bname"></p>
        </div>
       
        <div class="signUp__row">
          Address :
          <input type="text" class="signUp__input name" placeholder="addres" name="address" id="address" onkeyup="address_check()" required/></br>
		  <p id="add"></p>
        </div>
        <div class="signUp__row">
          Total Flats :
          <input type="text" class="signUp__input name" placeholder="total flats" name="totalFlat" id="totalFlat" onkeyup="totalflat_check()" required/></br>
		   <p id="tflat"></p>
        </div>
        <div class="signUp__row">
         <input name="generate" type="submit"  class ="signUp__submit" value="Add" />
        </div>
		 <div class="signUp__row">
         <input name="cancel" type="button"  class ="signUp__submit" value="Cancel" onclick="home_page();" />
        </div>
      </form> 
    </div>
<?php } ?>
</body>
</html>