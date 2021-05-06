<?php
session_start();

include("commande/bd.php");

?>
<?php
if (isset($_SESSION['id'])) {
  header('Location: accueil.php');
  exit;
} else {

  // Si la variable "$_Post" contient des informations alors on les traitres
  if (!empty($_POST)) {
    $valid = true;

    if (isset($_POST['connexion'])) {
      $mail = htmlentities(strtolower(trim($_POST["mail"])));
      $mdp = trim($_POST["mdp"]);

      if (empty($mail)) { // Vérification qu'il y est bien un mail de renseigné
        $valid = false;
        $er_mail = "Il faut mettre un mail";
      } elseif (empty($mdp)) { // Vérification qu'il y est bien un mot de passe de renseigné
        $valid = false;
        $er_mdp = "Il faut mettre un mot de passe";
      } else {
        $req = $bdd->prepare("SELECT * FROM user WHERE mail = ? ");
        $req->execute(array($_POST["mail"]));

        $req = $req->fetch();

        if ($req["id_user"] == null or $req["id_user"] == false) {
          $valid = false;
          $er_mail = "Le mail est incorrecte";
        } elseif (password_verify($mdp, $req["mdp"])) {
          $valid = true;
          if ($req['enseignant'] == null or $req['enseignant'] == false) {
            $etudiant = 0;
          } elseif ($req['enseignant'] === "1") {
            $etudiant = 1;
          } elseif ($req['enseignant'] === "2") {
            $etudiant = 2;
          } else {
            $etudiant = 3;
          }
          if ($valid == true) {
            $_SESSION['id'] = $req['id_user']; // id de l'utilisateur unique pour les requêtes futures
            $_SESSION['nom'] = $req['nom'];
            $_SESSION['prenom'] = $req['prenom'];
            $_SESSION['etudiant'] = $etudiant;
            $_SESSION['mail'] = $req['mail'];
            $_SESSION['classe'] = $req['classe'];
            $_SESSION['annee'] = $req['annee'];
            header('Location:accueil.php');
            exit;
          }
        } else {
          $valid = false;
          $er_mdp = "Le mot de passe est incorrecte";
        }


        // Si le token n'est pas vide alors on ne l'autorise pas à accéder au site
        /*if ($req['confirmation'] <> NULL) {
                $valid = false;
                $er_mail = "Le compte n'a pas été validé";
            }*/
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Page de Connexion</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body classe="container" style="font-family:Open Sans;">
  <div class="border d-flex align-items-center justify-content-end" style="height: 100vh;">
    <div class="col-md-4">
      <img src="img/LogoCPNV.png" style="max-width: 50vh" />
    </div>
    <div class="col-md-1">
      <img src="img/1x/Plan de travail 1.png" style="height: 80vh" />
    </div>
    <form method="post" class="col-md-5">
      <div class="mb-2 col-md-9">
        <label for="form-label" class="form-1" style="font-weight: bold; padding-bottom:5px;">Adresse email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail">
        <?php
        if (isset($er_mail)) {
        ?>
          <div><?= $er_mail ?></div>
        <?php
        }
        ?>
      </div>

      <div class="mb-3 col-md-9">
        <label for="form-label" class="form-1" style="font-weight: bold; padding-bottom:5px;">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
        <?php
        if (isset($er_mdp)) {
        ?>
          <div><?= $er_mdp ?></div>
        <?php
        }
        ?>

      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
        <label class="form-check-label" for="flexCheckDefault">
          Se souvenir de moi
        </label>
      </div>
      <br>
      <input type="submit" class="btn text-white col-md-6" style="background-color:#01A659; font-weight: bold;" name="connexion">
      <br><br>
      <a href="inscription.php" class="d-flex justify-content-between" style="color:#01A659;">Inscrivez-vous</a>
      <a href="questions.php" class="d-flex justify-content-end" style="color:#01A659">Questions ?</a>

    </form>
  </div>
</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

</html>