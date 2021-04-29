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
    <div class="col-1" id="logo"><span style="cursor:pointer" onclick="openNav()";> <img id="meme" src="img/Icon metro-profile.svg"></span> </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <p class="texte-menu"> Nom: <?php echo $_SESSION['nom']?></p>
        <p class="texte-menu"> Prenom: <?php echo $_SESSION['prenom']?></p>
        <p class="texte-menu"> Classe: 
            <?php if ($_SESSION['etudiant'] !== 2){?>
                <?= $_SESSION['classe'] ?>
            <?php } ?>
        </p>
        <a class="texte-menu" href="commande/supprimer.php">Déconnexion</a>
    </div>
    <style>
            body {
          font-family: "Lato", sans-serif;
          transition: background-color .5s;
        }
        
        .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          right: 0%;
          background-color: #00AC64;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
          float: right;
        }
        
        .sidenav a + p {
          padding: 8px 8px 8px 15%;
          text-decoration: none;
          font-size: 25px;
          color:white;
          display: block;
          transition: 0.3s;
        }
        
        .sidenav a:hover {
          color: #f1f1f1;
        }
        
        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        
        #main {
          transition: margin-left .5s;
          padding: 16px;
        }

        #meme{
            width: 150px;
        }

        .texte-menu{
            font-size: 20px;
            color: white;
            position: relative;
            margin: 3% !important;
            left: 15% !important;
            padding: 0 !important;
            text-align: left !important;
        }
        
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
    </style>

    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "30%";
          document.getElementById("main").style.marginRight = "30%";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginRight= "0";
        }
    </script>
