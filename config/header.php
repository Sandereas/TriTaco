<?php include('connection.php'); ?>
<?php include('userdata.php') ?>
<?php include('reisdata.php') ?>

<?php require 'reisdata.php'; 

// if($_POST['submit']) {
//     $key = $_POST ['key'];
//     $query = $pdo->prepare ('SELECT * FROM reismogelijkheden WHERE country LIKE :name ORDER BY country');
//     $query->bindValue(':country', '%'.$key. '%', PDO::PARAM_STR);
//     $query->execute();
//     $results = $query->fetchALL();
//     $rows = $query->rowCount();
// }


?>
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
        <div class="box2">

            <ul>
                <br> <br>
                <li> <a href= "../site/home.php"> Home </a> </li>
                <li> <a href= "../php/destinations.php"> Destinations </a> </li>
                <li> <a href= "../php/order.php"> Order </a> </li>
                <li> <a href= "../php/contact.php"> Contact </a> </li>
                <li> <a href="../php/logout.php"> Logout </a> </li>
                <li> <a href="../admin/admin.php"> Admin </a> </li>
            <ul>
        </div> 
        <div class="box2">
            <form action="../php/destinations.php" method="post">
                <input type="tekst" placeholder="search for destination..." name="key">
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>

    </header>