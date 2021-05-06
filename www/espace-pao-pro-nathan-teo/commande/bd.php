<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=nstader;charset=utf8', 'nstader', 'jv2Blq134M9g');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
