<?php include('../config/header.php'); ?>
<?php include('../config/userdata.php') ?>

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
?>

<?php 


$deladmin = [
  'userid' => $_GET['userid'],
];
$sql = "DELETE FROM users WHERE userid = :userid";
$stmt= $pdo->prepare($sql);
$stmt->execute($deladmin);

if ($datageb > 0) {
  $results_login = $stmt->fetch(PDO::FETCH_ASSOC);

  //echo "data inserted";
  $_SESSION['add'] = "User Deleted Succesfull";
  header('Location:admin.php');
  }
  else {
  echo "error";
  }

?>
<?php include('../config/footer.php'); ?>