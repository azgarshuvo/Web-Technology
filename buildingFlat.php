<?php
session_start();
$_SESSION["allFlatDetailsInfo"]=$_REQUEST["flatDetailsdata"];
header("Location:buildingFlatsView.php");
?> 