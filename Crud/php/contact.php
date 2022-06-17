<?php include('../config/header.php'); ?>
<?php include('../config/userdata.php'); ?>


<?php if($_SESSION['loggedin'] == true){
     echo $_SESSION['username'];
 }
 else {
         header("Location: login.php");
 } ?>

<main>
    <div class = "box">
        <div class = "contacttext">
            <h3> Voor meer informatie kan je terrecht bij 1 van ons </h3>
    


        
    

    <table class = "tablecontact">
        <tr>
            <th>Username</th>
            <th>Email</th>
        </tr>
        <tr>
            <td> <?php echo $datageb[0]['username'] ?> </td>
            <td> <?php echo $datageb[0]['email'] ?> </td>
        </tr>
        <tr>
            <td> <?php echo $datageb[1]['username'] ?> </td>
            <td> <?php echo $datageb[1]['email'] ?> </td>
        </tr>
    </table>
</main>
<?php include('../config/footer.php'); ?>