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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body classe="container" style="font-family:Open Sans;">
  <div class="border d-flex align-items-center justify-content-end" style="height: 100vh;">
    <div class="col-md-4">
      <img src="img/LogoCPNV.png" style="max-width: 50vh" />
    </div>
    <div class="col-md-1">
      <img src="img/1x/Plan de travail 1.png" style="height: 80vh" />
    </div>

    <form class="col-md-5" method="post" action="confirmation.php?1">

      <div class="mb-1 col-md-9" style="display: flex; flex-direction:row; justify-content:space-between;">
        <div style="padding-right: 4vw;"><label for="name" class="form-1" style="font-weight: bold; padding-bottom:5px;">Nom</label> <input required type="text" name="name" class="form-control" id="exampleInputText1"></div>
        <div><label for="" class="form-1" style="font-weight: bold; padding-bottom:5px;">Prénom</label> <input required type="text" name="prenom" class="form-control" id="exampleInputText1"></div>
      </div>
      <div class="mb-2 col-md-9">
        <label for="form-label" class="form-1" style="font-weight: bold; padding-bottom:5px;">Adresse email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required>
      </div>
      <label for="pet-select" class="form-1" style="font-weight: bold; padding-bottom:5px;">Quel classe êtes vous ?</label><br>
      <select name="class" id="pet-select" class="form-control" style="width: 60%;" required>
        <option value="a">A</option>
        <option value="b">B</option>
        <option value="c">C</option>
        <option value="e">Enseignant</option>
      </select>
      <br>
      <div class="mb-3 col-md-9">
        <label for="form-label" class="form-1" style="font-weight: bold; padding-bottom:5px;">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="mdp" required>
      </div>
      <div class="mb-3 col-md-9">
        <label for="form-label" class="form-1" style="font-weight: bold; padding-bottom:5px;">Confirmer votre mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="confmdp" required>
      </div>
      <?php
      if (isset($err)) {
      ?>
        <p style="color: rgb(255, 0, 0); font-weight: 900;"><?= $err ?> !</p>
      <?php
      }
      ?>
      <input type="submit" class="btn text-white col-md-6" style="background-color:#01A659; font-weight: bold;" name="sumbit">
      <br><br>
      <a href="index.php" class=" d-flex justify-content-between" style="color:#01A659">Vous avez déjà un compte ?</a>
      <div class="col-md-9">
        <a href="questions.php" class=" d-flex justify-content-end" style="color:#01A659">Questions ?</a>
      </div>
    </form>

  </div>
</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

</html>