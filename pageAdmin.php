<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PageAdmin</title>
    <!-- MDB icon -->
        <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body classe="container align-items-center" style="font-family:Open Sans;">
    <header class="col-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="col-1"></div>
        <div class="col-2"><img src="img/logocpnvpng.png"></div>
        <div class="container-fluid col-6">
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav d-flex justify-content-between">
              <a class="nav-link active" href="index.html">Home</a>
              <a class="nav-link" href="Service.html">Services</a>
              <a class="nav-link" href="pageAdmin.html">Admin</a>
              <a class="nav-link" href="pageCommande.html">Commande</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a
              >
            </div>
          </div>
        </div>
        <div class="col-1" id="logo"><img src="img/Icon metro-profile.svg"></div>
      </nav>

    </header>
    <main style="padding-bottom:6vw;">
    <div
    class="col-11 " style="padding:0px 0px 0px 140px ;">
    <h1 class="display-1 text-center " style="color:#01A659; font-weight:600; padding-top: 10vw;">Page admin</h1>
    <h2 class="" style="color:#01A659;">Rechercher un compte</h2>
    <div class="input-group">
        <div class="form-outline">
          <input type="search" id="form1" class="form-control" />
          <label class="form-label" for="form1">Search</label>
        </div>
        <button type="button" class="btn" style="background-color:#01A659;">
          <i class="fas fa-search"></i>
        </button>
      </div>
      <br>
    <div class="row justify-content-center">
    <table class="table table-sm" style="border-color:#01A659;">
        <thead class=" text-white" style="background-color:#01A659;">
          <tr classe="">
            <th scope="col ">Name</th>
            <th scope="col">Prénom</th>
            <th scope="col">Mail</th>
            <th scope="col">Classe</th>
            <th scope="col">Statut</th>
            <th scope="col"></th>            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Mark</th>
            <td>Otto</td>
            <td>@mdo</td>
            <td>SM-C1A</td>
            <td><select name="pets" id="pet-select">
                <option value="Eleve">Elève</option>
                <option value="EleveCBE">Elève CBE</option>
                <option value="Enseignent">Enseignent</option>
                <option value="Admin">Admin</option>
            </select></td>
            <td ><a class="text-danger text-decoration-underline" href="">Supprimer</a></td>
          </tr>
          <tr>
            <th>Job</th>
            <td>Thornton</td>
            <td>@fat</td>
            <td>SM-C1A</td>
            <td><select name="pets" id="pet-select">
                <option value="Eleve">Elève</option>
                <option value="EleveCBE">Elève CBE</option>
                <option value="Enseignent">Enseignent</option>
                <option value="Admin">Admin</option>
            </select></td>
            <td ><a class="text-danger text-decoration-underline" href="">Supprimer</a></td>
          </tr>
          <tr>
            <th>Xd</th>
            <td>freebies</td>
            <td>@xd</td>
            <td>SM-C1A</td>
            <td><select name="pets" id="pet-select">
                <option value="Eleve">Elève</option>
                <option value="EleveCBE">Elève CBE</option>
                <option value="Enseignent">Enseignent</option>
                <option value="Admin">Admin</option>
            </select></td>
            <td ><a class="text-danger text-decoration-underline" href="">Supprimer</a></td>
          </tr>
          
        </tbody>
      </table>
    </div>
    </div>
  </main>
    <footer>
      <p>Souscrivez à notre newsletter en nous indiquant votre email à l’adresse : <br>
        <strong><a href="mailto:espace.pao@mediamatique.ch">espace.pao@mediamatique.ch</a></strong></p>
    </footer>
  </body>

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</html>
