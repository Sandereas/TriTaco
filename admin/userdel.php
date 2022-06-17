<?php include('data/header.php'); ?>
<?php include('../config/gebruikersimport.php') ?>

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
  'id' => $_GET['id'],
];
$sql = "DELETE FROM gebruikers WHERE id = :id";
$stmt= $pdo->prepare($sql);
$stmt->execute($deladmin);

if ($datageb > 0) {
  $results_login = $stmt->fetch(PDO::FETCH_ASSOC);

  //echo "data inserted";
  $_SESSION['add'] = "Admin Deleted Succesfull";
  header('Location:admin.php');
  }
  else {
  echo "error";
  }

?>
<?php include('data/footer.php'); ?>