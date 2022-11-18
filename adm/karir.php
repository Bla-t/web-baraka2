<?php
include 'header.php';
$j_class = mysqli_query($conn, "SELECT * FROM `job_desk_class` ORDER BY `id`") or die(mysqli_error($conn));

?>
<style>
  .banner-image {
    background-image: url('img/karir.jpg');
    /* background-color: coral; */
    background-size: cover;
    /*filter: blur(8px);
      -webkit-filter: blur(8px);*/
  }
</style>
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
  <div class="content text-center">
    <h1>Lowongan Pekerjaan</h1>
  </div>
</div>
<div class="container my-5 d-grid gap-5">
  <div class="row">
    <div class="col" style="background-color: #FFCD91;">
      <div class="d-flex justify-content-center mb-2">
        <h1></h1>
      </div>
      <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere velit culpa libero provident sit cum eveniet ipsa ducimus. Officiis, aperiam alias porro repellendus sunt modi animi dicta ducimus cumque?</h5>
    </div>
  </div>
  <div class="row">
    <form action="" method="POST">
      <div class="input-group mb-3">
        <select name="byklass" id="byklass" class="form-control">
          <option value="" disabled selected>Cari</option>
          <?php
          while ($jd_klass = mysqli_fetch_array($j_class)) {
          ?>
            <option value="<?= $jd_klass['klass']; ?>"><?= $jd_klass['klass']; ?></option>
          <?php
          }
          ?>
        </select>
        <!-- <input type="text" class="form-control" aria-describedby="button-addon2" name="byklass" placeholder="Cari Jabatan"> -->
        <button class="btn btn-warning" type="submit" id="button-addon2">Cari</button>
      </div>
    </form>
  </div>
</div>
<div class="container my-5 d-grid gap-5">
  <div class="row">
    <?php
    // var_dump($data['karir']);
    // foreach ($data['jumlah'] as $isi) {}
    if (isset($_POST['byklass'])) {
      $pardesk = $_POST['byklass'];
      // var_dump($pardesk);
      $j_desk = mysqli_query($conn, "SELECT * FROM `job_desk` WHERE `kelas` = '$pardesk' ORDER BY `id`") or die(mysqli_error($conn));
    } else {
      $j_desk = mysqli_query($conn, "SELECT * FROM `job_desk` ORDER BY `id`") or die(mysqli_error($conn));
    }
    while ($jb_desk = mysqli_fetch_array($j_desk)) {
    ?>
      <div class="col-sm-3">
        <div class="card-group">
          <div class="card mt-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><?= $jb_desk['jabatan']; ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?= $jb_desk['kelas']; ?></h6>
              <!-- isi rangkuman kerja -->
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, et quod..</p>
            </div>
            <div class="card-footer">
              <a href="#" class="card-link btn btn-sm btn-secondary mt-1"> Cek</a>
            </div>
          </div>
        </div>
        <!-- <a href="#/karir_1" class="badge text-bg-primary"><?= $jb_desk['kelas']; ?></a> -->
      </div>
    <?php
    }
    ?>
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
<?php
include 'footer.php';
?>