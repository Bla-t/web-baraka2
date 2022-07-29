<!-- Banner Image  -->
<?php
$dbh = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (mysqli_connect_errno($dbh)) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error($dbh);
  exit();
}
?>
<style>
  .banner-image {
    background-image: url('<?= BASEURL; ?>/img/background1.jpeg');
    background-size: cover;
    /*filter: blur(8px);
      -webkit-filter: blur(8px);*/
  }
</style>
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
  <div class="content text-center">
    <h1>KAMI DIAM</h1>
    <h1>DAN ADA DI DEKAT ANDA</h1>
  </div>
</div>

<!-- Main Content Area -->
<div class="container my-5 d-grid gap-5">
  <div class="p-5 border maping">
    <h4 class="font-weight-normal judulmap" style="text-align: center; color: #001c50;">
      Lokasi Baraka di Sekitar Anda
    </h4>
    <div id="mapin" class="maps">
      <script>
        var map = L.map('mapin').setView([-1.3889, 117.3141], 5);
        // var tileUrl = ;
        // var attribute = ;
        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: 'Map data &copy;<a href="https://www.openstreetmap.org">OpenStreetMap</a>,' + ' license Under<a href="https://www.openstreetmap.org/copyright"> ODbl.</a>'
        });
        tiles.addTo(map);

        //GEOJSON//
        var markers = L.markerClusterGroup();
        map.addLayer(markers);

        var controlSearch = new L.Control.Search({
          position: 'topright',
          layer: markers,
          initial: false,
          zoom: 19,
          marker: false
        });

        map.addControl(controlSearch);
        /////////////////////////
        var addressPoints = <?= json_encode($data['map_data']); ?>;

        for (var i = 0; i < addressPoints.length; i++) {
          var a = addressPoints[i];
          var title = a['extern'];
          var marker = L.marker(new L.LatLng(a['latitude'], a['longitude']), {
            title: title
          });
          marker.bindPopup(title);
          markers.addLayer(marker);
        }
        //map.addLayer(markers);
      </script>
    </div>
    <br>
    <form action="" method="POST">
      <input type="text" class="form-control form-control-lg" name="cabs" id="cabwang" onchange="this.form.submit();" placeholder="Cari Cabang.??">

      <?php
      if (isset($_POST['cabs'])) {
        $n = 1;
        $param = $_POST['cabs'];
        $result = mysqli_query($dbh, "SELECT * FROM `isi_cabang` WHERE `alamat` LIKE '%$param%' OR `nama_cabang` LIKE '%$param'") or die(mysqli_error($dbh));
        switch ($result) {
          case empty($param):
            echo '<h4 class="display-4> INPUT KOSONG</h4>"';
            # code...
            break;
          case !empty($result):
            echo '<br>';
      ?>
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
                </tr>
              </thead>
              <tbody id="isi_<?= $tbl++; ?>">
                <?php
                while ($hasil = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td><?= $n++; ?>.</td>
                    <td><?= $hasil['nama_cabang']; ?></td>
                    <td><?= $hasil['alamat']; ?></td>
                    <td><?= $hasil['no_tlp']; ?></td>
                    <?php
                    if (empty($hasil['recieve'])) {
                      $isirec = '<i class="fas fa-times" style="color:#F46000;"></i>';
                    } else {
                      $isirec = '<i class="fas fa-check" style="color:#1FE100;"></i>';
                    }
                    if (empty($hasil['delivere'])) {
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
                  </tr>
                <?php
                }  ?>
              </tbody>
            </table>
      <?php
            break;

          default:
            echo '<h4 class="display-4>Cabang yang anda cari tidak di temukan / salah dalam pengetikan </h4>"';
            break;
        }
      }
      ?>
    </form>
  </div>
  <div class="container">
    <h2 class="d-flex justify-content-center align-items-center mb-2">Cari Cabang Paling Dekat Dengan mu</h2>
    <div class="accordion" id="accordion">
      <?php
      $ids = 0;
      $tbl = 0;
      $area = mysqli_query($dbh, "SELECT * FROM `cab_area` WHERE `stat`='y' ORDER BY `id`") or die(mysqli_errno($dbh));
      while ($cabs = mysqli_fetch_array($area)) {
        $kode = $cabs['kode'];

      ?>
        <div class="accordion-item">
          <h2 class="accordion-header" id="collapse<?= $cabs['nama']; ?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $kode; ?>" aria-expanded="false" aria-controls="collapseOne">
              <p class="fw-bold"><?= $cabs['nama']; ?></p>
            </button>
          </h2>
          <div id="<?= $kode; ?>" class="accordion-collapse collapse " aria-labelledby="collapse<?= $cabs['nama']; ?>" data-bs-parent="#accordion">
            <div class="col-sm-3 mt-3">
              <input type="text" id="srch_<?= $ids++; ?>" class="form-control form-control-sm" placeholder="Cari Cabang..." style="margin-left: 1rem;">
            </div>
            <div class="accordion-body">
              <?php
              $isi = mysqli_query($dbh, "SELECT * FROM `isi_cabang` WHERE `kowil` = '$kode'") or die(mysqli_error($dbh));
              $nom = 1;
              ?>
              <div class="col table-responsive" style="height: 400px;">
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
                    </tr>
                  </thead>
                  <tbody id="isi_<?= $tbl++; ?>">
                    <?php
                    while ($isicabang = mysqli_fetch_assoc($isi)) {
                    ?>
                      <tr>
                        <td><?= $nom++; ?>.</td>
                        <td><?= $isicabang['nama_cabang']; ?></td>
                        <td><?= $isicabang['alamat']; ?></td>
                        <td><?= $isicabang['no_tlp']; ?></td>
                        <?php
                        if (empty($isicabang['recieve'])) {
                          $isirec = '<i class="fas fa-times" style="color:#F46000;"></i>';
                        } else {
                          $isirec = '<i class="fas fa-check" style="color:#1FE100;"></i>';
                        }
                        if (empty($isicabang['delivere'])) {
                          $isidel = '<i class="fas fa-times" style="color:#F46000;"></i>';
                        } else {
                          $isidel = '<i class="fas fa-check" style="color:#1FE100;"></i>';
                        }
                        ?>
                        <td><?= $isirec; ?></td>
                        <td><?= $isidel; ?></td>
                        <td>
                          <?php
                          if (empty($isicabang['map'])) {
                            echo '<i class="fas fa-earth-asia" style="color:#878787 ;" disabled></i>';
                          } else {
                            echo '<a href="' . $isicabang['map'] . '" target="blank" style="color:#01BF57 ;">
                            <i class="fas fa-earth-asia" disabled></i>
                            </a>';
                          }
                          ?>
                        </td>
                      </tr>
                    <?php
                    }  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      <?php }
      $tt = mysqli_query($dbh, "SELECT COUNT(`nama`) AS `total` FROM `cab_area`  WHERE `stat` = 'y'") or die(mysqli_error($dbh));
      $jml = mysqli_fetch_assoc($tt) or die(mysqli_error($dbh));
      ?>
    </div>
    <input type="hidden" value="<?= $jml['total']; ?>" id="jml" readonly disabled>
  </div>
  <!--<div class="p-5 border">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
      natus iusto fugit id saepe neque rerum magni laudantium accusantium
      dolorem numquam quasi.
    </p>
  </div>-->
</div>