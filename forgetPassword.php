<!DOCTYPE html>
<html >
<head>
  <title>ForgetPassword</title>
      <link rel="stylesheet" href="css/passwordRecoveryStyle.css">
      <script type="text/javascript">
        function loginPage()
        {
          window.location="loginPage.php";
        }
      </script>
</head>
<body>
  <div class="cont">
  <div class="demo" id="signIn">
    <div class="login">
      <div class="home__management">Forget Password</div>
      <div class="manage__password">Write Your Id and Answer the Question</div>
      <div class="login__form">
	  <form action="getForgetPasswordInfo.php" method="post" name="frm" id="frm">
        <div class="login__row">
        User Id :
          <input type="text" class="login__input name" placeholder="User Id" name="userId" id="userId" required/>
        </div>
         <div class="login__row">
        Security Question :
        <select class="securityquestion" value="Select A Question" placeholder="Select A Question" name="securityQuestion" id="securityQuestion">
        <option value="What is your favorite food ?">What is your favorite food ?</option>
        <option value="What is your favorite game ?">What is your favorite game ?</option>
        <option value="Where is your father born ?">Where is your father born ?</option>
        <option value="Who is your best friend ?">Who is your best friend ?</option>
        </select>
        </div>
        <div class="login__row">
        Your Answer :
          <input type="text" class="login__input pass" placeholder="Your Answer" name="answer" id="answer" required/>
        </div>
        <input type="submit" class="login__submit" value="continue" name="submit">
        <button type="submit" class="login__submit" onclick="loginPage()">Cancel</button>
      </div>
	  </form>
    </div>
</body>
</html>
