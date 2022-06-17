<?php 
if($_SESSION['loggedin'] == true && ($_Session['Admincheck'] == true)){
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

$deldest = [
    'reismogelijkheidID' => $_GET['reismogelijkheidID'],
  ];
  $sql = "DELETE FROM reismogelijkheden WHERE reismogelijkheidID = :reismogelijkheidID";
  $stmt= $pdo->prepare($sql);
  $stmt->execute($deldest);
  
  if ($datageb > 0) {
    $results_login = $stmt->fetch(PDO::FETCH_ASSOC);
  
    //echo "data inserted";
    $_SESSION['add'] = "destination deleted Succesfull";
    header('Location:admin.php');
    }
    else {
    echo "error";
    }
  
  ?>
  <?php include('../config/footer.php'); ?>