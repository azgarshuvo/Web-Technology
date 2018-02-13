<!DOCTYPE html>
<html >
<head>
  <title>SignIn</title>
      <link rel="stylesheet" href="css/style.css">
      <script type="text/javascript">
      	function signUpForm() {
      		window.location="signUpSelection.php";
      	}
        function forgetPassword() {
          window.location="forgetPassword.php";
        }
        function test()
        {
          document.frm.submit();
        }
      </script>
</head>
<body>
<?php session_start();
$_SESSION["userId"]=""; $_SESSION["user"]="";
?> 
  <div class="cont">
  <div class="demo" id="signIn"s>
    <div class="login">
      <div class="home__management">Home Management</div>
      <div class="manage__home">Manage Your Home Tenant</div>
      <div class="login__form">
      <form action="getLoginInfo.php" method="post" name="frm" id="frm">
        <div class="login__row">
          <input type="text" class="login__input name" placeholder="User Id" name="userId" id="userId" required/>
        </div>
        <div class="login__row">
          <input type="password" class="login__input pass" placeholder="Password" name="password" id="password" required/>
        </div>
        <input type="submit" class="login__submit" name="submit" value="Sign In"/>
        <p class="login__forget">Forget Password ? &nbsp;<a onclick="forgetPassword()">Click Here</a></p>
        <p class="login__signup">Don't have an account? &nbsp;<a onclick="signUpForm()">Sign up</a></p>
      </div>
      </form>
    </div>
</body>
</html>
