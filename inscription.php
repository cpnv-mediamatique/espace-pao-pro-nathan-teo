<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Inscription</title>
    <!-- MDB icon -->
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
  <body classe="container" style="font-family:Open Sans;">
    <div
  class="border d-flex align-items-center justify-content-end"
  style="height: 100vh;">
  <div class="col-md-4">
    <img src="img/LogoCPNV.png" style="max-width: 50vh" />
  </div>
  <div class="col-md-1">
    <img src="img/1x/Plan de travail 1.png" style="height: 80vh" />
  </div>
    <form class="col-md-5" >
      <div class="mb-2 col-md-9">
          <br><br>
        <label for="form-label" class="form-1" style="font-weight: bold; padding-bottom:5px;">Adresse email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <select name="pets" id="pet-select">
        <option value="sm-c1a">SM-C1a</option>
        <option value="sm-c1b">SM-C1b</option>
        <option value="sm-c1c">SM-C1c</option>
        <option value="sm-c2a">SM-C2a</option>
        <option value="sm-c2b">Autres</option>
    </select>
    <br>
      <div class="mb-3 col-md-9">
        <label for="form-label" class="form-1" style="font-weight: bold; padding-bottom:5px;">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" >
      </div>
      <div class="mb-3 col-md-9">
        <label for="form-label" class="form-1" style="font-weight: bold; padding-bottom:5px;">Confirmer votre mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" >
      </div>
      <a class="btn text-white col-md-6" href="index.html" style="background-color:#01A659; font-weight: bold;" >
        Création du compte
        </a>
      <br><br>
      <a href="PageConnection.html" class=" d-flex justify-content-between" style="color:#01A659">Vous avez déjà un compte ?</a>
      <div class="col-md-9">
      <a href="questions.html" class=" d-flex justify-content-end" style="color:#01A659">Questions ?</a>
    </div>
    </form>
    </div>
  </body>

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</html>