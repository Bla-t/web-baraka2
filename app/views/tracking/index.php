<!-- Banner Image  -->
<style>
  .banner-image {
    background-image: url('<?= BASEURL; ?>/img/background2.jpeg');
    background-size: cover;
    /*filter: blur(8px);
      -webkit-filter: blur(8px);*/
  }

  h1 {
    text-shadow: 3px 3px 6px #000000;
  }
</style>
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
  <div class="content text-center">
    <h1>CARI DIMANA</h1>
    <h1>PAKETMU BERADA</h1>
  </div>
</div>

<!-- Main Content Area -->
<div class="container my-5 d-grid gap-5">
  <div class="p-5 border">

    <!--<div class="ratio ratio-1x1">
      <iframe class="embed-responsive-item" src="https://pindah.barcode-bst.com/tracking/tracking.php"></iframe>
      <!-- <div>1x1</div>
    </div>-->
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
          <div class="col-md-6">
            <input class="form-control" style="text-align: center" id="search" name="search" type="text" onkeyup="this.value = this.value.toUpperCase()">
          </div>
          <tr>
            <td>
              <br>
              <div class="row">
                <div class="col-12 " style="text-align: center">
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
    <?php
    // include ('kaki.php');
    ?>
    </body>
    <script>
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
    </script>
  </div>
  <!--<div class="row">
    <div class="col-md-6">
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi.
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi.
        </p>
      </div>
    </div>
  </div>-->
</div>