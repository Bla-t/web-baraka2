<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
date_default_timezone_set('Asia/Jakarta');
// include "koneksi.php";
ini_set('allow_url_fopen', 1);
$url = 'http://api.pindah.barcode-bst.com/?area';
$isi = json_decode(file_get_contents($url), true);
$d = $isi['data'];
$date = date('M, Y');
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Tarif</title>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>-->
  <script type="text/javascript">
    // function hit(){ 

    //  var dari = document.getElementById("tarif-from").value;              
    //  var isi = document.getElementById("isi"); 
    //  var kober = document.getElementById("bet"); 
    //  var tipe =document.getElementById("set"); 
    // // var k3 = document.getElementById("vol");          


    //   if (dari == "BGR") {   

    //         //isi.style.display = "block";
    //         //kober.style.display = "none";
    //         //tipe.style.display = "block"; 
    //       // k3.style.display = "none";

    //   } 

    //   else {

    //       isi.style.display ="none";
    //       kober.style.display ="block";
    //       tipe.style.display ="none";

    //   }



    //  }
  </script>
</head>

<body>
  <div class="container-fluid d-flex">
    <div class="col-md-6 offset-md-3 mt-3">
      <h2 style="text-align: center">Cek Tarif</h2>
      <form method="GET" action="">
        <div class="form-group row">
          <div class="col-md-12">
            <select class="form-control selectpicker border border-2" id="tarif-from" name="dari" data-live-search="true" onchange="GET(this)" required>
              <option disabled selected value="">Dari</option>
              <?php
              foreach ($d as $data) :
                // echo $data['nama_daerah'] . '<br>';
                // $arda = mysqli_query($mysqli, "SELECT * FROM `daerah_tarif` ORDER BY `id`") or die(mysqli_error($mysqli));
                // while ($isy = mysqli_fetch_assoc($arda)) {
                switch ($data['nama_daerah']) {
                  case 'kalimantan barat':
                  case 'kalimantan selatan':
                  case 'kalimantan tengah':
                  case 'kalimantan timur':
                    break;
                  default:
              ?>
                    <optgroup class="headrs" style="color:  #39929d; font-weight:bold;" label="<?= $data['nama_daerah']; ?>">
                    <?php
                    break;
                }
                // $isda = mysqli_query($mysqli, "SELECT * FROM `cek_dari` WHERE `daerah` = '$data[nama_daerah]'") or die(mysqli_error($mysqli));
                $urldari = 'http://api.pindah.barcode-bst.com/?isi=' . $data['kode'];
                $isi_dari = json_decode(file_get_contents($urldari), true);
                $da = $isi_dari['data'];
                foreach ($da as $data2) :
                  // while ($isd = mysqli_fetch_assoc($isda)) {
                    ?>
                    <option class="dars" data-tokens="<?= $data2['nama']; ?>" value="<?= $data2['kode'] ?>"><?= $data2['nama'] ?></option>
                <?php
                endforeach;
                // }
                echo '</optgroup>';
              //}
              endforeach;
                ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <select class="form-control selectpicker border border-2" id="tarif-to" name="tujuan" onchange="GOT(this)" data-live-search="true" required>
              <option selected disabled value="">Tujuan :</option>
              <?php
              // $arjuan = mysqli_query($mysqli, "SELECT * FROM `daerah_tarif` ORDER BY `id`") or die(mysqli_error($conn));
              // while ($isy = mysqli_fetch_array($arjuan)) {
              foreach ($d as $data_tujuan) :
                switch ($data_tujuan['nama_daerah']) {
                  case 'tanah abang':
                    break;
                  case 'sumatra utara':
                    echo '<optgroup class="sumut" style="color:  #39929d; font-weight:bold;" label="' . $data_tujuan['nama_daerah']
                      . '">
                    <optgroup class="smb" style="color:  #39929d; font-weight:bold;" label="' . $data_tujuan['nama_daerah']
                      . '">';
                    break;
                  case 'riau':
                    echo '<optgroup class="sumut" style="color:  #39929d; font-weight:bold;" label="' . $data_tujuan['nama_daerah'] . '">';
                    break;
                  case 'sumatra barat':
                    echo '<optgroup class="smb" style="color:  #39929d; font-weight:bold; display:block;" label="' . $data_tujuan['nama_daerah'] . '">';
                    break;
                  default:
                    echo '<optgroup style="color:  #39929d; font-weight:bold;"label="' . $data_tujuan['nama_daerah'] . '">';
                    break;
                }
                // $isju = mysqli_query($mysqli, "SELECT * FROM `cek_tujuan` WHERE `daerah` = '$data[nama_daerah]'") or die(mysqli_error($mysqli));

                $urltujuan = 'http://api.pindah.barcode-bst.com/?tujuan=' . $data_tujuan['kode'];
                $isi_tujuan = json_decode(file_get_contents($urltujuan), true);
                $tujuan = $isi_tujuan['data'];
                // var_dump($tujuan);
                if (is_array($tujuan) || is_object($tujuan)) {
                  foreach ($tujuan as $data_tujuan) :
                    switch ($data['nama_daerah']) {
                      case 'sumatra utara':
                      case 'riau':
                        $clas = "sumut";
                        break;
                      case 'sumatra barat':
                        $clas = "smb";
                        break;
                      default:
                        $clas = "isi";
                        break;
                    }
                    // while ($isj = mysqli_fetch_array($isju)) {
                    // if ($data_tujuan['nama'] == "PADANGSIDEMPUAN") {
                    //   $clas = "smb";
                    // }
              ?>
                    <option class="<?= $clas ?>" value="<?= $data_tujuan['kode'] ?>"><?= $data_tujuan['nama'] ?></option>
              <?php
                  endforeach;
                }
                echo '</optgroup>';
              // }
              endforeach;
              ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <div class="input-group mb">
              <input type="text" class="form-control" name="brt" id="bet" placeholder="Berat (KG) :" style="display: block;">&emsp;&emsp;
              <!-- <input type="text" class="form-control" name="kol" id="isi" placeholder="  Koli" style="display: none;">&emsp;&emsp; -->
              <select class="form-control" id="set" name="pil" style="display: none;">
                <option disabled selected value=""> Jenis Barang :</option>
                <option value="spt"> Sparepart</option>
                <option value="stu"> Sepatu</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group row" id="vol" style="display: block;">
          <label for="tarif-to" class="col-md-12 offset-md-12 font-weight-bold">Total Volume :</label>
          <div class="col-md-12">
            <div class="input-group mb-3">
              <div class="col">
                <input type="number" step="any" name="vol" placeholder="volume" class="form-control form-control-sm" value="0">
                <input hidden id="tex1" name="da" value="">
                <input hidden id="tex2" name="tuj" value="">
              </div>
              <div class="col">
                <h4 class="font-weight-bold">( m³ )</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col" style="text-align: center">
            <button type="submit" class="btn btn-warning btn-mainpage btn-lg" id="tombol">Cek Harga</button>
          </div>
        </div>
      </form>
      <h5 class="font-weight-normal mt-5" style="font-size: 0.9rem;">
        <div class="table-responsive">
          <?php
          include("inclutor.php");
          ?>
        </div>
      </h5>
    </div>
  </div>
  <script type="text/javascript">
    function GET(ddl) {
      var para = document.getElementById('tarif-from').value;
      // var x1 = document.getElementsByClassName('smb');
      // var sut = document.getElementsByClassName('sumut');

      //   if (para == "PKB" || para == "MED") {

      //     $('.smb').css('display', 'none').prop('disabled', true);
      //     $('.sumut').css('display', 'block').prop('disabled', false);
      //   } else if (para == "PDG") {
      //     $('.sumut').css('display', 'none').prop('disabled', true);
      //     $('.smb').css('display', 'block').prop('disabled', false);

      //   } else {

      //   }


      document.getElementById('tex1').value = ddl.options[ddl.selectedIndex].text;
    }

    function GOT(ddl) {
      document.getElementById('tex2').value = ddl.options[ddl.selectedIndex].text;
    }
  </script>
</body>

</html>