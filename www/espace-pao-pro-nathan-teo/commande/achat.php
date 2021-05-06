<?php
session_start();
$idx = null;
include("bd.php");

$id = $_GET["id"];
if ($id === "1") {
    $idx = "Carte de visites";
    $page = "CartesDeVisites";
}
if ($id === "2") {
    $idx = "Etiquettes";
    $page = "Etiquette";
}
if ($id === "3") {
    $idx = "Casier pour mobiles";
    $page = "Casier";
}
if ($id === "4") {
    $idx = "Planning de nettoyage";
    $page = "Planning";
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

header("location: ../$page.php");
