<?php include('../config/header.php'); ?>
<?php include('../config/userdata.php'); ?>

<?php
if($_SESSION['loggedin'] == true)  //&& ($_Session['Admincheck'] == true)){
    {
    echo "GG ". $_SESSION['username'];
}
    else if($_SESSION['loggedin']){
     header("Location: ../site/home.php");
     exit
    }
    else    {
    header("Location: ../php/login.php");
    exit
    }

?>
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

            <a href="useradd.php" class="buttonadmin"> Add Admin</a>
            <br>
            <br>
            
                
                <table class ="tableadmin">

                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Naam</th>
                        <th>Actions</th>
                    </tr>
                    
    <?php 
                foreach ($datageb as $row)  {?>
                    <tr>
                        <td> 
                            <?php echo $row['id'];?>
                        </td>
                        <td>
                            <?php echo $row['Username']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        
                        <td colspan="2">
                        <a href="userchange.php?id=<?php echo $row['id']; ?>" class="buttonupdate"> Update Admin </a> 
                        </td>
                        <td colspan="2">
                        <a href="userdel.php?id=<?php echo $row['id']; ?>" class="buttondelete"> Delete Admin </a> 
                    </tr>
                    <?php } ?>
                

                </table>
                
        </div>
    </main>
<?php include('../config/footer.php'); ?>