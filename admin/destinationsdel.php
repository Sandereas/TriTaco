<?php include('../config/header.php');  ?>
<?php include('../config/reisdata.php'); ?>

<?php
 if($_SESSION['loggedin'] == true){
  echo "GG ". $_SESSION['username'];
 }
 else {
         header("Location: ../php/login.php");
 }

$delreis = [
    'reismogelijkheidID' => $_GET['reismogelijkheidID'],
  ];
  $sql = "DELETE FROM reismogelijkheden WHERE reismogelijkheidID = :reismogelijkheidID";
  $stmt= $pdo->prepare($sql);
  $stmt->execute($delreis);
  
  if ($datadest > 0) {
    $results_login = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['add'] = "Destination deleted Succesfull";
    header('Location:../php/destinations.php');
    }
    else {
      echo "error";
    }
  
  ?>
  <?php include('../config/footer.php'); ?>
