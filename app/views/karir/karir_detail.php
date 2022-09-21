<style>
  .banner-image {
    background-image: url('<?= BASEURL; ?>/img/karir.jpg');
    /* background-color: coral; */
    background-size: cover;
    /*filter: blur(8px);
      -webkit-filter: blur(8px);*/
  }
</style>
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
  <div class="content text-center">
    <h1><?= $data['judul']; ?></h1>
  </div>
</div>
<div class="container my-5 d-grid gap-5">
  <div class="row">
    <div class="col" style="background-color: #FFCD91;">
      <img src="<?= BASEURL; ?>/img/logs.png" alt="low1" class="img d-flex justify-content-center">
      <div class="d-flex justify-content-center mb-2">
        <h1>LOWONGAN 1</h1>
      </div>
    </div>
  </div>
  <div class="container my-5 d-grid gap-5">
    <div class="row">
      <div class="col">
        <?php
        // var_dump($data['karir']);
        foreach ($data['karir'] as $isi) {
        ?>
          <a href="#" class="badge text-bg-primary"><?= $isi['klass']; ?></a>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <!---
  <div class="row">
    <div class="col d-flex mt-3">
      <a href="<?= BASEURL; ?>/karir_1" style="text-decoration: none;">
        <div class="card cart-kard text-center">
          <img src="<?= BASEURL; ?>/img/logs.png" alt="low1" class="img">
          <h3>LOWONGAN PEKERJAAN 1</h3>
        </div>
      </a>
    </div>
    <div class="col d-flex mt-3">
      <a href="#" style="text-decoration: none;">
        <div class="card cart-kard text-center">
          <img src="<?= BASEURL; ?>/img/logs.png" alt="low1" class="img">
          <h3>LOWONGAN PEKERJAAN 2</h3>
        </div>
      </a>
    </div>
    <div class="col d-flex mt-3">
      <a href="#" style="text-decoration: none;">
        <div class="card cart-kard text-center">
          <img src="<?= BASEURL; ?>/img/logs.png" alt="low1" class="img">
          <h3>LOWONGAN PEKERJAAN 3</h3>
        </div>
      </a>
    </div>
    <div class="col d-flex mt-3">
      <a href="#" style="text-decoration: none;">
        <div class="card cart-kard text-center">
          <img src="<?= BASEURL; ?>/img/logs.png" alt="low1" class="img">
          <h3>LOWONGAN PEKERJAAN 3</h3>
        </div>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col d-flex mt-3">
      <a href="<?= BASEURL; ?>/karir_1" style="text-decoration: none;">
        <div class="card cart-kard text-center">
          <img src="<?= BASEURL; ?>/img/logs.png" alt="low1" class="img">
          <h3>LOWONGAN PEKERJAAN 1</h3>
        </div>
      </a>
    </div>
    <div class="col d-flex mt-3">
      <a href="#" style="text-decoration: none;">
        <div class="card cart-kard text-center">
          <img src="<?= BASEURL; ?>/img/logs.png" alt="low1" class="img">
          <h3>LOWONGAN PEKERJAAN 2</h3>
        </div>
      </a>
    </div>
    <!--<div class="col d-flex">
      <a href="#" style="text-decoration: none;">
        <div class="card cart-kard text-center">
          <img src="<?= BASEURL; ?>/img/logs.png" alt="low1" class="img">
          <h3>LOWONGAN PEKERJAAN 2</h3>
        </div>
      </a>
    </div>
  </div>-->
</div>