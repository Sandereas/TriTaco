<?php include('../config/header.php'); ?>
<?php include('../config/userdata.php'); ?>


    <main>
        <div class ="box">
            <b> <h1> Editor The Web</h1> </b>
            <br>

            <br>

            <?php
                if(isset($_SESSION['add']))
                 {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                 }
             ?>
            <br> <br>

            <a href="../php/register.php" class="buttonadmin"> Add Admin</a>
            <br>
            <br>
            <a href="../admin/destinationsadd.php" class="buttonadmin"> Add Destination</a>
            <br>
            <br>
            
                
                <table class ="tableadmin">

                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    
    <?php 
                foreach ($datageb as $row)  {?>
                    <tr>
                        <td> 
                            <?php echo $row['userID'];?>
                        </td>
                        <td>
                            <?php echo $row['username']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        
                        <td colspan="2">
                        <a href="userchange.php?userID=<?php echo $row['userID']; ?>" class="buttonupdate"> Update Admin </a> 
                        </td>
                        <td colspan="2">
                        <a href="userdel.php?userID=<?php echo $row['userID']; ?>" class="buttondelete"> Delete Admin </a> 
                    </tr>
                    <?php } ?>
                

                </table>
                
        </div>
    </main>
<?php include('../config/footer.php'); ?>