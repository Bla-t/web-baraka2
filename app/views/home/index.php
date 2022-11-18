<!-- Banner Image  -->
<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');

if (!($conn)) {
  die($conn);
}
?>
<style>
  /*.banner-image {
    background-image: url('<?= BASEURL; ?>/img/homevideo.mp4');
    background-size: cover;
    filter: blur(8px);
      -webkit-filter: blur(8px);
  } */
  /*.tales {
    width: 50%;
  }

  .carousel-inner {
    width: 100%;
    max-height: 200px !important;
  }  
*/
  span .tex-primary {
    color: #23305A;
  }

  .display-3,
  .text-primary,
  .lead {
    text-shadow: 5px 5px 5px #000;
  }
</style>
<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?= BASEURL; ?>/app/img/homevideo.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-left align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3"><span class="text-primary">SOLUSI</span> TEPAT</h1>
        <h1 class="lead mb-0">HARGA BERSAHABAT</h1>
        <h1 class="lead mb-0">UNTUK BISNIS HEBAT</h1>
        <!-- <h1 class="display-3">Video Header</h1>
        <p class="lead mb-0">Using HTML5 Video and Bootstrap</p> -->
      </div>
    </div>
  </div>
  <!--<div class="container h-100 d-flex justify-content-left align-items-center">
    <div class="content text-left" style="margin-left: 12px;">
    </div>
  </div>-->
