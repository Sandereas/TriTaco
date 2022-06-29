<?php include('../config/header.php'); ?>
<?php include('../config/userdata.php') ?>

<?php
 if($_SESSION['loggedin'] == true){
     echo "GG ". $_SESSION['username'];
 }
 else {
         header("Location: login.php");
         
     }
     
?>


<form action="" method="POST"> 
            
            <table class ="tableaddadmin">

                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="Typ here your username" ></td> <br>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Typ here your password" ></td> 
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="Typ here your email" ></td> 
                </tr>
                <tr>
                    <td>Admin</td>
                    <td><input type="text" name="admin" placeholder="admin (yes/no)" ></td> 
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Update User" class="buttonupdate">
                    </td>
                </tr>
            </table>
            </form>
        </div> 
    </div>




<?php

if(isset($_POST['submit']))
{
    $username = $_POST ['username'];
    $password = ($_POST ['password']);
    $email = ($_POST ['email']);
    $admin = ($_POST ['admin']);



$updateadmin = [
    'username' => $username,
    'password' => $password,
    'email' => $email,
    'admin' => $admin,
    'userID' => $_GET['userID'],
];
$sql = "UPDATE users SET username=:username, password=:password, email=:email, admin=:admin WHERE userID=:userID";
$stmt= $pdo->prepare($sql);
$stmt->execute($updateadmin);

    if ($datageb > 0) {
    $results_login = $stmt->fetch(PDO::FETCH_ASSOC);

    //echo "data inserted";
    $_SESSION['add'] = "Admin Changed Succesfull";
    header('Location:admin.php');
    }
    else {
    //echo "error";
    $_SESSION['add'] = "Failed to Change Admin";
    header('Location:userchange.php');
    }
}
?> 
<footer>
       Reisbureau GG - Product created by Sander en Keyan
    </footer>
    <script src="../js/login.js"></script>
</body>
</html>
