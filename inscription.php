<!DOCTYPE html>
<html lang="fr">

<?php
session_start();

include("commande/bd.php");

// S'il y a une session alors on ne retourne plus sur cette page
if (isset($_SESSION['id'])) {
  header('Location: accueil.php');
  exit;
}
// Si la variable "$_Post" contient des informations alors on les traitres
if (isset($_POST["prenom"])) {
  $valid = true;
  echo "test";

  // On se place sur le bon formulaire grâce au "name" de la balise "input"
  if (isset($_POST['mail'])) {
    $prenom = htmlentities(trim($_POST["prenom"])); // on récupère le prénom
    $nom = htmlentities(trim($_POST["name"])); // on récupère le nom
    $mail = htmlentities(strtolower(trim($_POST["mail"]))); // On récupère le mail
    $classe = $_POST["class"]; // On récupère la classe
    $mdp = trim($_POST["mdp"]); // On récupère le mot de passe 
    $confmdp = trim($_POST["confmdp"]); //  On récupère la confirmation du mot de passe     

    //  Vérification du prénom
    if (empty($prenom)) {
      $valid = false;
      $err = ("Le prenom ne peut pas être vide");
    }
    if (empty($nom)) {
      $valid = false;
      $err = ("Le nom ne peut pas être vide");
    }

    // Vérification du mail
    if (empty($mail)) {
      $valid = false;
      $err = "Le mail ne peut pas être vide";

      // On vérifit que le mail est dans le bon format
    } elseif (!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)) {
      $valid = false;
      $err = "Le mail n'est pas valide";
    } else {
      // On vérifit que le mail est disponible
      $req_mail = $bdd->query("SELECT mail 
                FROM user WHERE mail = $mail");

      if ($req_mail['mail'] == $mail) {
        $valid = false;
        $err = "Ce mail est déjà utiliser";
      }
    }

    // Vérification du mot de passe
    if (empty($mdp)) {
      $valid = false;
      $err = "Le mot de passe ne peut pas être vide";
    } elseif ($mdp != $confmdp) {
      $valid = false;
      $err = "La confirmation du mot de passe ne correspond pas";
    }

    // Si toutes les conditions sont remplies alors on fait le traitement
    if ($valid == true) {

      $date_creation_compte = date("y-m-d h:i:s");

      // bin2hex(random_bytes($length))

      $token = bin2hex(random_bytes(12));

      $fmdp = password_hash($mdp, PASSWORD_DEFAULT);

      // On insert nos données dans la table utilisateur
      $req = $bdd->prepare('INSERT INTO user(nom, prenom, classe, annee, mail, mdp, token, date_creation) VALUES(:nom, :prenom, :classe, :annee, :mail, :mdp, :token, :date_creation)');
      $req->execute(array(
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':classe' => $classe,
        ':annee' => "1",
        ':mail' => $mail,
        ':mdp' => $fmdp,
        ':token' => $token,
        ':date_creation' => $date_creation_compte
      ));


      echo $token . " " . $date_creation_compte;

      header("location: index.php");

      /*


                    $reqmail = $DB->query("SELECT *

                      FROM utilisateur
                    
                      WHERE mail = $mail");                    
                     
                    
                    $mail_to = $reqmail['mail']; 
                    
                     
                    
                    //=====Création du header de l'e-mail.
                    
                    $header = "From: Nathan.Stader@cpnv.ch\n";
                    
                    $header .= "MIME-version: 1.0\n";
                    
                    $header .= "Content-type: text/html; charset=utf-8\n";
                    
                    $header .= "Content-Transfer-ncoding: 8bit";
                    
                    //=======
                    
                     
                    
                    //=====Ajout du message au format HTML          
                    
                    $contenu = '<p>Bonjour ' . $reqmail['nom'] . ',</p><br>
                    
                     	<p>Veuillez confirmer votre compte <a href="http://www.domaine.com/conf.php?id=' . $reqmail['id'] . '&token=' . $token . '">Valider</a><p>';
                    
                                        
                    
                    mail($mail_to, 'Confirmation de votre compte', $contenu, $header);
*/

      /*
                header('Location: ../index.php');
                exit;*/
    }
  }
}
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Inscription</title>
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
    <form class="col-md-5" method="post">
      <div class="mb-1 col-md-9" style="display: flex; flex-direction:row; justify-content:space-between;">
        <div style="padding-right: 4vw;"><label for="name" class="form-1" style="font-weight: bold; padding-bottom:5px;">Nom</label> <input required type="text" name="name" class="form-control" id="exampleInputText1"></div>
        <div><label for="" class="form-1" style="font-weight: bold; padding-bottom:5px;">Prénom</label> <input required type="text" name="prenom" class="form-control" id="exampleInputText1"></div>
      </div>
      <div class="mb-2 col-md-9">
        <label for="form-label" class="form-1" style="font-weight: bold; padding-bottom:5px;">Adresse email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required>
      </div>
      <label for="pet-select" class="form-1" style="font-weight: bold; padding-bottom:5px;">Quel classe êtes vous ?</label><br>
      <select name="class" id="pet-select" class="form-control" style="width: 60%;" required>
        <option value="a">A</option>
        <option value="b">B</option>
        <option value="c">C</option>
        <option value="e">Enseignant</option>
      </select>
      <br>
      <div class="mb-3 col-md-9">
        <label for="form-label" class="form-1" style="font-weight: bold; padding-bottom:5px;">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="mdp" required>
      </div>
      <div class="mb-3 col-md-9">
        <label for="form-label" class="form-1" style="font-weight: bold; padding-bottom:5px;">Confirmer votre mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="confmdp" required>
      </div>
      <?php
      if (isset($err)) {
      ?>
        <p style="color: rgb(255, 0, 0); font-weight: 900;"><?= $err ?> !</p>
      <?php
      }
      ?>
      <input type="submit" class="btn text-white col-md-6" style="background-color:#01A659; font-weight: bold;">
      <br><br>
      <a href="PageConnection.php" class=" d-flex justify-content-between" style="color:#01A659">Vous avez déjà un compte ?</a>
      <div class="col-md-9">
        <a href="questions.php" class=" d-flex justify-content-end" style="color:#01A659">Questions ?</a>
      </div>
    </form>
  </div>
</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

</html>