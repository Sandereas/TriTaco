<?php include "../config/header.php" ?>
<?php include "../config/userdata.php" ?>

<?php

 if($_SESSION['loggedin'] == true){
     echo "GG ". $_SESSION['username'];
 }
 else {
         header("Location: login.php");
         
     }
?>


<br><br>

<?php  
  $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
  $stmt->bindParam(':username', $_SESSION['username']);
  $stmt->execute(); 
  $fetch = $stmt->fetch();
?>

<div class="box1">
     <h4><?php echo $fetch['username']; ?></h4>
     <p><?php echo $fetch['email']; ?></p>
     <p><?php echo $fetch['userID']; ?></p>
     <br>
     <br>


  
    <a href="../admin/userchange.php?userID=<?php echo $fetch['userID']; ?>" class="buttonupdate"> Update Useraccount </a> 
 </div>

<br>
<br>

<?php include "../config/footer.php" ?>