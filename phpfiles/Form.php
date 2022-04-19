

<?php 

unset($_SESSION['UserName']);
unset($_SESSION['UserPassword']);
$_SESSION[''] = false;


?>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="phpfiles/loginUser.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="UserName" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="UserPassword" required>
        
      <button type="submit">Login</button>
      <label id="RM1">
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    <p>  <a class="Registerbutton" href="phpfiles/Register.php">No account? Here you can make one.</a>  </p>
  </form>
</div>
<script >

</script>

