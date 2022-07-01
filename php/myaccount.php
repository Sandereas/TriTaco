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
  $stmt = $pdo->prepare('SELECT * FROM `users` WHERE `username` = '. $_SESSION['username'] .'');
  $stmt->execute(); 
  $fetch = $stmt->fetch();
?>

<div class="box1">
     <h4><?php echo $fetch['username']; ?></h4>
     <p><?php echo $fetch['email']; ?></p>

    <a href="userchange.php?userID=<?php echo $row['userID']; ?>" class="buttonupdate"> Update Useraccount </a> 
                
 </div>

  











<?php include "../config/footer.php" ?>