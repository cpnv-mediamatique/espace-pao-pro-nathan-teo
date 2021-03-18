<?php


session_start();

include("../commande/bd.php");

// S'il y a une session alors on ne retourne plus sur cette page
if (isset($_SESSION['id'])) {
    header('Location: ../accueil.php');
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

            header("location: ../index.php");
        }
    }
}
