<?php include('../config/header.php'); ?>

<?php

if(isset($_POST['username']) && isset($_POST['password'])){

        $stmt = $pdo->prepare("SELECT * FROM users
        where username = :username
        AND password = :password");
        
        $stmt->execute([
            'username' => $_POST['username'], 
            'password' => $_POST['password']]);

        $datageb = $stmt->fetch();  
        if ($datageb != false){
            $_SESSION['username'] = $datageb['username'];
            $_SESSION['userid'] = $datageb['userid'];
            $_SESSION['loggedin'] = true;
            header("Location: ../site/home.php");


        }
        else { 
            //echo "login gegevens incorrect";
            

         }
}
?>





<form id = "FormLogin" action="login.php" method="post">
    <label for="username">username:</label><br>
    <input type="text" id="username" name="username" value="" placeholder="username"><br>
    <label for="password">password:</label><br>
    <input type="password" id="password" name="password" value="" placeholder="password"><br>
    <input type="submit" value="Submit">
</form>



<a href="register.php" class="buttonadmin"> Add User</a>



<?php include('../config/footer.php'); ?>