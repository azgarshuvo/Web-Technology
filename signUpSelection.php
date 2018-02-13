<!DOCTYPE html>
<html >
<head>
  <title>Selection Panel</title>
      <link rel="stylesheet" href="css/signUpSelection.css">
      <script type="text/javascript">
	  function tenantSign(){
      		window.location="tenantSignUpForSelection.php";
      	}
		function ownerSign(){
      		window.location="signUpForm.php";
      	}
		function cancel(){
      		window.location.href="loginPage.php";
      	}
      </script>
</head>
<div class="signDemo">
    <div class="sign">
      <div class="selection">Select The Panel</div>
      <div class="selectionForm">
        <button type="button" class="selectionSubmit" name="tenant" onclick="tenantSign()">SignUp as Tenant</button>
		<button type="button" class="selectionSubmit" name="owner" onclick="ownerSign()">SignUp as Home Owner</button>
		<button type="button" class="selectionSubmit" name="cancel" onclick="cancel()">Cancel</button>
      </div>
    </div>
	</div>
	</body>
</html>