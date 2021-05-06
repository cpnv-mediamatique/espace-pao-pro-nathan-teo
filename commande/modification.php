<?php
session_start();

include("bd.php");

$id = $_GET["id"];
echo $_POST['etudiant'];
$enseignant = $_POST['etudiant'];
$req = $bdd->query("UPDATE user SET enseignant = $enseignant WHERE id_user = $id ");
if ($_SESSION['etudiant'] !== "2") {
    $_SESSION['etudiant'] = $enseignant;
}
header("location: ../pageAdmin.php");
