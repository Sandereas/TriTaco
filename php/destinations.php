<?php include('../config/header.php'); ?>


<?php if($_SESSION['loggedin'] == false){
 
         header("Location: login.php");
}
 ?>


<?php include('../config/footer.php'); ?>