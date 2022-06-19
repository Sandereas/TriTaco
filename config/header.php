<?php include('connection.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDSandervdv</title>
    <link rel="stylesheet" href="../css/home.css">
    



</head>
<body>
    <header>
        <div class="box">
            
            <ul>
                <li> <?php if($_SESSION['loggedin'] == true){
                echo $_SESSION['username']; } ?> </li>
                <br> <br>
                <li> <a href= "../site/home.php"> Home </a> </li>
                <li> <a href= "../php/destinations.php"> Destinations </a> </li>
                <li> <a href= "../php/order.php"> Order </a> </li>
                <li> <a href= "../php/contact.php"> Contact </a> </li>
                <li> <a href="../login/logout.php"> Logout </a> </li>
            <ul>
        </div> 
    </header>