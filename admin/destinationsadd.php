<?php include('../config/header.php'); ?>
<?php include('../config/reisdata.php') ?>

<?php 
if($_SESSION['loggedin']  == true) {
    echo "GG ". $_SESSION['username'];
}
    else    {
        header("Location: ..php/login.php");
    }


?>

    <div class="mainer">
        <div class="box"> 
            <h1> Add destination</h1>

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
            
            <table class ="tableadddest">

                <tr>
                    <td>Country</td>
                    <td><input type="text" name="country" placeholder="Typ here the country name" ></td> <br>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="Typ here the destination name" ></td> 
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="text" name="image" placeholder="Place here the image url" ></td> <br>
                </tr>
                <tr> 
                    <td>Price</td>
                    <td><input type="text" name="price" placeholder="Typ here the price" ></td> <br>
                </tr>
                <tr> 
                    <td>Description</td>
                    <td><input type="text" name="description" placeholder="Typ here the description" ></td> <br>
                </tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Destination" class="buttonsub">
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
    $country = $_POST ['country'];
    $name = ($_POST ['name']);
    $image = $_POST ['image'];
    $price = $_POST ['price'];
    $description = $_POST ['description'];

    $sql = "INSERT INTO reismogelijkheden SET
        country =:country,
        name =:name,
        image =:image,
        price =:price,
        description =:description
    ";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'country' => $country,
    'name' => $name,
    'image' => $image,
    'price' => $price,
    'description' => $description
    
]); 
$users = $stmt->fetch();
    
    // uitvoeren en opslaan in de database



        if ($datadest > 0) {
                $results_login = $stmt->fetch(PDO::FETCH_ASSOC);
  
        //echo "data inserted";
        $_SESSION['add'] = "Destination Added Succesfull";
        header('Location:../php/destinations.php');
        }
    else {
        //echo "error";
        $_SESSION['add'] = "Failed to add Destination";
        header('Location:destinationsadd.php');
    }
}
    ?>

<?php include('../config/footer.php'); ?>    