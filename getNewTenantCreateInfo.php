<?php
session_start();
$_SESSION["tenantBuildingForm"] = $_REQUEST['tenantBuildingForm'];
$_SESSION["tenantFlatForm"] = $_REQUEST['tenantFlatForm'];
$_SESSION["tenantFlatRentForm"] = $_REQUEST['tenantFlatRentForm'];
$_SESSION["tenantFlatIdForm"] = $_REQUEST['tenantFlatDataFrom'];
header("Location:tenantSignUp.php");
?>