<?php
session_start();

include("bd.php");

$id = $_GET["id"];
$etat = $_POST['etat'];
$req = $bdd->query("UPDATE achat_produit SET etat = $etat WHERE id_achat_cdv = $id");

header("location: ../pageCommande.php");
