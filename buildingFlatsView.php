<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/table.css">
	  <script type="text/javascript">
	  function backToHome()
	  {
		  window.location="LoadPage.php";
	  }
	  </script>
	  <?php
	  include("getInformation.php");
	  if($_SESSION["allFlatDetailsInfo"]!="")
	  {
		  $flatDetailsInfo=getFlatDetailsFromDB();
	  }
	$arr= json_decode($flatDetailsInfo, true);
    ?>
</head>
<body>
<?php if($_SESSION["allFlatDetailsInfo"]!="") { ?>
<div class="cont">
<div class="text">
<h4>Building Flats Information</h4>
</div>
<div class="tablebutton">
<button type="button" class="table__submit" onclick="backToHome()">Back To Home</button>
</div>
<div class="tablePosition">
<table>
  <tr>
    <th>Flat Number</th>
    <th>Building Name</th>
    <th>Location</th>
	<th>Other Information</th>
    <th>Rent Cost</th>
    <th>Availability</th>
  </tr>
  <?php foreach($arr as $result) { ?>
  <tr>
    <td><?php echo $result['flatId']; ?></td>
    <td><?php echo $result['buildingName']; ?></td>
    <td><?php echo $result['address']; ?></td>
	<td><?php echo $result['otherInfo']; ?></td>
	<td><?php echo $result['rentCost']; ?></td>
	<td><?php if(($result['tenantId']!="")||($result['leaveDate']!="0000-00-00")) {echo "Available from".$result['leaveDate'];}
	if(($result['leaveDate']=="0000-00-00")&&($result['tenantId']=="")){echo "Available";}?></td>
  </tr>
  <?php } ?>
</table>
</div>
</div>
<?php } ?>
</body>
</html>