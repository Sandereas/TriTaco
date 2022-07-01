<?php include('../config/header.php'); ?>
<?php include('../config/userdata.php'); ?>
<?php
    $kwaliteit = $_POST['quality'];
    $recensietekst = $_POST['suggestion'];
    $conn = mysqli_connect("localhost", "root","", "practice");
    $query ="insert into feedback(quality_score, feedback)values($kwaliteit, '$recensietekst')";
    $result = mysqli_query($conn, $query);
    if($result)
      echo 'Thank you for your feedback. We\'ll appreciate!';
    else
    die("Something terrible happened. Please try again. ");
    ?>