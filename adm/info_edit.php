<?php
include 'header.php';
?>
<style>
  .edit {
    color: black;
  }

  .edits {
    color: black;
  }

  .body {
    margin-top: 5rem;
  }

  .jumbotron {
    margin-top: 100px;
    text-align: center;
  }

  /* .banner-image {
    background-color: darkslategrey;
  } */
</style>
<!-- <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
  <div class="content text-center">
    <h1></h1>
    <h1></h1>
  </div>
</div> -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">SETTING DATA FOOTER</h1>
    <p class="lead">.</p>
  </div>
</div>
<div class="container my-1 d-grid">
  <div class="container body">
    <div class="row">
      <div class="col-md-4">
        <h5 class="tm-copyright-text2 edit" style="font-weight: bold;">
          INFO KONTAK :
        </h5>
        <p class="tm-copyright-content edit">
          Kontak Marketing:
          <br />
        <div class="form-inline">
          <form action="confg/crud.php?mode=marketing" method="POST">
            <input type="text" name="no_marketing" class="form-control form-control-sm" value="<?= $isi['marketing']; ?>"><br>
            <input type="text" name="wa_marketing" class="form-control form-control-sm mb-2" value="<?= $isi['wa_marketing']; ?>">
            <button type="submit" class="btn btn-primary btn-sm">simpan</button>
          </form>
        </div>
        <br />
        </p>
        <p class="tm-copyright-content edit">
          Layanan paket dari Jakarta ke Daerah:
          <br />
        <div class="form-inline">
          <form action="confg/crud.php?mode=jktdaerah" method="POST">
            <input type="text" name="no_jktdrh" class="form-control form-control-sm" value="<?= $isi['daerah']; ?>">
            <br>
            <input type="text" name="wa_jktdrh" class="form-control form-control-sm mb-2" value="<?= $isi['wa_daerah']; ?>">
            <button class="btn btn-primary btn-sm" type="submit">simpan</button>
          </form>
        </div>
        <br />
        </p>
        <p class="tm-copyright-content edit">
          Layanan paket dari daerah ke Jakarta:
          <br />
        <div class="form-inline">
          <form action="confg/crud.php?mode=daerahjkt" method="POST">
            <input type="text" name="no_drhjkt" class="form-control form-control-sm" value="<?= $isi['jkt']; ?>">
            <br />
            <input type="text" name="wa_drhjkt" class="form-control form-control-sm mb-2" value="<?= $isi['wa_jkt']; ?>">
            <button type="submit" class="btn btn-primary btn-sm mb-3">simpan</button>
          </form>
        </div>
        </p>
      </div>
      <div class="col-md-4">
        <h5 class="tm-copyright-text2 edit" style="font-weight: bold;">
          ALAMAT :
        </h5>
        <p class="tm-copyright-content edit">
          Jl. Raya Setu Jl. Sejahtera No.21, RW.1, Setu, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13880
          <br />
        <form action="confg/crud.php?mode=pst" method="POST">
          <input type="text" name="pst" class="form-control form-control-sm mb-2" value="<?= $isi['tlp_pusat']; ?>">
          <button type="submit" class="btn btn-primary btn-sm ">simpan</button>
        </form>
        </p>
      </div>
      <div class="col-md-4">
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
            <!-- <i class="fa fa-facebook-official" ></i> -->
            <i class="fa fa-envelope" style="font-size: 1.8em;"></i>
          </a>
          <!-- <a class="tm-copyright-content" href="https://wa.me/+3197005033513" target="blank"> -->
          <!-- <i class="fa fa-whatsapp" style="font-size: 36px;"></i> -->
          <!-- </a> -->
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
      </div>
    </div>
  </div>
</div>


<?php
include 'footer.php';
?>