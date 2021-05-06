<?php
session_start();

include("bd.php");

$id = $_GET["id"];

$req = $bdd->prepare("DELETE FROM achat_produit WHERE id_achat_cdv = ?");
$req = $req->execute(array($id));

header("location: ../pageCommande.php");
