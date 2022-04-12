
<?php
include "phpfiles/connection.php"; ?>
<div class="row"> <?php
$data = $conn->query("SELECT * FROM users")->fetchAll();

foreach ($data as $row) { ?>
    <table class="div1Users">
        <tr>
            <th>    <?php echo $row['UserName']."<br />\n";?> </th>
            <th>    <?php echo $row['UserID']."<br />\n"; ?>  </th>
        </tr>
    </table>
</div>
<?php } ?>


<?php
include "phpfiles/footer.php"
?>