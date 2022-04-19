
<?php

include "connection.php"
if($_SESSION['loggedin'] == true){
    echo "Welcome " . $_SESSION['UserName'];
} else {
    header("Location: loginUser.php");
}

if(isset($_POST["artiest"])){
    $sql = "INSERT INTO album
    (titel, Text_Details, Ingredienten, prijs)
    VALUES
    (:titel, :Text_Details, :Ingredienten, :prijs)
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':titel', $_POST['titel']);
    $stmt->bindParam(':Text_Details', $_POST['Text_Details']);
    $stmt->bindParam(':Ingredienten', $_POST['Ingredienten']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->execute();
    header('Location: admin1.php')
}
?>


<form action="" method="post">
        titel<input type="text" name="artiest" id=""><br />
        Text_Details<input type="text" name="artiest" id=""><br />
        Ingredienten<input type="text" name="artiest" id=""><br />
        prijs<input type="text" name="artiest" id=""><br />
        <input type="submit" value="toevoegen">
</form>
