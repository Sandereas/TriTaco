
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="css/main.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <title>Restaurant</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        details {
          padding: 4px;
          background-color: #eeeeee;
          border: none;
          box-shadow: 1px 1px 2px #bbbbbb;
          cursor: pointer;
        }

        details > p {
          background-color: #eeeeee;
          padding: 4px;
          margin: 0;
          box-shadow: 1px 1px 2px #bbbbbb;
        }
  </style>
  </head>
  <body>

<?php

var_dump($_GET);

include "phpfiles/connection.php";
$data = $conn->query("SELECT * FROM album WHERE ID=".$_GET['p'])->fetch();
var_dump($data['ID']);
//foreach ($data as $row) {
  //echo $row ['titel']. " " .$row['artiest']. "<br >/\n";
//}
include "phpfiles/header.php";

?>

<main class="mainP">
  <div>
      <div class="divPimg">
        <img class="imgP" src="img/<?php echo $data ['photo'];?>" >
      </div>
        <div class="columndivP">
          <details class="DetailsP">
            <div class="text">
              <p>  <?php echo $data['Text_Details'] ?>  <p>
            </div>
          </details>

          <details class="DetailsP">
          <summary>Ingredienten</summary>
            <div class="text">
              <p>  <?php echo $data['Ingredienten'] ?>  <p>
            </div>
          </details>
        </div>
  </div>

</main>

<?php
include "phpfiles/footer.php"
?>

</body>

</html>