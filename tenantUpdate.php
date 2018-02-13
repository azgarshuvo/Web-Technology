<!DOCTYPE html>
<html >
<head>
  <title>Add New Tenant</title>
      <link rel="stylesheet" href="css/SignUpStyle.css">;
<body>
  <div class="cont">
  <div class="demo">
    <div class="signUp">
      <div class="home__management">Add New Tenant</div>
      <div class="tenantSignUp__form">
	  <form action="getTenantSignUpInfo.php" method="post" name="frm" id="frm" enctype="multipart/form-data">
        <div class="tenantSignUp__row">
          First Name :
          <input type="text" class="tenantSignUp__input name" placeholder="First Name" name="firstName" id="firstName" required/>
        </div>
        <div class="tenantSignUp__row">
          Last Name :
          <input type="text" class="tenantSignUp__input name" placeholder="Last Name" name="lastName" id="lastName" required/>
        </div>
        <div class="tenantSignUp__row">
          Date Of Birth :
          <input type="date" class="tenant_date" placeholder="Date Of Birth" name="dateOfBirth" id="dateOfBirth" required/>
        </div>
        <div class="tenantSignUp__row">
        Gender :
        <input type="radio" name="gender" id="gender" value="male" checked/> Male
        <input type="radio" name="gender" id="gender" value="female"/> Female
        <input type="radio" name="gender" id="gender" value="other"/> Other
        </div>
        <div class="tenantSignUp__row">
        Select Your Photo :
        <input type="file" name="userPhoto" id="userPhoto">
        </div>
        <div class="tenantSignUp__row">
          Permanent Address :
          <input type="text" class="tenantSignUp__input name" placeholder="Address" name="address" id="address" required/>
        </div>
        <div class="tenantSignUp__row">
          Phone Number :
          <input type="number" class="tenantSignUp__input name" placeholder="Phone Number" name="phoneNumber" id="phoneNumber" required/>
        </div>
        <div class="tenantSignUp__row">
          Email :
          <input type="email" class="tenantSignUp__input name" placeholder="example@exm.com" name="email" id="email" required/>
        </div>
        <div class="tenantSignUp__row">
          National ID :
          <input type="number" class="tenantSignUp__input name" placeholder="National ID" name="nationalId" id="nationalId" required/>
        </div>
        <div class="tenantSignUp__row">
          Other Members :
          <input type="text" class="tenantSignUp__input name" placeholder="Members Information" name="otherMember" id="otherMember" required/>
        </div>
        <div class="tenantSignUp__row">
          Building Name :
          <input type="text" class="tenantSignUp__input name" placeholder="Building Name" name="buildingName" id="buildingName" required/>
        </div>
        <div class="tenantSignUp__row">
           Flat No :
          <input type="text" class="tenantSignUp__input name" placeholder="Flat No" name="flatNo" id="flatNo" required/>
        </div>
        <div class="tenantSignUp__row">
           Flat Rent :
          <input type="number" class="tenantSignUp__input name" placeholder="Flat Rent" name="flatRent" id="flatRent"/>
        </div>
       <div class="tenantSignUp__row">
          Rent Start Date :
          <input type="date" class="tenant_date" placeholder="Start Date" name="rentStartDate" id="rentStartDate" required/>
        </div>
         <div class="tenantSignUp__row">
          Advance Payment :
          <input type="number" class="tenantSignUp__input name" placeholder="Payment in TK" name="advPayment" id="advPayment" required/>
        </div>
        <input type="submit" class="tenantSignUp__submit" value="Add New Tenant" name="submit">
        <button type="button" class="tenantSignUp__submit">Cancel</button>
      </div>
	  </form>
    </div>
</body>
</html>
