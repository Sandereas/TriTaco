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
        <b> <h1> destination list</h1> </b>
        <br>
        <br>

        <?php if(isset($_SESSION['destination']))
                 {
                    echo $_SESSION['destination'];
                    unset($_SESSION['destination']);
                 }
        ?>
        <br> <br>

        <a href="../admin/destinationsadd.php" class="buttonadmin"> Add Destination</a>
    <br>
    <br>
    <table class ="tabledest">
    <tr>
        <th>reismogelijkheidID</th>
        <th>data</th>
        <th>naam</th>
        <th>image</th>
        <th>price</th>
        <th>description</th>
    </tr>
    <?php 
                foreach ($datadest as $row)  {?>
                    <tr>
                        <td> 
                            <?php echo $row['reismogelijkheidID'];?>
                        </td>
                        <td>
                            <?php echo $row['data']; ?>
                        </td>
                        <td>
                            <?php echo $row['naam']; ?>
                        </td>
                        <td>
                        <img class="imgstyle" src="../assets\images/<?php echo $row['image']; ?>">
                        </td>
                        <td>
                        € <?php echo $row['price']; ?>
                        </td>
                        <td>
                            <?php echo $row['description']; ?>
                        </td>
                        <td>
                        <a href="../admin/destinationschange.php?id=<?php echo $row['id']; ?>" class="buttonupdate"> Update Food </a> 
                        </td>
                        <td colspan="2">
                        <a href="../admin/destinationsdel.php?id=<?php echo $row['reismogelijkheidID']; ?>" class="buttondelete"> Delete Food </a> 
                        </td>
                    </tr>
                    <?php } ?>

                </table>
    </div>
</main>
<?php include('../config/footer.php'); ?>