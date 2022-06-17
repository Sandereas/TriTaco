<?php include('../config/header.php'); ?>
<?php include('../config/userdata.php'); ?>


<?php if($_SESSION['loggedin'] == true){
     echo $_SESSION['username'];
 }
 else {
         header("Location: login.php");
 } ?>


<?php include('../config/footer.php'); ?>