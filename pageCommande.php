<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('Location: index.php');
  exit;
}
if ($_SESSION['etudiant'] != 2 && $_SESSION['etudiant'] != 3) {
  header("location: accueil.php");
}

include('commande/bd.php');

$achat =  $bdd->query("SELECT * FROM achat_produit ");







?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>PageCommande</title>
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
    <div class="col-11 " style="padding:0px 0px 0px 140px ;">
      <h1 class="display-1 text-center " style="color:#01A659; font-weight:600; padding-top: 10vw;">Page commande</h1>
      <h2 class=" " style="color:#01A659;">Toute les commandes</h2>
      <div class="input-group">
        <div class="form-outline">
          <input type="search" id="form1" class="form-control" />
          <label class="form-label" for="form1">Search</label>
        </div>
        <button type="button" class="btn " style="background-color:#01A659;">
          <i class="fas fa-search"></i>
        </button>
      </div>
      <br>
      <div class="row justify-content-center">
        <table class="table table-sm " style="border-color:#01A659;">
          <thead class=" text-white" style="background-color:#01A659;">
            <tr classe="">
              <th scope="col ">Commande</th>
              <th scope="col">Date</th>
              <th scope="col">Email</th>
              <th scope="col">Statut</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php while ($valeur = $achat->fetch()) {

              $user =  $bdd->prepare("SELECT * FROM achat_produit WHERE id_user = ? ");
              $user->execute(array($valeur['idx_user']));

            ?>


              <tr>
                <th><?= $valeur['produit'] ?></th>
                <td><?= $valeur['date'] ?></td>
                <td><?= $valeur['user'] ?></td>
                <td><select name="pets" id="pet-select">
                    <option value="Eleve">Nouveau</option>
                    <option value="Eleve">En cours</option>
                    <option value="EleveCBE">Prête</option>
                    <option value="Enseignent">Refuser</option>
                  </select>
                </td>

                <td><a class="text-danger text-decoration-underline" href="">Supprimer</a></td>
              </tr>
            <?php } ?>

          </tbody>
        </table>
        <div class="container">
          <a class="btn  text-white col-md-2" href="message.ph" style="background-color:#01A659;">
            Confirmer
          </a>
        </div>
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