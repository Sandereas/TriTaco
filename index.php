
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
      <!-- Bootstrap core CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
    <link rel="stylesheet" href="css/main.css"> 

    <title>Restaurant</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

  </head>

  <body>

  <?php 
include "phpfiles/connection.php";

?>

<?php
  include "phpfiles/header.php";
?>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Piwnica Świdnicka</h1>
          <p class="bigger">Piwnica Świdnicka is oudste restaurant die onafgebroken open is in Europa, misschien ook overall op wereld . Het was uit Świdnica, een nabijgelegen stad in Neder-Silezië, dat gerstebier naar Wrocław werd gebracht.</p>
          <p>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <?php
                  $data = $conn->query("SELECT * FROM album")->fetchAll();

                  foreach ($data as $row) {
                    //echo $row ['titel']. " " .$row['artiest']. "<br >/\n";
                  //}
            ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/<?php echo $row ['photo'];?>" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><?php echo $row ['titel'];?></p>
                  <p class="card-text">€<?php echo $row ['prijs'];?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="product.php?p=<?php echo $row ['ID'];?>" class="btn btn-sm btn-outline-secondary">View</a>
                      <a href="phpfiles/Edit.php?p=<?php echo $row ['ID'];?>" type="button" class="btn btn-sm btn-outline-secondary" >Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </main>

<?php
  include "phpfiles/footer.php";
?>
    
