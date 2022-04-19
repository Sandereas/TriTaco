<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/main.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  



<?php

include "connection.php";
$data = $conn->query("SELECT * FROM album WHERE ID=".$_GET['p'])->fetch();
var_dump($data['ID']);
//foreach ($data as $row) {
  //echo $row ['titel']. " " .$row['artiest']. "<br >/\n";
//}
include "admin1.php"
?>


<div class=imgholder >
    <img src="img/<?php echo $data ['photo'];?>">
</div>
<div class="FirstTextHolder">
  <p>  <?php echo $data['Text_Details'] ?>  <p>
</div>
<div class="SecondTextHolder">

</div>
<div>
  <p>  <?php echo $data['Ingredienten'] ?>  <p> 
</div>
<div>

</div>





</body>
</html>