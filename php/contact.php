<?php 

include('../config/header.php');
include ('../config/userdata.php');

?>

<main>
    <div class = "box">
        <div class = "contacttext">
            <h3> Voor meer informatie kan je terrecht bij 1 van ons </h3>
        <br> <br>


        
    

    <table class = "tablecontact">
        <tr>
            <th>Username</th>
            <th>Email</th>
        </tr>
        <tr>
        <?php foreach ($datageb as $row) ?> 
            <td> <?php echo $datageb[0]['username'] ?> </td>
            <td> <?php echo $datageb[0]['email'] ?> </td>
        </tr>
        <tr>
            <td> <?php echo $datageb[1]['username'] ?> </td>
            <td> <?php echo $datageb[1]['email'] ?> </td>
        </tr>
        

        <a href= "contactmail.php" class="buttonadmin"> Send Email</a>

    </table>
    </div>
    
            


        
</main>
<?php include('../config/footer.php'); ?>