
<?php
include ('connection.php');
if(isset($_SESSION['UserName'])) {
    echo "Welcome" . $_SESSION['UserName'];
} else {
    echo 'fout';
    header("Location: LoginUser.php");
}
$sql = "SELECT * FROM album";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>

<?php $data = $conn->query("SELECT * FROM album WHERE ID=".$_GET['p'])->fetch();
 { ?><br>

<tr class="table1">
<td><?php echo $data["titel"]; ?> </td> <br>
<td><?php echo $data["Text_Details"]; ?> </td> <br>
<td><?php echo $data["Ingredienten"]; ?> </td> <br>
<td><?php echo $data["prijs"]; ?> </td> <br>
</tr>
<a href="editBTN.php?id=<?php echo $data["ID"]; ?>">edit</a>
<a href="delete.php?id=<?php echo $data["ID"]; ?>">delete</a> <br>
<?php 
}
?>
