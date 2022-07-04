<?php include('../config/header.php'); ?>
<?php include ('../config/recensiesconnect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet" crossorigin="anonymous" />
    <title>Recensies</title>
</head>
<body>
<?php
 if($_SESSION['loggedin'] == true){
     echo "GG ". $_SESSION['username'];
 }
 else {
         header("Location: login.php");
         
     }
     
?>

<?php if(isset($_SESSION['recensies']))
                 {
                    echo $_SESSION['recensies'];
                    unset($_SESSION['recensies']);
                 }
        ?>

<?php $dataToLoop = $datadest;

if(isset($results)) {
    $dataToLoop = $results;
}

    foreach ($dataToLoop as $row)  {?>
 
    <table>
            <tr>
    <th>RecensieID</th>
    <th>Sterren</th>
    <th>Bericht</th>
                </tr>
                <tr>
    <td><?php echo $row['recensieID'];?></d>
    <td><?php echo $row['quality'];?></td>

    <td><?php echo $row['message'];?></td>
                </tr>
</table>
  <?php  } ?>


</body>
</html>







<?php include('../config/footer.php'); ?>