<?php
if($_SESSION['loggedin'] == true)
    {
    echo "GG ". $_SESSION['username'];
}
    else if($_SESSION['loggedin']){
     header("Location: ../site/home.php");
    }
    else    {
    header("Location: ../php/login.php");
    }

?>
<?php include('../config/footer.php'); ?>    