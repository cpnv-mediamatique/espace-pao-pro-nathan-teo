<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Page accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- MDB icon -->
    <link rel="icon" href="img/" type="image/x-icon" />
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
  <body style="font-family:Open Sans;">
    <!-- Start your project here-->
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
          <div class="collapse navbar-collapse  d-md-flex justify-content-between" id="navbarNavAltMarkup">
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
    
    <main>

      <!-- Carousel wrapper -->
      <div
        id="carouselBasicExample"
        class="carousel slide carousel-fade"
        data-mdb-ride="carousel"
      >
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"></li>
          <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"></li>
          <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
            <img
              src="img/carousel/cartedevisistes.png"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-flex justify-content-center align-items-center " style="bottom: 0%; width:100%; height: 100%; flex-direction: column; right:auto; left :auto;">
              <h2>Bienvenue dans l’Espace entreprise-PAO</h2>
              <p>Découvrez les différentes possibilités qui s'offre à vous.</p>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <img
              src="img/carousel/imagedumec.png"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-flex justify-content-center align-items-center" style="bottom: 0%; width:100%; height: 100%; flex-direction: column; right:auto; left :auto;">
              <h2>Ici, commandez un large choix de produits</h2>
              <p>Nous répendrons à vos demande dans les plus bref délais.</p>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <img
              src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-md-flex justify-content-center align-items-center" style="bottom: 0%; width:100%; height: 100%; flex-direction: column; right:auto; left :auto;">
              <h2>Une interface intuitive et simple</h2>
              <p>Découvrez votre site d'impression !</p>
            </div>
          </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a
          class="carousel-control-prev"
          href="#carouselBasicExample"
          role="button"
          data-mdb-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselBasicExample"
          role="button"
          data-mdb-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      <!-- Carousel wrapper -->
    <div class="col-10">
      <h2>Présentation</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt, lorem at interdum eleifend, turpis dui rhoncus tellus, quis fermentum metus justo in elit. Suspendisse varius viverra nisi aliquet pulvinar. Aliquam sollicitudin accumsan sapien ac maximus. Praesent at justo congue ligula porta hendrerit quis vitae leo. Donec at lorem porta, tincidunt eros sollicitudin, fermentum arcu. Nunc a commodo eros. Cras eu dolor mollis, aliquet tellus eget, accumsan mauris. Aenean eu iaculis massa. Suspendisse volutpat semper mi vitae elementum. </p>
    </div>
    <div class="col-10">
      <h2>Comment le site fonctionne ?</h2>
      <p>Chaque produit comprend un lien pour votre commande</br>
        Pour certains produits les responsables prendront ensuite contact avec vous pour vérifier certains détails</br>
        Nous espérons que nos produits et services vous seront utiles</br>
      </p>
    </div>
    <div class="col-md-6 offset-md-3 text-center" id="text-bas">
    <p>En cas de question, problème technique, ou pour de nouvelles idées de produits et services utiles pour les élèves, enseignants et maîtres de classe, vous pouvez nous contacter au moyen de l’email:</p>
    <p>espace.pao@mediamatique.ch</p>
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
