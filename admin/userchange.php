<?php include('../config/header.php'); ?>
<?php include('../config/userdata.php') ?>

<?php
if($_SESSION['loggedin'] == true && ($_Session['Admincheck'] == true)){
    echo "GG ". $_SESSION['username'];
}
    else if($_SESSION['loggedin']){
     header("Location: ../home.php");
     exit
    }
    else    {
    header("Location: ../php/login.php");
    exit
    }
    
?>

<form action="" method="POST"> 
            
            <table class ="tableaddadmin">

                <tr>
                    <td>username</td>
                    <td><input type="text" name="username" placeholder="Typ hier uw gebruikersnaam" ></td> <br>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password" placeholder="Typ hier uw wachtwoord" ></td> 
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Update Admin" class="buttonupdate">
                    </td>
                </tr>
            </table>
            </form>
        </div> 
    </div>




<?php

if(isset($_POST['submit']))
{
    $gebruikersnaam = $_POST ['username'];
    $password = ($_POST ['password']);



$updateadmin = [
    'username' => $username,
    'password' => $password,

    'userid' => $_GET['userid'],
];
$sql = "UPDATE users SET username=:username, password=:password, WHERE userid=:userid";
$stmt= $pdo->prepare($sql);
$stmt->execute($updateadmin);

    if ($datageb > 0) {
    $results_login = $stmt->fetch(PDO::FETCH_ASSOC);

    //echo "data inserted";
    $_SESSION['add'] = "Admin Changed Succesfull";
    header('Location:home.php');
    }
    else {
    //echo "error";
    $_SESSION['add'] = "Failed to Change Admin";
    header('Location:home.php');
    }
}
?> 

  <?php  include('../config/footer') ?>