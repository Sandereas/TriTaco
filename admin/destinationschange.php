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
                    <td>naam</td>
                    <td><input type="text" name="name" placeholder="Typ hier uw gebruikersnaam" ></td> <br>
                </tr>
                <tr>
                    <td>afbeelding</td>
                    <td><input type="" name="image" placeholder="Typ hier uw wachtwoord" ></td> 
                </tr>
                    <td>price</td>
                    <td><input type="number" name="price" placeholder="Typ hier uw prijs" ></td> <br>
                </tr>
                <tr>
                    <td>beschrijving</td>
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
    $name = $_POST ['name'];
    $image = ($_POST ['image']);
    $price = ($_POST ['price']);
    $description = ($_POST ['description']);



$updatedest = [
    'name' => $name,
    'image' => $image,
    'price' => $price,
    'description' => $description,
    'reismogelijkheidID' => $_GET['reismogelijkheidID'],
];
$sql = "UPDATE reismogelijkheden SET name=:name, image=:image, price=:price, description=WHERE userid=:userid";
$stmt= $pdo->prepare($sql);
$stmt->execute($updatedest);

    if ($datadest > 0) {
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