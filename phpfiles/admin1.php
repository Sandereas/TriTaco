
<?php
include ('connection.php');
if(isset($_SESSION['loggedin'])) {
    echo "Welcome" . $_SESSION['UserName'];
} else {
    header("Location: LoginUser.php");
}
$sql = "SELECT * FROM album";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fethAll();

?>

<?php foreach($result as $re) { ?>


<td><?php echo $re["titel"]; ?> </td>
<td><?php echo $re["Text_Details"]; ?> </td>
<td><?php echo $re["Ingredienten"]; ?> </td>
<td><?php echo $re["prijs"]; ?> </td>
<td><?php echo $re["photo"]; ?> </td>

<a href="editBTN.php?id=<?php echo $re["ID"]; ?>">edit</a>
<a href="delete.php?id=<?php echo $re["ID"]; ?>">delete</a>
<?php 
}
?>