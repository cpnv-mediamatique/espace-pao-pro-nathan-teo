<div class="navbar-nav d-flex justify-content-between">
    <a class="nav-link active" href="accueil.php">Home</a>
    <a class="nav-link" href="Service.php">Services</a>
    <?php
    if ($_SESSION['etudiant'] === "1" or $_SESSION['etudiant'] === "2") {
    ?>
        <a class="nav-link" href="pageAdmin.php">Admin</a>
        <a class="nav-link" href="pageCommande.php">Commande</a>
    <?php
    }
    ?>
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
</div>