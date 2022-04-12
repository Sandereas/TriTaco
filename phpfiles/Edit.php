<?php

var_dump($_GET);

include "phpfiles/connection.php";
$data = $conn->query("SELECT * FROM album WHERE ID=".$_GET['p'])->fetch();
var_dump($data['ID']);



$data = [
    'ID' => $ID,
    'titel' => $titel,
    'Text_Details' => $Text_Details,
    'Ingredienten' => $Ingredienten,
    'prijs' => $prijs,
];
$sql = "UPDATE users SET name=:name, surname=:surname, sex=:sex WHERE id=:id";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);


?>