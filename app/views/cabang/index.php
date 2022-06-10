<?php
$dbh = mysqli_connect('localhost', 'root', '', 'tes');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

?>
<!-- Banner Image  -->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
  <div class="content text-center">
    <h1 class="text-dark">CABANG</h1>
  </div>
</div>

<!-- Main Content Area -->
<div class="container my-5 d-grid gap-5">
  <div class="p-5 border maping">
    <h4 class="font-weight-normal judulmap" style="text-align: center; color: #001c50;">
      Lokasi Baraka di Sekitar Anda
    </h4>
    <div id="mapin" class="maps">
      <script type="text/javascript">
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

        for (var i = 0; i < addressPoints.length; i++) {
          var a = addressPoints[i];
          var title = a[2];
          var marker = L.marker(new L.LatLng(a[0], a[1]), {
            title: title
          });
          marker.bindPopup(title);
          markers.addLayer(marker);
        }
        //map.addLayer(markers);
      </script>
    </div>
  </div>
  <div class="">
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            <p class="fw-bold">JADETABEK</p>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <?php
            $no = 1;
            $jdtabek = mysqli_query($dbh, "SELECT * FROM `cabang` WHERE `kowil` = 'JDTK'") or die(mysqli_error($dbh));
            ?>
            <div class="table-responsive" style="height: 400px;">
              <table class="table table-hover table-responsive">
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
                <tbody>
                  <?php
                  while ($isicabang = mysqli_fetch_assoc($jdtabek)) {
                  ?>
                    <tr>
                      <td><?= $no++; ?>.</td>
                      <td><?= $isicabang['nama_cabang']; ?></td>
                      <td><?= $isicabang['alamat']; ?></td>
                      <td><?= $isicabang['no_tlp']; ?></td>
                      <?php
                      if (empty($isicabang['recieve'])) {
                        $isirec = "fas fa-times";
                      } else {
                        $isirec = "fas fa-check";
                      }
                      if (empty($isicabang['delivere'])) {
                        $isidel = "fas fa-times";
                      } else {
                        $isidel = "fas fa-check";
                      }
                      ?>
                      <td><i class="<?= $isirec; ?>"></i></td>
                      <td><i class="<?= $isidel; ?>"></i></td>
                      <td>
                        <a href="<?= $isicabang['map']; ?>" target="blank">
                          <i class="fas fa-earth-asia" disabled></i>
                        </a>
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
      <?php
      $n = 1;
      $jbr = mysqli_query($dbh, "SELECT * FROM `cabang` WHERE `kowil` = 'JBR'") or die(mysqli_error($dbh));
      ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <p class="fw-bold"> JAWA BARAT</p>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="table-responsive" style="height: 400px;">
              <table class="table table-hover table-responsive">
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
                <tbody>
                  <?php
                  while ($isijbr = mysqli_fetch_assoc($jbr)) {
                  ?>
                    <tr>
                      <td><?= $n++; ?>.</td>
                      <td><?= $isijbr['nama_cabang']; ?></td>
                      <td><?= $isijbr['alamat']; ?></td>
                      <td><?= $isijbr['no_tlp']; ?></td>
                      <?php
                      if (empty($isijbr['recieve'])) {
                        $isirec = "fas fa-times";
                      } else {
                        $isirec = "fas fa-check";
                      }
                      if (empty($isijbr['delivere'])) {
                        $isidel = "fas fa-times";
                      } else {
                        $isidel = "fas fa-check";
                      }
                      ?>
                      <td><i class="<?= $isirec; ?>"></i></td>
                      <td><i class="<?= $isidel; ?>"></i></td>
                      <td>
                        <a href="<?= $isijbr['map']; ?>" target="blank">
                          <i class="fas fa-earth-asia" disabled></i>
                        </a>
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
      <?php
      $jtm = mysqli_query($dbh, "SELECT * FROM `cabang` WHERE `kowil` = 'JTM'") or die(mysqli_error($dbh));
      ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <P class="fw-bold"> JAWA TIMUR</P>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">

          </div>
        </div>
      </div>
      <?php
      $bli = mysqli_query($dbh, "SELECT * FROM `cabang` WHERE `kowil` = 'BALI'") or die(mysqli_error($dbh));
      ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="bali">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsebali" aria-expanded="false" aria-controls="collapseFour">
            <P class="fw-bold"> BALI </P>
          </button>
        </h2>
        <div id="collapsebali" class="accordion-collapse collapse" aria-labelledby="bali" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <?php
      $smt = mysqli_query($dbh, "SELECT * FROM `cabang` WHERE `kowil` = 'SMT'") or die(mysqli_error($dbh));
      ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="sumtra">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesmt" aria-expanded="false" aria-controls="collapseFour">
            <P class="fw-bold"> SUMATRA </P>
          </button>
        </h2>
        <div id="collapsesmt" class="accordion-collapse collapse" aria-labelledby="sumatra" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <?php
      $klm = mysqli_query($dbh, "SELECT * FROM `cabang` WHERE `kowil` = 'KLM'") or die(mysqli_error($dbh));
      ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="kmt">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsekmt" aria-expanded="false" aria-controls="collapseFour">
            <P class="fw-bold"> KALIMANTAN </P>
          </button>
        </h2>
        <div id="collapsekmt" class="accordion-collapse collapse" aria-labelledby="kmt" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <?php
      $ntb = mysqli_query($dbh, "SELECT * FROM `cabang` WHERE `kowil` = 'KLM'") or die(mysqli_error($dbh));
      ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="ntb">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsentb" aria-expanded="false" aria-controls="collapseFour">
            <P class="fw-bold"> MATARAM </P>
          </button>
        </h2>
        <div id="collapsentb" class="accordion-collapse collapse" aria-labelledby="ntb" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-5 border">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
      natus iusto fugit id saepe neque rerum magni laudantium accusantium
      dolorem numquam quasi.
    </p>
  </div>
  <div class="p-5 border">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
      natus iusto fugit id saepe neque rerum magni laudantium accusantium
      dolorem numquam quasi.
    </p>
  </div>
  <div class="p-5 border">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
      natus iusto fugit id saepe neque rerum magni laudantium accusantium
      dolorem numquam quasi. df
    </p>
  </div>
</div>