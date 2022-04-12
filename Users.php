<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/main.css"> 
</head>
<body>
    
<?php
include "phpfiles/connection.php"; ?>
<div class="row"> <?php
$data = $conn->query("SELECT * FROM users")->fetchAll();

foreach ($data as $row) { ?>
    <table class="Table1Users">
        <tr>
            <th> Username </th>
            <th> UserID  </th>
        </tr>
        <tr>
            <td> <?php echo $row['UserName']."<br />\n";?>  </td>
            <td> <?php echo $row['UserID']."<br />\n"; ?>   </td>
        </tr>

    </table>
</div>
<?php } ?>


<?php
include "phpfiles/footer.php"
?>
</body>
</html>