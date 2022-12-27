<?php
include "header.php";
$datagambar = mysqli_query($conn, "SELECT * FROM `slider` ORDER BY `id`");
?>
<style>
  .body {
    margin-top: 5rem;
  }

  .jumbotron {
    margin-top: 100px;
    text-align: center;
  }
</style>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">EDIT FILE DATA HOME </h1>
    <p class="lead">(upload gambar cabang/agen baru ukuran maksimal 1MB)</p>
  </div>
</div>
<div class="container my-1 d-grid mb-5">
  <div class="container body">
    <div class="row">
      <?php
      if (isset($_GET['alert'])) {
        if ($_GET["alert"] == 'sukses') {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>file ' . $_GET['file'] . '</strong> berhasil di tambahkan.!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } elseif ($_GET["alert"] == 'err') {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal.!!,</strong> ' . $_GET['file'] . '.!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } elseif ($_GET["alert"] == 'dell') {
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>File id "' . $_GET['file'] . '"</strong> Berhasil di hapus.!! 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        unset($_GET["alert"]);
      }
      ?>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <th>No.</th>
              <th>nama file</th>
              <th>preview</th>
              <th>ukuran</th>
              <th>hapus</th>
            </thead>
            <tbody>
              <?php
              $no = 1;
              while ($data = mysqli_fetch_assoc($datagambar)) {
                $file = "../app/img/slideimg/" . $data['gambr'];
                $ukuran = filesize($file) / 1000;
                $filesize = round($ukuran);
              ?>
                <tr>
                  <td><?= $no++; ?>.</td>
                  <td><?= $data['gambr']; ?></td>
                  <td><img src="<?= $file; ?>" alt="<?= $data['gambr']; ?>" width="100"></td>
                  <td><?= $filesize; ?> KB</td>
                  <td><a href="confg/crud.php?hps=unlink&<?= 'id=' . $data['id'] . '&filename=' . $data['gambr'] ?>" class="btn btn-sm btn-danger del">hapus</a></td>
                </tr>
              <?php
              } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-6">
        <h5 class="tm-copyright-text2 edit" style="font-weight: bold; color:black;">
          UPLOAD MEDIA :
        </h5>
        <p style="color:#FF8811;" class="fst-italic">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
        <form action="confg/crud.php?tambah=upload" method="POST" enctype="multipart/form-data">
          <input type="file" name="pctrs" class="form-control form-control-sm mb-2" required>
          <button type=" submit" class="btn btn-primary btn-sm ">simpan</button>
        </form>
      </div>
      <!-- <div class="col-md-4">
        <h5 class="tm-copyright-text2 edit" style="font-weight: bold;">
          SOSIAL MEDIA :
        </h5>
        <div class="form-inline mb-2">
          <a class="tm-copyright-content edits" href="<?= $isisos['marketing']; ?>" target="blank">
            <i class="fa-brands fa-facebook-square" style="font-size: 1.8em;"></i>
          </a>
          <a class="tm-copyright-content edits" href="<?= $isisos['wa_marketing']; ?>" target="blank">
            <i class="fa-brands fa-instagram" style="font-size: 1.8em;"></i>
          </a>
          <a class="tm-copyright-content edits" href="<?= $isisos['daerah']; ?>" target="blank">
            <i class="fa-brands fa-twitter-square" style="font-size: 1.8em;"></i>
          </a>
          <a class="tm-copyright-content edits" href="mailto:<?= $isisos['wa_daerah']; ?>" target="blank">
            <!-- <i class="fa fa-facebook-official" ></i>
            <i class="fa fa-envelope" style="font-size: 1.8em;"></i>
          </a>
        </div>
        <div class="row">
          <div class="form-group">
            <form action="confg/crud.php?mode=medsos" method="POST">
              <label class="form-label text-white" for="facebook">facebook :</label>
              <input type="text" class="form-control form-control-sm" name="fb" id="facebook" value="<?= $isisos['marketing']; ?>">
              <label class="form-label text-white" for="facebook">instagram :</label>
              <input type="text" class="form-control form-control-sm" name="ig" id="facebook" value="<?= $isisos['wa_marketing']; ?>">
              <label class="form-label text-white" for="facebook">twitter :</label>
              <input type="text" class="form-control form-control-sm" name="twtr" id="facebook" value="<?= $isisos['daerah']; ?>">
              <label class="form-label text-white" for="facebook">mail :</label>
              <input type="text" class="form-control form-control-sm mb-2" name="email" id="facebook" value="<?= $isisos['wa_daerah']; ?>">
              <button type="submit" class="btn btn-primary btn-sm">simpan</button>
            </form>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>

<?php
include "footer.php";
?>