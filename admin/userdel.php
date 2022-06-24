<?php include('../config/header.php'); ?>
<?php include('../config/userdata.php') ?>

<?php
 if($_SESSION['loggedin'] == true){
     echo "GG ". $_SESSION['username'];
 }
 else {
         header("Location: login.php");
         
     }



$deluser = [
  'userID' => $_GET['userID'],
];
$sql = "DELETE FROM users WHERE userID = :userID";
$stmt= $pdo->prepare($sql);
$stmt->execute($deluser);

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