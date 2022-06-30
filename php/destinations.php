<?php include('../config/header.php'); ?>
<?php include('../config/reisdata.php'); ?>


<?php
 if($_SESSION['loggedin'] == true){
     echo "GG ". $_SESSION['username'];
 }
 else {
         header("Location: login.php");
         
     }
     
?>


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
                foreach ($datadest as $row)  {?>
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
                        <a href="../admin/destinationschange.php?reismogelijkheidID=<?php echo $row['reismogelijkheidID']; ?>" class="buttonupdate"> Update Reis </a> 
                        </td>
                        <td colspan="2">
                        <a href="../admin/destinationsdel.php?reismogelijkheidID=<?php echo $row['reismogelijkheidID']; ?>" class="buttondelete"> Delete Reis </a> 
                        </td>
                    </tr>
                    <?php } ?>

                </table>
    </div>
</main>
<?php include('../config/footer.php'); ?>