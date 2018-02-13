<?php
session_start();
$_SESSION['tenantMonthlyPaymentId']=$_REQUEST["tenantMonthlyPaymentId"];
header("Location:tenantMonthlyInfoView.php");
?> 