</header>
<!-- Main Content Area -->
<div class="container my-5 d-grid gap-5">
  <div class="content text-center">
    <h3 class="display-6" style="color:#23305A;">
      Cek Tarif & Cek Resi
    </h3>
  </div>
  <div class="row">
    <div class="col">
      <div class="ratio ratio-1x1">
        <iframe class="embed-responsive-item" src="https://tarif.bst-ekspres.com/extern.php"></iframe>
      </div>
    </div>
    <div class="col">
      <div class="utama">
        <div align="center">
          <table style=" text-align: center">
            <!--//////////////////////////REMAKE/////////////////////////////-->

            <h2 style="text-align: center; color: #002F70 ;">Tracking Barang</h2>
            <div class="row">
              <div class="col-md-8 offset-md-2">
                <p style="text-align: center; color: #002F70;">Masukan nomor resi yang anda dapatkan</p>
              </div>
            </div>
            <div class="col">
              <input class="form-control" style="text-align: center" id="search" name="search" type="text" onkeyup="this.value = this.value.toUpperCase()">
            </div>
            <tr>
              <td>
                <br>
                <div class="row">
                  <div class="col" style="text-align: center">
                    <button type="submit" id="cek_resi" class="btn btn-primary btn-mainpage">Cek Resi</button>
                  </div>
                  <div class="col-12" style="text-align: center;">
                    &nbsp;
                  </div>

                  <div class="col-12" id="show" align="center">

                  </div>
                </div>


                <!--////////////////////////////////////////////////////-->



                <!-- <a  name="submit" type="submit"><button style="background-color:#006699;" title="SEARCH" href="" Onclick=" document.cari.submit(); return false;">SEARCH</button></a> -->
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="content text-center">
    <h3 class="display-6" style="color:#23305A;">
      KEUNGGULAN JASA KAMI
    </h3>
  </div>
  <div class="row">
    <div class="col">
      <div class="p-5">
        <div class="content text-center">
          <img src="<?= BASEURL; ?>/app/img/proffs.png" alt="jam" srcset="" width="62%"><br><br>
          <h3 style="color:#23305A;">
            PROFESIONAL
          </h3>
        </div><br>
        <p class="content text-center">
          Dengan komitmen profesional dengan pengalaman mengelola transportasi angkutan darat
        </p>
      </div>
    </div>
    <div class="col">
      <div class="p-5">
        <div class="content text-center">
          <img src="<?= BASEURL; ?>/app/img/JAM.png" alt="jam" srcset="" width="35%">
          <br><br>
          <h3 style="color:#23305A;">
            TEPAT WAKTU
          </h3>
        </div><br>
        <p class="content text-center">
          Didukung peran manajemen yang handal dan profesional untuk menyajikan ketepatan waktu
        </p>
      </div>
    </div>
    <div class="col">
      <div class="p-5">
        <div class="content text-center">
          <img src="<?= BASEURL; ?>/app/img/cs.png" alt="jam" srcset="" width="33%"><br><br>
          <h3 style="color:#23305A;">
            PENGALAMAN
          </h3>
        </div><br>
        <p class="content text-center">
          Sumber Daya Manusia yang berpengalaman membuat PT. BARAKA SARANA TAMA berusaha selalu dapat menyajikan yang terbaik
        </p>
      </div>
    </div>

  </div>
  <div class="content text-center">
    <h3 class="display-6" style="color:#23305A;">
      TENTANG KAMI
    </h3>
  </div><br>
  <div class="row">
    <div class="col-md-6">
      Pertumbuhan ekonomi Indonesia yang diikuti dengan pertumbuhan sektor industri di seluruh wilayah Indonesia, adalah suatu peluang besar bagi setiap perusahaan yang bergerak di bidang jasa tranportasi untuk berkiprah di sektor produk-produk hasil industri agar segera dapat dinikmati oleh masyarakat konsumen pada umumnya. <br>

      Dengan komitmen profesional para pemegang saham yang telah berpengalaman mengelola transportasi angkutan darat yang sebelumnya telah berkiprah dalam jasa transportasi angkutan darat bersama PT. BARAKA SARANA TAMA diwilayah DKI Jakarta, Jawa Barat, Jawa Tengah, Jawa Timur, NTB, Sumatra dan Kalimantan.
      <a class="btn btn-primary btn-sm" href="<?= BASEURL; ?>/tentang">Lanjut</a>
    </div>
    <div class="col-md-6">
      <img src="<?= BASEURL; ?>/app/img/minibus-bst.png" alt="mobil" width="90%">
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 p-5">
      <div class="content text-center">
        <h3 class="display-6" style="color:#23305A;">CABANG BARU</h3>
      </div><br>
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <?php
          for ($i = 0; $i < $data['jumlah']; $i++) {
            if ($i == 0) {
              $class =  'class="active"';
            } else if ($i > 0) {
              $class = '';
            }
          ?>
            <button type="button" data-bs-target="#carouselExampleDark" <?= $class; ?> data-bs-slide-to="<?= $i; ?>" aria-label="Slide <?= $i + 1; ?>"></button>
          <?php
          }
          ?>
        </div>
        <div class="carousel-inner">
          <?php
          $a = 0;
          foreach ($data['slide'] as $slide) {
            if ($a == 0) {
              $class =  'active';
            } else if ($a > 0) {
              $class = '';
            }
          ?>
            <div id="<?= $a++; ?>" class="carousel-item <?= $class; ?>" data-bs-interval="20000">
              <img src="<?= BASEURL . '/app/img/slideimg/' . $slide['gambr']  ?>" class="d-block w-100" alt="<?= $slide['gambr']; ?>">
            </div>
          <?php
          }
          ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="p-5 border">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum, iusto suscipit fugit aperiam ipsum similique aliquam fuga odio ducimus quam, qui voluptatibus sapiente veritatis enim magnam cumque nam cum natus?</p>
      </div>
    </div>
    <div class="col">
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi. df
        </p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).on("keypress", "#search", function(e) {
    /* e.preventDefault();*/

    var resi = $("#search").val();

    if (e.which === 13 && resi !== '') {
      sendData();
    } else if (e.which === 13 && resi == '') {
      document.getElementById("show").innerHTML = "Anda belum memasukkan Resi";
    }

  });

  $(document).on("click", "#cek_resi", function(e) {
    /* e.preventDefault();*/

    var resi = $("#search").val();

    if (resi !== '') {
      sendData();
    } else if (resi == '') {
      document.getElementById("show").innerHTML = "Anda belum memasukkan Resi";
    }

  });

  function sendData() {
    var xhr = new XMLHttpRequest();
    var url = "https://opsbasarta.com/tracking_api.php";

    const resi = document.querySelector("#search").value

    const data = "resi=" + resi

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
      const response = JSON.parse(this.responseText)
      const show = document.querySelector("#show")
      show.innerHTML = `
                <table><tr>
                <td></td><td>${response.status} </td>
                </tr>
                </table>`

    }

    xhr.send(data);
    const show = document.querySelector("#show")
    show.innerHTML = `Dalam Proses Pecarian`
    return false;
  }


  function track() {

    const resi = document.querySelector("#search").value

    $.ajax({
      url: "hasil_tracking.php",
      type: "post",
      data: {
        resi: resi
      },
      success: function(dataz) {

        $("#show").html(dataz);
      }
    });

  }

  function fetch2() {
    $.ajax({
      url: "admin/gettop",
      type: "post",
      success: function(dataz) {

        $("#fetch2").html(dataz);
      }
    });
  }

  function GET(ddl) {
    /*var para = document.getElementById('tarif-from').value;
    // var x1 = document.getElementsByClassName('smb');
    // var sut = document.getElementsByClassName('sumut');

    if (para == "PKB" || para == "MED") {

      $('.smb').css('display', 'none').prop('disabled', true);
      $('.sumut').css('display', 'block').prop('disabled', false);
    } else if (para == "PDG") {
      $('.sumut').css('display', 'none').prop('disabled', true);
      $('.smb').css('display', 'block').prop('disabled', false);

    }*/
    //else {

    //   }


    document.getElementById('tex1').value = ddl.options[ddl.selectedIndex].text;
  }

  function GOT(ddl) {
    document.getElementById('tex2').value = ddl.options[ddl.selectedIndex].text;
  }
</script>