<?php include('../config/header.php'); ?>
<?php include('../config/reisdata.php');

 if($_SESSION['loggedin'] == true){
     echo $_SESSION['username'];
 }
 else {
         header("Location: ../php/login.php");
 } ?>

<form action="" method="POST"> 
            
            <table class ="tableaddadmin">
                <td>country</td>
                    <td><input type="text" name="country" placeholder="Welk land?" ></td> 
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="Typ hier uw gebruikersnaam" ></td> <br>
                </tr>
                <tr>
                    <td>afbeelding</td>
                    <td><input type="" name="image" placeholder="Typ hier uw wachtwoord" ></td> 
                </tr>
                <tr>

                    <td>price</td>
                    <td><input type="number" name="price" placeholder="Typ hier uw prijs" ></td> <br>
                </tr>
                <tr>
                    <td>description</td>
                    <td><input type="text" name="description" placeholder="Typ hier uw description" ></td> 
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Update destination" class="buttonupdate">
                    </td>
                </tr>
            </table>
            </form>
        </div> 
    </div>




<?php

if(isset($_POST['submit']))
{
    $country = $_POST ['country'];
    $name = $_POST ['name'];
    $image = ($_POST ['image']);
    $price = ($_POST ['price']);
    $description = ($_POST ['description']);



$updatedest = [
    'country' => $country,
    'name' => $name,
    'image' => $image,
    'price' => $price,
    'description' => $description,
    'reismogelijkheidID' => $_GET['reismogelijkheidID'],
];
$sql = "UPDATE reismogelijkheden SET country=:country, name=:name, image=:image, price=:price, description=:description WHERE reismogelijkheidID=:reismogelijkheidID";
$stmt= $pdo->prepare($sql);
$stmt->execute($updatedest);

    if ($datadest > 0) {
    $results_login = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['add'] = "Destination Changed Succesfull";
    header('Location:../php/destinations.php');
    }
    else {
    $_SESSION['add'] = "Failed to Change Destination";
    header('Location:destinationschange.php');
    }
}