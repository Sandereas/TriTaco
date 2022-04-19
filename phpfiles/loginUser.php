<?php 
ob_start();
include "connection.php";

$sql = "SELECT * FROM users WHERE UserName = :UserName AND UserPassword =:UserPassword";
$stmt = $conn->prepare($sql);
$stmt->bindParam("UserName", $_POST['UserName']);
$stmt->bindParam("UserPassword", $_POST['UserPassword']);
$stmt->execute();
$result = $stmt->fetchAll();

$username = $_POST['UserName'];

if(count($result) > 0){
    
session_start();
    $_SESSION["UserName"] = $username;
    
    if(isset($_SESSION["UserName"])){
        
        echo  $_SESSION["UserName"];

        header('Location: ../index.php');
        ob_get_contents();
        exit();        
        

    }
    
} else{
    echo "username niet gevonden";
}
?>