<?php
session_start();
$idx = null;
include("bd.php");

$id = $_GET["id"];
if ($id === "1") {
    $idx = "Carte de visites";
}
if ($id === "2") {
    $idx = "Etiquettes";
}
if ($id === "3") {
    $idx = "Casier pour mobiles";
}
if ($id === "4") {
    $idx = "Planning de nettoyage";
}

$req = $bdd->prepare('INSERT INTO achat_produit(produit, style, nbr, date, etat, idx_user) VALUES(:produit, :style, :nbr, :date, :etat, :idx_user)');
$req->execute(array(
    ':produit' => $idx,
    ':style' => $id,
    ':nbr' => $_POST['tentacles'],
    ':date' => date('d m y'),
    ':etat' => "1",
    ':idx_user' => $_SESSION['id']
));

header("location: ../CarteDeVisites.php");
