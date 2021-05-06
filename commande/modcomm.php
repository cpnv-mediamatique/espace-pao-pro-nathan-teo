<?php
session_start();

include("bd.php");

$id = $_GET["etat"];
$etat = $_POST['id'];
$req = $bdd->query("UPDATE achat_produit SET etat = $etat WHERE id_achat_cdv = $id");
/*
header("location: ../pageCommande.php");
*/