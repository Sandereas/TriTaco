<?php include('../config/header.php'); 

unset($_SESSION["userid"]);
unset($_SESSION["username"]);
$_SESSION['loggedin'] = false;

header("Location:login.php");

include('../config/footer.php'); 
?>