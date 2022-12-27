<style>
  .banner-image {
    background-image: url('<?= BASEURL; ?>/app/img/karir.jpg');
    /* background-color: coral; */
    background-size: cover;
    /*filter: blur(8px);
      -webkit-filter: blur(8px);*/
  }
</style>
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
  <div class="container h-100">
    <div class="d-flex h-100 text-left align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Lowongan Pekerjaan</h1>
        <!-- <h1 class="lead mb-0">HARGA BERSAHABAT</h1> -->
      </div>
    </div>
  </div>
</div>
<div class="container my-5 d-grid gap-5">
  <div class="row">
    <div class="col" style="background-color: #FFCD91;">
      <!-- <img src="<?= BASEURL; ?>/img/logs.png" alt="low1" class="img d-flex justify-content-center"> -->
      <div class="d-flex justify-content-center mb-2">
        <h1>
        </h1>
      </div>
      <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facere velit culpa libero provident sit cum eveniet ipsa ducimus. Officiis, aperiam alias porro repellendus sunt modi animi dicta ducimus cumque?</h5>
    </div>
  </div>
  <div class="row">
    <form action="<?= BASEURL; ?>/karir/cari" method="POST">
      <div class="input-group mb-3">
        <select name="byklass" id="byklass" class="form-control">
          <option value="" disabled selected>Cari</option>
          <?php
          foreach ($data['karir'] as $klass) {
          ?>
            <option value="<?= $klass['klass']; ?>"><?= $klass['klass']; ?></option>
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
    foreach ($data['jumlah'] as $isi) {
    ?>
      <div class="col-sm-3">
        <div class="card-group">
          <div class="card mt-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><?= $isi['jabatan']; ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?= $isi['kelas']; ?></h6>

              <!-- isi rangkuman kerja -->
              <!-- <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, et quod..</p> -->
              <span class="badge text-bg-primary">info</span>
              <span class="badge text-bg-primary">Seco</span>
              <span class="badge text-bg-primary">Sendary</span>
              <span class="badge text-bg-primary">condary</span>
              <span class="badge text-bg-primary">dary</span>
              <span class="badge text-bg-primary">aasssSecondary</span>
            </div>
            <div class="card-footer">
              <a href="<?= BASEURL . '/karier/' . $isi['id']; ?>?<?= $isi['jabatan']; ?>" class="card-link btn btn-sm btn-secondary mt-1"> Cek</a>
            </div>
          </div>
        </div>
        <!-- <a href="<?= BASEURL; ?>/karir_1" class="badge text-bg-primary"><?= $isi['kelas']; ?></a> -->
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