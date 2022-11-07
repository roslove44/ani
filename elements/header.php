<?php
if($nav === 'Services') {
  $active = 'active';
}else {
  $active = '';
}
function nav_item(string $lien, string $titre): string
{
  global $nav;
  $class = '';
  if ($nav === $titre) {
    $class = $class . ' active';
  };
  $html = <<<HTML
        <li>
                    <a class="$class"   aria-current="page" href="$lien">
                        $titre
                    </a>
        </li>
HTML;
  return $html;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>AFRICA NEGOCE INTERNATIONAL</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.gif" rel="icon" />
  <link href="assets/img/apple-touch-icon.gif" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body class="page-index">
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">AFRICA NEGOCE INTERNATIONAL</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <?= nav_item("index.php", "Acceuil") ?>
          <?= nav_item("about.php", "À Propos") ?>
          
          <!-- <li><a href="index.php" class="active">Acceuil</a></li> -->
          <!-- <li><a href="about.php">À Propos</a></li> -->
          <!-- <li><a href="services.php">Services</a></li> -->
          <li class="dropdown">
            <a href="services.php" class="<?= $active?>"
              ><span>Produits</span>
              <i class="bi bi-chevron-down dropdown-indicator"></i
            ></a>
            <ul>
              <li class="dropdown">
                <a href="#"
                  ><span>Produits Agricoles</span>
                  <i class="bi bi-chevron-down dropdown-indicator"></i
                ></a>
                <ul>
                  <li><a href="#">Café</a></li>
                  <li><a href="#">Coton</a></li>
                  <li><a href="#">Soja</a></li>
                  <li><a href="#">Sésames</a></li>
                  <li><a href="#">Noix de Cajou</a></li>
                  <li><a href="#">Cacao</a></li>
                  <li><a href="#">Miel</a></li>
                  <li><a href="#">Piment</a></li>
                  <li><a href="#">Maïs</a></li>
                  <li><a href="#">Sucre</a></li>
                  <li><a href="#">Blé</a></li>
                  <li><a href="#">Ails</a></li>
                  <li><a href="#">Arachides</a></li>
                  <li><a href="#">Haricots</a></li>
                  <li><a href="#">Fruits : Mangues</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#"
                  ><span>Métaux Précieux</span>
                  <i class="bi bi-chevron-down dropdown-indicator"></i
                ></a>
                <ul>
                  <li><a href="#">Or</a></li>
                  <li><a href="#">Diamant </a></li>
                  <li><a href="#">Argent</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#"
                  ><span>Energie</span>
                  <i class="bi bi-chevron-down dropdown-indicator"></i
                ></a>
                <ul>
                  <li><a href="#">Pétrole</a></li>
                  <li><a href="#">Gaz</a></li>
                  <li><a href="#">Charbon</a></li>
                  <li><a href="#">Bois</a></li>
                </ul>
              </li>

              <li><a href="#">Minérais</a></li>
            </ul>
          </li>

          <?= nav_item("contact.php", "Contact") ?>
        </ul>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <script>
    let i= 0;

    function change() {
    var image = document.getElementById('hero')
    if (i<12) {
       i=i+1 
       image.style.background ='url(./assets/img/product/product'+i+'.jpg) center'
       image.style.backgroundSize = 'cover'

    }
    else{
        i=0
    }
    }
    setInterval(change, 3000);


  </script>