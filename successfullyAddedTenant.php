<!DOCTYPE html>
<html >
<head>
  <title>Success</title>
      <link rel="stylesheet" href="css/successfulSignup.css">;
<script type="text/javascript">
function backToHome()
{window.location="LoadPage.php";}
</script>
<body>
<?php session_start();
if(($_SESSION["userId"]=="")||($_SESSION["user"]!="homeowner"))
{
	header("Location:logout.php");
}
else{	
?>
  <div class="cont">
  <div class="successDemo">
    <div class="successUp">
      <div class="success">Successful Added</div>
      <div class="success__form">
        <div class="success__row">
          Your Id :
          <input type="text" class="success__input name" placeholder="Id" name="id" id="id" value="<?php echo $_SESSION["NewTenantId"]; ?>"/>
        </div>
        <div class="success__row">
          Password :
          <input type="text" class="success__input pass" placeholder="Password" name="password" id="password" value="12345"/>
        </div>
        <button class="success__submit" name="done " id= "done" onclick="backToHome()">Done</button>
      </div>
    </div>
<?php } ?>
</body>
</html>
