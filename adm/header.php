<!DOCTYPE html>
<html lang="id">
<?php
session_start();
include 'confg/config.php';
if (!$_SESSION['username'] || !$_SESSION['pass']) {
  header("location:index.php?pesan=gagal");
  session_destroy();
}
$data1 = mysqli_query($conn, "SELECT * FROM `kontak` WHERE `id` = 1 ") or die(mysqli_error($conn));
$data2 = mysqli_query($conn, "SELECT * FROM `kontak` WHERE `id` = 2 ") or die(mysqli_error($conn));
$isi = mysqli_fetch_assoc($data1);
$isisos = mysqli_fetch_assoc($data2);
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="img/logdom.png" />
  <title>Administrator</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="js/jquery3.6.js"></script>
  <script src="js/leaflet.markercluster-src.js"></script>
  <script src="js/leaflet-search.js"></script>
  <!-- <script src="' . BASEURL . '/js/BST.js"></script> -->
  <link rel="stylesheet" href="css/leaflet-search.css" />
  <link rel="stylesheet" href="css/MarkerCluster.css" />
  <link rel="stylesheet" href="css/MarkerCluster.Default.css" />

  <style>
    .list-group-item {
      background-color: #233b53 !important;

    }

    .bg-primary {
      background-color: #233b53 !important;
    }

    .list-group-item-action:hover {
      background-color: #6C9FB6 !important;
    }

    .text-white:hover {
      color: black;
    }

    .nav-link {
      text-align: center;
      justify-content: center;
    }

    .text-light {
      font-size: 0.8rem;
    }

    .btn-outline-warning {
      background-color: #233b53;
      color: cornsilk;
    }
  </style>
</head>

<body>
  <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="home.php"><img src="img/logobst2.png" alt="logo" width="100"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="cabang.php">Lokasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">News Center</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Karir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="kontak.php">Hubungi kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="info_edit.php">data footer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="confg/ot.php">logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>