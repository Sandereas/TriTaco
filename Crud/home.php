<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miniCRUDSandervdv</title>
    <link rel="stylesheet" href="css/home.css">

</head>

<body>
    <header>
        <div class="box">
            <ul>
                <li> <a href= "home.php"> Home </a> </li>
                <li> <a href= "php/destinations.php"> Destinations </a> </li>
                <li> <a href= "php/order.php"> Order </a> </li>
                <li> <a href= "php/contact.php"> Contact </a> </li>
                <li> <a  href="php/logout.php"> Logout </a> </li>
            <ul>
        </div> 
    </header>


    <main>
        <div class ="box">
            <b> <h1> Dashboard </h1> </b>

            <div class="container">
            <a href="php/login.php" class="buttonhome"> <h1> Login </h1> </a>  <br>
                
            </div>
            <div class="container">
            <a href="php/destinations.php" class="buttonhome"> <h1> Destinations </h1> </a>  <br>
                
            </div>
            <div class="container">
            <a href="php/order.php" class="buttonhome"> <h1> Order </h1> </a>  <br>
                
            </div>
            <div class="container">
            <a href="php/logout.php" class="buttonhome"> <h1> Logout </h1> </a>  <br>
            </div>
            
            <div class="container">
            <a href="php/contact.php" class="buttonhome"> <h1> Contact  </h1> </a>  <br>
                
            </div>
        </div>    
    
        <div class="Image">
        <img src="../assets/images/GG.png" alt="GG Logo">
        </div>
    </main>
    <?php include('config/footer.php'); ?>

 