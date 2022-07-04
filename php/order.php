<?php include('../config/header.php'); ?>
<?php include('../config/userdata.php'); ?>
<?php include ('../config/boekingen.php'); ?>

<?php if($_SESSION['loggedin'] == true){
     echo $_SESSION['username'];
 }
 else {
         header("Location: login.php");
 } ?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Orders</title>
</head>
<body>
  <main>
  <div class ="box">
        <b> <h1> Destination list</h1> </b>
        <br>
        <br>

        <?php if(isset($_SESSION['destination']))
                 {
                    echo $_SESSION['destination'];
                    unset($_SESSION['destination']);
                 }
        ?>
        <br> <br>

    <br>
    <br>
    <table class ="tabledest">
    <tr>
        <th>ReismogelijkheidID</th>
        <th>Country</th>
        <th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Description</th>
    </tr>
    <?php 
            $dataToLoop = $datadest;

            if(isset($results)) {
                $dataToLoop = $results;
            }

                foreach ($dataToLoop as $row)  {?>
                    <tr>
                        <td> 
                            <?php echo $row['reismogelijkheidID'];?>
                        </td>
                        <td>
                            <?php echo $row['country']; ?>
                        </td>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                        <td>
                        <img class="imgstyle" src="../images/<?php echo $row['image']; ?>">
                        </td>
                        <td>
                        € <?php echo $row['price']; ?>
                        </td>
                        <td>
                            <?php echo $row['description']; ?>
                        </td>
                        <td>
                        <a href="../admin/orderadd.php?reismogelijkheidID=<?php echo $row['reismogelijkheidID']; ?>" class="buttonupdate"> Update Reis </a> 
                        </td>
                    </tr>
                    <?php } ?>

                </table>
    </div>
</main>
</body>
</html>




<?php include('../config/footer.php'); ?>