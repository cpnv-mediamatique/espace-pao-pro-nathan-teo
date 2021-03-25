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

$conf_uti = false;
$conf = false;
if (isset($_POST['submit'])) {




    $prenom = htmlentities(trim($_POST["prenom"])); // on récupère le prénom
    $nom = htmlentities(trim($_POST["name"])); // on récupère le nom
    $mail = htmlentities(strtolower(trim($_POST["mail"]))); // On récupère le mail
    $classe = $_POST["class"]; // On récupère la classe
    $mdp = trim($_POST["mdp"]); // On récupère le mot de passe 
    $confmdp = trim($_POST["confmdp"]); //  On récupère la confirmation du mot de passe     

    if (empty($mail)) {
        $err = "Le mail ne peut pas être vide";

        // On vérifit que le mail est dans le bon format
    } elseif (!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)) {
        $err = "Le mail n'est pas valide";
    } else {
        // On vérifit que le mail est disponible
        $req_mail = $bdd->query("SELECT mail 
                FROM user WHERE mail = $mail");


        if ($req_mail['mail'] == $mail) {
            $err = "Ce mail est déjà utiliser";
        } else {
            $conf = true;
        }
    }





    if ($conf == true) {
        $token = bin2hex(random_bytes(12));

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
            $mail->addAddress("$mail", "$prenom $name");     //Add a recipient
            $mail->addReplyTo('espace.pao@cpnv.ch', 'Information');


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Confirmation de votre inscription sur l'Espace Pao";
            $mail->Body    = "Merci de votre inscription a l\'Espace Pao <br> Pour confirmer votre inscription de votre compte veuillez cilquer sur le lien suivant sur le meme navigateur au quel vous vous etes inscris  : <br> http://nstader.eleves.mediamatique.ch/espace-pao-pro-nathan-teo/commande/inscription.php=?mail=$mail&token=$token";

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        session_start();

        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['mail'] = $mail;
        $_SESSION['classe'] = $classe;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['confmdp'] = $confmdp;
        $_SESSION['token'] = $token;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

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

        <div class="col-md-5">
            <h1>Merci de votre inscription</h1>
        </div>


    </div>
</body>

</html>