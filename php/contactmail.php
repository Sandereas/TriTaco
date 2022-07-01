<?php include('../config/header.php'); ?>

<?php if($_SESSION['loggedin'] == true){
     echo $_SESSION['username'];
 }
 else {
         header("Location: login.php");
 } ?>


<div class="container">
  <form action="contact.php">

    <label for="fullname">Full name</label>
    <input type="text" id="fullname" name="fullname" placeholder="Your full name.."> 
    <br> <br>
    <label for="username">User Name</label>
    <input type="text" id="username" name="username" placeholder="Your user name..">
    <br> <br>
    <label for="email">Email</label>
    <input type="email" id="email" name="Email" placeholder="Your email.">
    <br> <br>
    <label for="Type">Type mail</label>
    <select id="Type" name="Type">
      <option value="Vraag">Vraag</option>
      <option value="Klacht">Klacht</option>
      <option value="Opmerking">Opmerking</option>
      <option value="Overig">Overig</option>
    </select>
    <br>
    <label for="subject"></label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>

<?php include('../config/footer.php'); ?>