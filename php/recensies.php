<?php include('../config/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form_box shadow">
 <form method="post" action="practice_ac.php">
 <div class="heading">
   Feedback Form in PHP
 </div>
 <br/>
 <p>What do you think about the quality of our blog?</p>
 <div>
   <div class="pic">
     <img src="bad.png" alt=""> <br/>
     <input type="radio" name="quality" value="0"> Bad
   </div>
   <div class="pic">
     <img src="neutral.png" alt=""> <br/>
     <input type="radio" name="quality" value="1"> Okay
   </div>
   <div class="pic">
     <img src="good.png" alt=""> <br/>
     <input type="radio" name="quality" value="2"> Good
   </div>
 </div>
 
 <p>Do you have any suggestion for us? </p>
 <textarea name=" suggestion" rows="8" cols="40"></textarea>
  <input type="submit" name="submit" value="Submit Form">
</form>
 </div>    




</body>
</html>







<?php include('../config/footer.php'); ?>