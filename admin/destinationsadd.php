<?php 
if($_SESSION['loggedin'] == true) {
    echo "GG ". $_SESSION['username'];
}
    else if($_SESSION['loggedin']){
     header("Location: ../home.php");
     exit
    }
    else    {
    header("Location: ../php/login.php");
    exit
}

?>
<?php include('../config/footer.php'); ?>    