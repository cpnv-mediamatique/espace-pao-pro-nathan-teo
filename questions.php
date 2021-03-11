<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Questions</title>
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
        <div class="form-outline">
          <input type="password" id="typePassword" class="form-control" />
          <label class="form-label" for="typePassword">exemple</label>
        </div>
      </div>
      <div class="mb-3 col-md-9" style="font-weight: bold; padding-bottom:5px;">
        Qu'elle est votre questions ?
        <br>
        <select name="pets" id="pet-select">
          <option value="pasconnecter">Je n'arrive pas à me connecter.</option>
          <option value="motdepasse">J'ai oublié mon mot de passe.</option>
          <option value="fonctionnepas">Le site ne fonctionne pas.</option>
          <option value="bug">J'ai un bug.</option>
          <option value="autres">Autres.</option>
      </select>
      <div class="form-outline">
        <textarea class="form-control" id="textAreaExample" rows="4">Ecrire un message.</textarea>
      </div>
      <br>
      <a class="btn text-white col-md-6 " href="message.html" style="background-color:#01A659; font-weight: bold;">
        Envoyer votre question
      </a>

    </div>
  </body>

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</html>
