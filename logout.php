<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['userId']);
session_destroy();
header("Location: loginPage.php");
?>