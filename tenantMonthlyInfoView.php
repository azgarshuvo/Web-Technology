<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/table.css">
  <script src="js/source.js"></script>
	  <script type="text/javascript">
	  function backToHome()
	  {
		  window.location="LoadPage.php";
	  }
	  </script>
	  <?php
	  include("getInformation.php");
	  if($_SESSION['tenantMonthlyPaymentId']!="")
	  {
		  $tenantMonthlyPayment=getTenantMonthlyPaymentFromDB();
	  }
	$arr = json_decode($tenantMonthlyPayment, true);
    ?>
</head>
<body>
<?php if($_SESSION['tenantMonthlyPaymentId']!="") { ?>
<div class="cont">
<div class="text">
<h4>Tenant Mothly Payment Information</h4>
</div>
<div class="tablebutton">
<button type="button" class="table__submit" onclick="backToHome()">Back To Home</button>
</div>
<div >
<table>
  <tr>
    <th>Payment Date</th>
    <th>Tenant ID</th>
    <th>Building Name</th>
	<th>Flat No</th>
    <th>Gas Bill</th>
    <th>Water Bill</th>
	<th>Electricity Bill</th>
    <th>Others</th>
    <th>House Rent</th>
	<th>Total Payment</th>
  </tr>
  <?php foreach($arr as $result) { ?>
  <tr>
    <td><?php echo $result['paymentDate']; ?></td>
    <td><?php echo $result['tenantId']; ?></td>
    <td><?php echo $result['buildingName']; ?></td>
	<td><?php echo $result['flatNo']; ?></td>
	<td><?php echo $result['gasBill']; ?></td>
	<td><?php echo $result['waterBill']; ?></td>
	<td><?php echo $result['electricityBill']; ?></td>
	<td><?php echo $result['otherBill']; ?></td>
	<td><?php echo $result['houseRent']; ?></td>
	<td><?php echo $result['totalPayment']; ?></td>
  </tr>
  <?php } ?>
</table>
</div>
</div>
<?php } ?>
</body>
</html>