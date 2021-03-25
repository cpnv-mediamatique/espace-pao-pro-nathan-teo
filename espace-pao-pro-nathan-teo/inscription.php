<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();

include("commande/bd.php");

// S'il y a une session alors on ne retourne plus sur cette page
if (isset($_SESSION['id'])) {
  header('Location: accueil.php');
  exit;
};
$token = bin2hex(random_bytes(12));

if (isset($_POST['sumbit'])) {

  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  //Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->SMTPAuth = false;
    $mail->SMTPAutoTLS = false;
    $mail->Port = 25;                                     //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('espace.pao@cpnv.ch', 'Espace-Pao');
    $mail->addAddress('nathan.stader@cpnv.ch', 'Nathan Stader');     //Add a recipient
    $mail->addReplyTo('espace.pao@cpnv.ch', 'Information');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Confirmation de votre inscription sur l'Espace Pao";
    $mail->Body    = "Merci de votre inscription a l\'Espace Pao <br> Pour confirmer votre inscription de votre compte veuillez cilquer sur le lien suivant sur le meme navigateur au quel vous vous etes inscris  : <br> http://localhost/espace-pao-pro-nathan-teo/commande/inscription.php=?$token";

    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
?>
<!DOCTYPE html>
<html lang="fr">

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
      <input type="submit" class="btn text-white col-md-6" style="background-color:#01A659; font-weight: bold;" name="sumbit">
      <br><br>
      <a href="index.php" class=" d-flex justify-content-between" style="color:#01A659">Vous avez déjà un compte ?</a>
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