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

<div class="mainer">
    <div class="box">
     <h1> Add Feedback!</h1>

     <br>
<?php
if(isset($_SESSION['add']))
{
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}
?>
<br>

<form action= "" method="POST">

<table class= "tableaddrecensies">
                <tr>
<select name='quality'>

<h1> Choose here how many stars you give us! </h1>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
</tr>

                <tr>
                    <td>Message</td>
                    <td><input type="text" name="message" placeholder="Typ here the message" ></td> 
                </tr>
                <tr>

                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Feedback" class="buttonsub">
                    </td>
                </tr>
            </table>
</form>
    <!-- //Add Recensies -->
   <?php if(isset($_POST['submit'])) 
    {

        $quality = $_POST ['quality'];
        $message = $_POST ['message'];

        $sql = "INSERT INTO recensies SET quality = :quality, message = :message";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'quality' => $quality,
            'message' => $message
        ]); 
        $recensies = $stmt->fetch();

        // uitvoeren en opslaan in de database
        if ($datadest > 0) {
            $results_login = $stmt->fetch(PDO::FETCH_ASSOC);

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


<!-- 



<div class="form_box shadow">
 <form method="post" action="recensies.php">
 <div class="heading">
  Laat hier uw feedback achter!
 </div>
 <br/>
 <p>Hoe goed heeft onze website u geholpen?</p>
 <div>
    <select name='quality'>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

 </div>
 
 <p>Heeft u enige opmerkingen? </p>
 <textarea name=" feedbacktekst" rows="6" cols="40"></textarea>
  <input type="submit" name="submit" value="Typ hier uw feedback!">
</form>
 </div>    
 -->



</body>
</html>








<?php include('../config/footer.php'); ?>