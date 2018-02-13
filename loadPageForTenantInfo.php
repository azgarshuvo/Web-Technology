<?php
session_start();
$_SESSION['loadPageForTenantdata']=$_REQUEST["loadPageForTenantdata"];
header("Location:homeOwnerPage1.php");
?> 