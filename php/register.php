<?php include('../config/header.php'); ?>
<?php include('../config/userdata.php') ?>

<?php 
if($_SESSION['loggedin']  == true) {
    header("Location: ../site/home.php");
}
    else    {
    }
    exit


?>

    <div class="mainer">
        <div class="box"> 
            <h1> Add Admin</h1>

            <br>

             <?php
                if(isset($_SESSION['add']))
                 {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                 }
             ?>
            <br>

            <form action="" method="POST"> 
            
            <table class ="tableaddadmin">

                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="Typ hier uw gebruikersnaam" ></td> <br>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Typ hier uw wachtwoord" ></td> 
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="Typ hier uw email" ></td> <br>
                </tr>
                <tr> 
                    <td>Admin</td>
                    <td><input type="text" name="admin" placeholder="Typ hier uw email" ></td> <br>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="buttonsub">
                    </td>
                </tr>
            </table>
            </form>
        </div> 
    </div>

<?php
    //Add Admin
    if(isset($_POST['submit']))
{
    $username = $_POST ['username'];
    $password = ($_POST ['password']);
    $email = $_POST ['email'];
    $admin = $_POST ['admin'];

    $sql = "INSERT INTO users SET
        username = :username,
        password =:password,
        email = :email,
        admin =:admin
    ";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'username' => $username,
    'password' => $password,
    'email' => $email,
    'admin' => $admin
]); 
$users = $stmt->fetch();
    
    // uitvoeren en opslaan in de database



        if ($datageb > 0) {
                $results_login = $stmt->fetch(PDO::FETCH_ASSOC);
  
        //echo "data inserted";
        $_SESSION['add'] = "User Added Succesfull";
        header('Location:../home.php');
        }
    else {
        //echo "error";
        $_SESSION['add'] = "Failed to add User";
        header('Location:login.php');
    }
}
    ?>

<?php include('../config/footer.php'); ?>    