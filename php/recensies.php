<?php include('../config/header.php'); ?>
<?php include ('../config/recensiesconnect.php'); ?>
<?php include ('../config/userdata.php'); ?>
<?php include ('../config/reisdata.php'); ?>

<?php
 if($_SESSION['loggedin'] == true){
     echo "GG ". $_SESSION['username'];
 }
 else {
         header("Location: login.php");
         
     }
     
?>

<?php
    //Add Recensies
    if(isset($_POST['submit']))
    // if(isset($_GET['submit']))
    // $reismogelijkheidID = ($_GET ['reismogelijkheidID']);
    // $userID = ($_GET ['userID']);
    $stars = $_POST ['stars'];
    $message = $_POST ['message'];


    $sql = "INSERT INTO recensies SET
        stars = :stars,
        message = :message
    ";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    
    'stars' => $stars,
    'message' => $message


]); 
$recensies = $stmt->fetch();
    
    // uitvoeren en opslaan in de database



        if ($recensies > 0) {
                $recensies = $stmt->fetch(PDO::FETCH_ASSOC);
  
        //echo "data inserted";
        $_SESSION['add'] = "Uw feedback is achtergelaten!";
        header('Location:recensies.php');
        }
    else {
        //echo "error";
        $_SESSION['add'] = "Er is iets mis gegaan.";
        header('Location:recensiesadd.php');
    }
    ?>






<div class="form_box shadow">
 <form method="post" action="recensies.php">
 <div class="heading">
  Laat hier uw feedback achter!
 </div>
 <br/>
 <p>Hoe goed heeft onze website u geholpen?</p>
 <div>
   <div class="stars">
     <img src="" alt=""> <br/>
     <input type="" name="quality" value="0"> Bad
   </div>
   <div class="stars">
     <img src="" alt=""> <br/>
     <input type="" name="quality" value="1"> Okay
   </div>
   <div class="stars">
     <img src="" alt=""> <br/>
     <input type="" name="quality" value="2"> Good
   </div>
   <div class="stars">
     <img src="" alt=""> <br/>
     <input type="" name="quality" value="3"> Very good
   </div>
   <div class="stars">
     <img src="" alt=""> <br/>
     <input type="" name="quality" value="4"> Perfect
   </div>

 </div>
 
 <p>Heeft u enige opmerkingen? </p>
 <textarea name=" feedbacktekst" rows="6" cols="40"></textarea>
  <input type="submit" name="submit" value="Typ hier uw feedback!">
</form>
 </div>    




</body>
</html>







<?php include('../config/footer.php'); ?>