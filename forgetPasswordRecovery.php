<!DOCTYPE html>
<html >
<head>
  <title>ForgetPassword</title>
      <link rel="stylesheet" href="css/passwordRecoveryStyle.css">
      <script type="text/javascript">
        function loginPage()
        {
          window.location="loginPage.html";
        }
      </script>
</head>
<body>
  <div class="cont">
  <div class="demo" id="signIn">
    <div class="login">
      <div class="home__management">Password Recovery</div>
      <div class="login__form">
	  <form action="getForgetPasswordRecoveryInfo.php" method="post" name="frm" id="frm">
        <div class="login__row">
        <h4>User Id : </h4> <h4><?php session_start(); echo $_SESSION['id']; ?></h4>
        </div>
        <div class="login__row">
        New Password :
          <input type="Password" class="login__input pass" name="newPassword" id="newPassword" placeholder="New Password" required/>
        </div>
        <div class="login__row">
        Confirm Password :
          <input type="Password" class="login__input pass" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required/>
        </div>
        <input type="submit" class="login__submit" name="submit" value="Continue">
        <button type="button" class="login__submit" onclick="loginPage()">Cancel</button>
      </div>
	  </form>
    </div>
</body>
</html>
