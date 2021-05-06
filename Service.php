<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>PageService</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body classe="container align-items-center" style="font-family:Open Sans;">
  <header class="col-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="col-1"></div>
      <div class="col-2"><img src="img/logocpnvpng.png"></div>
      <div class="container-fluid col-6">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <?php
          include("menu.php");
          ?>
        </div>
      </div>
    </nav>

  </header>
  <main style="padding-bottom:6vw;">
    <div class="col-12 container">
      <h1 class=" display-1" style="color:#01A659; font-weight: 500; padding-top:1.5em;">Nos services</h1>
    </div>
    <div class="col-12 container">
      <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt, lorem at interdum eleifend, turpis dui rhoncus tellus, quis fermentum metus justo in elit. Suspendisse varius viverra nisi aliquet pulvinar. Aliquam sollicitudin accumsan sapien ac maximus. Praesent at justo congue ligula porta hendrerit quis vitae leo. Donec at lorem porta, tincidunt eros sollicitudin, fermentum arcu. Nunc a commodo eros. Cras eu dolor mollis, aliquet tellus eget, accumsan mauris. Aenean eu iaculis massa. Suspendisse volutpat semper mi vitae elementum. </p>
    </div>
    </div>
    <div class="container">
      <div class="row g-2">
        <?php
        if ($_SESSION['etudiant'] === "0") {
        ?>
          <div class="col-3">
            <div class="p-3" style="background-color:#EDEEEF; "><img src="img/Impression/Imprimer01.jpg" style="width: 100%">Impression<br>
              <a class="btn text-white col-md-6" href="impression.php" style="background-color:#01A659; font-weight: bold; width:100% ;">
                Commander
              </a>
            </div>
          </div>
        <?php
        }
        ?>
        <?php
        if ($_SESSION['etudiant'] === "1" or $_SESSION['etudiant'] === "2") {
        ?>
          <div class="col-3">
            <div class="p-3" style="background-color:#EDEEEF; "><img src="img/Impression/Imprimer01.jpg" style="width: 100%">Impression<br>
              <a class="btn text-white col-md-6" href="impression.php" style="background-color:#01A659; font-weight: bold; width:100% ;">
                Commander
              </a>
            </div>
          </div>
          <div class="col-3">
            <div class="p-3" style="background-color:#EDEEEF; "><img src="img/Carte.jpg" style="width: 100%">Cartes de visites<br>
              <a class="btn text-white col-md-6" href="CartesDeVisites.php" style="background-color:#01A659; font-weight: bold; width:100%  ;">
                Commander
              </a>
            </div>
          </div>

          <div class="col-3">
            <div class="p-3" style="background-color:#EDEEEF;"><img src="img/Etiquette.jpg" style="width: 100%">Etiquettes<br>
              <a class="btn text-white col-md-6" href="Etiquette.php" style="background-color:#01A659; font-weight: bold; width:100%  ;">
                Commander
              </a>
            </div>
          </div>
          <div class="col-3">
            <div class="p-3" style="background-color:#EDEEEF;"><img src="img/Casierdetelephone.jpg" style="width: 100%">Casiers pour mobiles
              <a class="btn text-white col-md-6" href="Casier.php" style="background-color:#01A659; font-weight: bold; width:100% ;">
                Commander
              </a>
            </div>
          </div>
          <div class="col-3">
            <div class="p-3" style="background-color:#EDEEEF;"><img src="img/Planning2.jpg" style="width: 100%">Plannings de nettoyages
              <a class="btn text-white col-md-6" href="Planning.php" style="background-color:#01A659; font-weight: bold; width:100% ;">
                Commander
              </a>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </main>
  <footer>
    <p>Souscrivez à notre newsletter en nous indiquant votre email à l’adresse : <br>
      <strong><a href="mailto:espace.pao@mediamatique.ch">espace.pao@mediamatique.ch</a></strong>
    </p>
  </footer>
</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

</html>