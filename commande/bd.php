<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=espace_pao;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
