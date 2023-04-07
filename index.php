<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Page présentation Cleboost" />
  <meta name="author" content="Cleboost" />
  <title>Cafe concert</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />


  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="assets/css/scrollbar.css">
  <link rel="shortcut icon" href="assets/img/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/perso.css">
</head>

<body id="page-top">
  <?php 
      $text = file_get_contents('count.txt');
      file_put_contents('count.txt', $text + 1);
      // echo $text
  ?>

  <!-- <video id="background-video" autoplay loop muted>

    <source src="./assets/video/video.mp4" type="video/mp4">

  </video> -->

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Cafe Concert</span>
      <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/logo.jpg"/></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#home">Accueil <i class="fa fa-house"></i></a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Présentation <i style="font-size: 25px;" class="fa fa-book-open"></i></a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#form">Formules <i class="fa-solid fa-cake-candles"></i></a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#planing">Planning <i class="fa fa-calendar-days"></i></a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#music">Musiques <i class="fa fa-music"></i></a></li>
      </ul>
    </div>
  </nav>
  <!-- Page Content-->
  <div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="home">
      <div class="resume-section-content">
        <h1 class="mb-0">
          Café concert
        </h1>
        <!-- <div class="subheading mb-5">
                        Clément Balarot
                    </div> -->
        <p class="lead mb-5">Le café-concert est un concept musical monté par M.Géry et Mme Thunière pour la 4e année au collège. 
          L’idée est simple : les collègues sont invités à venir écouter et regarder les élèves de l’Atelier vocal et instrumental, tout en dégustant un café ou thé bio accompagné de petites gourmandises confectionnées et servies par les élèves de la Segpa.
          </p>
        <div class="social-icons">
        </div>
    </section>
    <hr class="m-0" />
    <section class="resume-section" id="about">
      <div class="resume-section-content">
        <h1 class="mb-0">
          Présentation
        </h1>
        <!-- <div class="subheading mb-5">
                        Clément Balarot
                    </div> -->
        <p class="lead mb-5">
          Nous travaillons autour d’un grand thème qui nous tient à cœur : l’écologie et plus généralement le développement durable. Nous sommes convaincus que l’art est un vecteur de sensibilisation privilégié !
          Vous retrouverez des chants (chantés en chœur ou par de petits effectifs) accompagnés instrumentalement par les élèves et/ou les professeurs, entrecoupés de vidéos de sensibilisation, de projections et de décors à thème.
          Nous nous produisons régulièrement dans l’année. Cela permet aux élèves de se familiariser avec la scène. Cette année, nous proposons 3 concepts pour 9 dates : les cafés-concerts, les cartes blanches aux solistes et les temps forts.
          Tout ceci est possible grâce à l’investissement sans faille de nos élèves, chanteurs comme instrumentistes, comme techniciens. Nous sommes fiers d’eux et les remercions chaleureusement !
          </p>
        <div class="social-icons">
        </div>
    </section>

    <section class="resume-section" id="form">
      <div class="resume-section-content">
        <h2 class="mb-5">Nos formules</h2>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1">
            <h3 class="mb-0">Cafés-concerts / « menu complet »</h3>
            <p>C’est le format le plus conséquent, avec l’effectif au complet (chanteurs, instrumentistes, vidéos, projections, décors, service boisson et pâtisseries). Le grand thème sera l’écologie ; nous explorons une facette différente à chaque fois.</p>
          </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1">
            <h3 class="mb-0">Carte blanche aux solistes / « menu à la carte »</h3>
            <p>C’est un format allégé où vous entendrez des solistes, duos ou trios mis en valeur. Les thèmes abordés sont en lien avec des causes mondiales (tolérance, Journée Internationale du droit des femmes par exemple).</p>
          </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1">
            <h3 class="mb-0">Les Temps Forts</h3>
            <p>Ce sont des rdv à effectif complet pour des événements particuliers qui rythment la vie du collège : Marathon musical pendant la semaine du développement durable, Portes Ouvertes du collège, Fête de la musique ou Concert de fin d’année ouvert au public extérieur.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Planing -->
    <section class="resume-section" id="planing">
      <div class="resume-section-content">
        <h2 class="mb-5">Nos futurs rendez-vous</h2>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1">
            <h3 class="mb-0" style="font-style: italic;">Présentation musicale du programme de l'année</h3>
            <!-- <div class="subheading mb-3">En cours</div> -->
            <!-- <p>Planification de cette année.</p> -->
          </div>
          <div class="flex-shrink-0"><span class="text-primary">Octobre 2022</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1">
            <h3 class="mb-0">Tolérance/Hommage à Samuel Paty</h3>
            <!-- <div class="subheading mb-3">En cours</div> -->
            <!-- <p>A voir toute a l'heure.</p> -->
          </div>
          <div class="flex-shrink-0"><span class="text-primary">Novembre 2022</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="flex-grow-1">
            <h3 class="mb-0">Thème surprise sur l'environnement</h3>
            <!-- <div class="subheading mb-3">La rencontre d'un dev </div> -->
            <!-- <p>A voir toute a l'heure.</p> -->
          </div>
          <div class="flex-shrink-0"><span class="text-primary">Janvier 2023</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="flex-grow-1">
            <h3 class="mb-0">Journée internationnale des droits de la femme</h3>
            <!-- <div class="subheading mb-3">La rencontre d'un dev </div> -->
            <!-- <p>A voir toute a l'heure.</p> -->
        </div>
        <div class="flex-shrink-0"><span class="text-primary">Mars 2023</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0">Semaine du développement durable</h3>
                <!-- <div class="subheading mb-3">La rencontre d'un dev </div> -->
                <!-- <p>A voir toute a l'heure.</p> -->
            </div>
                <div class="flex-shrink-0"><span class="text-primary">Marathon musical 2023</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0">Thème surprise sur l'environnement</h3>
                <!-- <div class="subheading mb-3">La rencontre d'un dev </div> -->
                <!-- <p>A voir toute a l'heure.</p> -->
            </div>
                <div class="flex-shrink-0"><span class="text-primary">Avril 2023</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0">Portes-ouvertes</h3>
                <!-- <div class="subheading mb-3">La rencontre d'un dev </div> -->
                <!-- <p>A voir toute a l'heure.</p> -->
            </div>
                <div class="flex-shrink-0"><span class="text-primary">Mai 2023</span></div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0">Fête de la Musique</h3>
                <!-- <div class="subheading mb-3">La rencontre d'un dev </div> -->
                <!-- <p>A voir toute a l'heure.</p> -->
            </div>
                <div class="flex-shrink-0"><span class="text-primary">Juin 2023</span></div>
        </div>
  </div>
  </section>
  <!-- Experience-->
  <section class="resume-section" id="music">
    <div class="resume-section-content">
        <h2 class="mb-5">Programme musical du jour</h2>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="flex-grow-1">
        <h3 class="mb-0">Aux arbres citoyens</h3>
        <!-- <div class="subheading mb-3">Gebi l'aplication qui gère votre bibliotèque</div> -->
        </div>
        <div class="flex-shrink-0"><span class="text-primary">Inconnus</span></div>
    </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="flex-grow-1">
        <h3 class="mb-0">Il est où le SAV</h3>
        <!-- <div class="subheading mb-3">Gebi l'aplication qui gère votre bibliotèque</div> -->
        </div>
        <div class="flex-shrink-0"><span class="text-primary">Inconnus</span></div>
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="flex-grow-1">
        <h3 class="mb-0">La Mer  de Trenet</h3>
        <!-- <div class="subheading mb-3">Gebi l'aplication qui gère votre bibliotèque</div> -->
        </div>
        <div class="flex-shrink-0"><span class="text-primary">Inconnus</span></div>
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="flex-grow-1">
        <h3 class="mb-0">Emmène-moi</h3>
        <!-- <div class="subheading mb-3">Gebi l'aplication qui gère votre bibliotèque</div> -->
        </div>
        <div class="flex-shrink-0"><span class="text-primary">Inconnus</span></div>
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
      <div class="flex-grow-1">
      <h3 class="mb-0">Le Caribou Volant</h3>
      <!-- <div class="subheading mb-3">Gebi l'aplication qui gère votre bibliotèque</div> -->
      </div>
    <div class="flex-shrink-0"><span class="text-primary">Inconnus</span></div>
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="flex-grow-1">
        <h3 class="mb-0">Le pouvoir des fleurs</h3>
        <!-- <div class="subheading mb-3">Gebi l'aplication qui gère votre bibliotèque</div> -->
        </div>
        <div class="flex-shrink-0"><span class="text-primary">Inconnus</span></div>
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="flex-grow-1">
        <h3 class="mb-0">L'abeille et le papillon</h3>
        <!-- <div class="subheading mb-3">Gebi l'aplication qui gère votre bibliotèque</div> -->
        </div>
        <div class="flex-shrink-0"><span class="text-primary">Inconnus</span></div>
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="flex-grow-1">
        <h3 class="mb-0">Des ricochets</h3>
        <!-- <div class="subheading mb-3">Gebi l'aplication qui gère votre bibliotèque</div> -->
        </div>
        <div class="flex-shrink-0"><span class="text-primary">Inconnus</span></div>
    </div>
    <!-- <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="flex-grow-1">
        <h3 class="mb-0">J'ai demandé a la lune</h3>
        <div class="subheading mb-3">Gebi l'aplication qui gère votre bibliotèque</div> -->
        </div>
  </section>
  <hr class="m-0" />
  <!-- Education-->
  <!-- <section class="resume-section" id="projects">
    <div class="resume-section-content">
      <h2 class="mb-5">Mes projects</h2>
      <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="flex-grow-1">
          <h3 class="mb-0">Infernus</h3> -->
          <!-- <div class="subheading mb-3">Minecraft</div> -->
          <!-- <div>Un petit serveur minecraft modée avec son launcher ! Ce serveur a comme thème une apocalypse où les joueurs sont dans une ville et doivent chercher à tuer les zombies et autres mutants qui l'enviassent !</div>
          <p>Poste : Développeur/Administrateur</p>
          <p class="info-projects"><i class="fa-solid fa-circle-exclamation"></i> Nous rectrutons actuellement des builders bénévolent !</p>
          <div class="social-icons">
            <a class="social-icon" href=><i class="fab fa-discord"></i></a>
          </div>
        </div>
        <div class="flex-shrink-0"><span class="text-primary">Depuis Janvier 2020</span></div>
      </div>

  </section> -->
  <hr class="m-0" />

  <hr class="m-0" />

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/mnu.js"></script>
</body>

</html>