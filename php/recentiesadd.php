<?php include('../config/header.php'); ?>
<?php include ('../config/recensiesconnect.php'); ?>

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
{
    $recensieID = $_POST ['recensieID'];
    $reismogelijkheidID = ($_POST ['reismogelijkheidID']);
    $userID = $_POST ['userID'];
    $gevalideerd = $_POST ['gevalideerd'];
    $stars = $_POST ['stars'];
    $date = $_POST ['date'];
    $message = $_POST ['message'];


    $sql = "INSERT INTO recensies SET
        recensieID = recensieID,
        reismogelijkheidID = :reismogelijkheidID,
        userID = :userID,
        gevalideerd =:gevalideerd,
        stars = :stars,
        date = :date,
        message = :message
    ";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'recensieID' => $recensieID,
    'reismogelijkheidID' => $reismogelijkheidID,
    'userID' => $userID,
    'gevalideerd' => $gevalideerd,
    'stars' => $stars,
    'date' => $date,
    'message' => $message


]); 
$recensies = $stmt->fetch();
    
    // uitvoeren en opslaan in de database



        if ($recensies > 0) {
                $results_recensies = $stmt->fetch(PDO::FETCH_ASSOC);
  
        //echo "data inserted";
        $_SESSION['add'] = "Uw feedback is achtergelaten!";
        header('Location:recensies.php');
        }
    else {
        //echo "error";
        $_SESSION['add'] = "Er is iets mis gegaan.";
        header('Location:recensiesadd.php');
    }
}
    ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
<div class="form_box shadow">
 <form method="post" action="recensies">
 <div class="heading">
   Feedback Form in PHP
 </div>
 <br/>
 <p>Hoe goed heeft onze website u geholpen?</p>
 <div>
   <div class="stars">
     <img src="" alt=""> <br/>
     <input type="radio" name="quality" value="0"> Bad
   </div>
   <div class="stars">
     <img src="" alt=""> <br/>
     <input type="radio" name="quality" value="1"> Okay
   </div>
   <div class="stars">
     <img src="" alt=""> <br/>
     <input type="radio" name="quality" value="2"> Good
   </div>
   <div class="stars">
     <img src="" alt=""> <br/>
     <input type="radio" name="quality" value="3"> Very good
   </div>
   <div class="stars">
     <img src="" alt=""> <br/>
     <input type="radio" name="quality" value="4"> Perfect
   </div>

 </div>
 
 <p>Heeft u enige opmerkingen? </p>
 <textarea name=" feedbacktekst" rows="8" cols="40"></textarea>
  <input type="submit" name="submit" value="Typ hier uw feedback!">
</form>
 </div>    




</body>
</html>







<?php include('../config/footer.php'); ?>