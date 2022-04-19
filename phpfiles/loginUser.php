<?php 

include "connection.php";

$sql = "SELECT * FROM users WHERE UserName = :UserName AND UserPassword =:UserPassword";
$stmt = $conn->prepare($sql);
$stmt->bindParam("UserName", $_POST['UserName']);
$stmt->bindParam("UserPassword", $_POST['UserPassword']);
$stmt->execute();
$result = $stmt->fetchAll();

$username = $_POST['UserName'];

if(count($result) > 0){
    $_SESSION["UserName"] = $username;
    header('index.php');
} else{
    echo "username niet gevonden";
}
?>