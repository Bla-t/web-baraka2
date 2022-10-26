<?php
include "header.php";
// Check connection
// if (!$conn) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
// }
$val_map = mysqli_query($conn, "SELECT * FROM `latlong`") or die(mysqli_error($conn));
$updtkowil = mysqli_query($conn, "SELECT * FROM `cab_area`") or die(mysqli_error($conn));
$mapvalue = mysqli_fetch_all($val_map);
// var_dump($mapvalue);
?>
<!-- Banner Image  -->
<style>
  .body {
    margin-top: 5rem;
  }

  .jumbotron {
    margin-top: 100px;
    text-align: center;
  }

  .card {
    background-color: #E5E6E7;
  }
</style>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">DATA CABANG </h1>
    <p class="lead">(Rubah Data Cabang/Agen & Tambah Baru Cabang/Agen)</p>
  </div>
</div>

<!-- Main Content Area -->
<div class="container my-5 d-grid gap-5">
  <div class="container">
    <div class="heading">
      <h3 class="display-5">- Cari Cabang & Rubah Data</h3>
    </div>
    <div class="row mt-3">
      <div class="card">
        <div class="card-body">
          <form action="" method="GET">
            <div class="input-group">
              <input type="text" class="form-control form-control-md" placeholder="Cari cabang..." aria-label="Cari cabang" name="cabs" aria-describedby="button-addon2" required>
              <button class="btn bg-primary text-white" type="submit" id="button-addon2">Cari Cabang</button>
            </div>
            <?php
            if (isset($_GET['cabs'])) {
              $param = $_GET['cabs'];
              $result = mysqli_query($conn, "SELECT * FROM `isi_cabang` WHERE `nama_cabang` LIKE '$param%' ") or die(mysqli_error($conn));
              if ($param == ' ') {
                echo '<br><h4 class="d-flex display-6 justify-content-center align-items-center fw-semibold text-warning"> INPUT KOSONG</h4>';
              } else if (strlen($param) < 4) {
                echo '<br><h4 class="d-flex display-6 justify-content-center align-items-center fw-semibold text-warning"> INPUT KURANG</h4>';
              } else if (mysqli_num_rows($result) == 0) {
                echo '<br><h4 class="d-flex display-6 justify-content-center align-items-center fw-semibold text-warning"> ALAMAT/CABANG YANG DI CARI TIDAK ADA</h4>';
              } else if (mysqli_num_rows($result) >  0) {
            ?>
                <br>
                <table class="table table-sm table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Cabang</th>
                      <th>ALamat</th>
                      <th>No.tlp</th>
                      <th>Penerimaan</th>
                      <th>Pengiriman</th>
                      <th>map</th>
                      <th>edit</th>
                      <th>hapus</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $n = 1;
                    while ($hasil = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><?= $n++; ?>.</td>
                        <td><?= $hasil['nama_cabang']; ?></td>
                        <td><?= $hasil['alamat']; ?></td>
                        <td><?= $hasil['no_tlp']; ?></td>
                        <?php
                        if ($hasil['recieve'] == 'n') {
                          $isirec = '<i class="fas fa-times" style="color:#F46000;"></i>';
                        } else {
                          $isirec = '<i class="fas fa-check" style="color:#1FE100;"></i>';
                        }
                        if ($hasil['delivere'] == 'n') {
                          $isidel = '<i class="fas fa-times" style="color:#F46000;"></i>';
                        } else {
                          $isidel = '<i class="fas fa-check" style="color:#1FE100;"></i>';
                        }
                        ?>
                        <td><?= $isirec; ?></td>
                        <td><?= $isidel; ?></td>
                        <td>
                          <?php
                          if (empty($hasil['map'])) {
                            echo '<i class="fas fa-earth-asia" style="color:#878787 ;" disabled></i>';
                          } else {
                            echo '<a href="' . $hasil['map'] . '" target="blank" style="color:#01BF57 ;">
                              <i class="fas fa-earth-asia" disabled></i>
                              </a>';
                          }
                          ?>
                        </td>
                        <td><a href="setcab.php?edit&id=<?= $hasil['id']; ?>" class="btn btn-sm btn-warning">Edit</a></td>
                        <td> <a href="confg/crud.php?hps=hps_cbg&id=<?= $hasil['id']; ?>&cab=<?= $hasil['nama_cabang']; ?>" id="hapus" class="btn btn-sm btn-danger">hapus</a></td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
            <?php
              }
            }
            ?>
          </form>
          <?php
          if (isset($_GET['edit'])) {
            $id = $_GET['id'];
            $isiedit = mysqli_query($conn, "SELECT * FROM `isi_cabang` WHERE `id` = $id");
            while ($dt = mysqli_fetch_assoc($isiedit)) {
          ?>
              <p class="fs-5 mt-3">- Edit Data <?= $dt['nama_cabang']; ?></p>
              <form action="confg/crud.php?mode=updt_cbg" method="POST">
                <input type="hidden" readonly value="<?= $dt['id']; ?>" name="id">
                <div class="row mt-3">
                  <div class="col">
                    <label for="updtnama"> Nama Cabang</label>
                    <input type="text" class="form-control" name="updtnama" value="<?= $dt['nama_cabang']; ?>" id="updtnama">
                  </div>
                  <div class="col">
                    <label for="updttlp"> No.tlp</label>
                    <input type="text" class="form-control" name="updt_tlp" value="<?= $dt['no_tlp']; ?>" id="updttlp">
                  </div>
                  <div class="col">
                    <label for="updtkowil"> kode wilayah</label>
                    <select name="updtkowil" id="updtkowil" class="form-control">
                      <option value="<?= $dt['kowil']; ?>" selected>Pilih</option>
                      <?php
                      while ($ishkowil = mysqli_fetch_assoc($updtkowil)) {
                      ?>
                        <option value="<?= $ishkowil['kode']; ?>"><?= $ishkowil['nama']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <?php
                $lalquery = mysqli_query($conn, "SELECT * FROM `latlong` WHERE `namcab` like '$dt[nama_cabang]'") or die($conn);
                if (mysqli_num_rows($lalquery) == 0) {
                  $lat = '-';
                  $long = '-';
                } else {
                  $datalatlong = mysqli_fetch_assoc($lalquery);;
                  $lat = $datalatlong['lat'];
                  $long = $datalatlong['long'];
                }
                ?>
                <div class="row mt-3">
                  <div class="col">
                    <label for="updtalamat"> Alamat</label>
                    <textarea type="text" class="form-control" name="updtalamat" id="updtalamat"><?= $dt['alamat']; ?></textarea>
                  </div>
                  <div class="col">
                    <label for="updtlat"> Latitude</label>
                    <input type="text" class="form-control" name="updtlat" value="<?= $lat; ?>" id="updtlat">
                  </div>
                  <div class="col">
                    <label for="updtlon"> Longitude</label>
                    <input type="text" class="form-control" name="updtlong" value="<?= $long; ?>" id="updtlon">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <label for="updtmap">Google Map link</label>
                    <input type="text" class="form-control" name="updtmap" value="<?= $dt['map']; ?>" id="updtmap">
                  </div>
                  <div class="row g-3 align align-items-center">
                    <div class="col-auto">
                      <?php
                      if ($dt['recieve'] == 'y') {

                      ?>
                        <input type="checkbox" class="form-check-input" id="updtcek1" name="updt_terima" value="<?= $dt['recieve']; ?>" checked>
                      <?php
                      } else {
                      ?>
                        <input type="checkbox" class="form-check-input" id="updtcek1" name="updt_terima" value="<?= $dt['recieve']; ?>">
                      <?php
                      }
                      ?>
                      <label class="form-check-label" for="updtcek1">penerimaan</label>
                    </div>
                    <div class="col-auto">
                      <?php
                      if ($dt['delivere'] == 'y') {
                      ?>
                        <input type="checkbox" class="form-check-input" id="updtcek2" name="updt_kirim" value="<?= $dt['delivere']; ?>" checked>
                      <?php
                      } else {
                      ?>
                        <input type="checkbox" class="form-check-input" id="updtcek2" name="updt_kirim" value="<?= $dt['delivere']; ?>">
                      <?php
                      }
                      ?>
                      <label class="form-check-label" for="updtcek2">pengiriman</label>
                    </div>
                  </div>
                </div>
                <div class="row g-3 align align-items-center">
                  <div class="col">
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    <a href="setcab.php" class="btn btn-warning mt-3">Batal</a>
                  </div>
                </div>
              </form>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div><br>
    <div class="heading">
      <h3 class="display-5 mt-3">- Tambah Data Cabang Baru</h3>
    </div>
    <div class="row mt-3">
      <div class="card">
        <div class="card-body">
          <form action="confg/crud.php?tambah=tmbh_cbg" method="POST">
            <div class="col">
              <div class="mb-3">
                <label for="namacabang" class="form-label">Nama Cabang</label>
                <input type="text" name="nama" class="form-control" id="namacabang" required>
              </div>
              <div class="mb-3">
                <label for="alamatcabang" class="form-label">Alamat</label>
                <textarea type="text" name="alamat" class="form-control" id="alamatcabang" required></textarea>
              </div>
              <div class="mb-3">
                <label for="notlp" class="form-label">No.Tlp</label>
                <input type="text" name="tlp" class="form-control" id="notlp" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="map" class="form-label">Google Map Link</label>
              <input type="text" class="form-control" name="map" id="map" required>
            </div>
            <div class="mb-3">
              <label for="lat" class="form-label">Latitude</label>
              <input type="text" class="form-control" name="latmap" id="lat" required>
            </div>
            <div class="mb-3">
              <label for="lon" class="form-label">longitude</label>
              <input type="text" class="form-control" name="lonmap" id="lon" required>
            </div>
            <div class="mb-3">
              <?php
              $kowilayah = mysqli_query($conn, "SELECT * FROM `cab_area` ORDER BY `id`") or die(mysqli_error($conn));
              ?>
              <label for="kowil" class="form-label">wilayah</label>
              <select name="kowil" id="kowil" class="form-control">
                <option value="" selected disabled>Pilih Wilayah</option>
                <?php while ($isiwil = mysqli_fetch_assoc($kowilayah)) { ?>
                  <option value="<?= $isiwil['kode']; ?>"><?= $isiwil['nama']; ?></option>
                <?php
                } ?>
              </select>
            </div>
            <div class="row g-3 align align-items-center">
              <div class="col-auto">
                <input type="checkbox" class="form-check-input" id="terima" name="terima" value="n">
                <label class="form-check-label" for="terima">penerimaan</label>
              </div>
              <div class="col-auto">
                <input type="checkbox" class="form-check-input" id="kirim" name="kirim" value="n">
                <label class="form-check-label" for="kirim">pengiriman</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function() {
        $("#terima, #kirim, #updtcek1, #updtcek2").change(function() {
          if ($(this).prop('checked')) {
            $(this).val('y');
          } else {
            $(this).val('n');
          }
          // alert($(this).val());
        });
        $("#hapus").on('click', function() {
          if (confirm("yakin.?")) {
            return true;
          } else {
            return false;
          }
        });
      });
    </script>
  </div>
</div>
<?php include "footer.php"; ?>