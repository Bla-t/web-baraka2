<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="<?= BASEURL; ?>/img/logdom.png" />
  <title><?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/templatemo-style.css" />
  <link href="<?= BASEURL; ?>/css/font-awesome.min.css" rel="stylesheet" />
  <style>
    .banner-image {
      background-image: url('<?= BASEURL; ?>/img/banner-img.jpg');
      background-size: cover;
      /*filter: blur(8px);
      -webkit-filter: blur(8px);*/
    }

    .navbar-dark {
      background-color: #233b53 !important;
    }
  </style>
</head>

<body>
  <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>"><img src="<?= BASEURL; ?>/img/logs.png" alt="logo" width="250"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= BASEURL; ?>/tracking">Tracking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= BASEURL; ?>/about">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= BASEURL; ?>/cabang">Cabang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">News Center</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link text-white" href="#">Karir</a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="text-decoration: none;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Karir
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Lowongan DKI Jakarta</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Lowongan Jawa Barat</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Lowongan Jawa Tengah</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Lowongan Jawa Timur</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Hubungi kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>