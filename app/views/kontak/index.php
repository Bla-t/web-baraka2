<style>
  .banner-image {
    background-image: url('<?= BASEURL; ?>/app/img/kontak.jpg');
    /* background-color: coral; */
    background-size: cover;
    /*filter: blur(8px);
    -webkit-filter: blur(8px);*/
  }

  h1 {
    text-shadow: 3px 3px 6px #000000;
  }
</style>
<?php
$kontak = $this->model('kontak_model')->givekontak();
$cs = $this->model('kontak_model')->givesosmed();
?>

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
  <div class="content text-center">
    <h1>Pelayanan yang RESPONSIF</h1>
  </div>
</div>
<div class="container my-5 d-grid gap-5">
  <div class="content text-center">
    <h3 class="display-6 fw-bold" style="color:#23305A;">
      HUBUNGI KAMI
    </h3>
    <h3 class="display-6" style="color:#23305A;">
      Kami Akan Senang Mendengar Dan Membantu Anda
    </h3>
  </div>
  <div class="row">
    <div class="col">
      <div class="p-5">
        <div class="content text-center">
          <i class="bi bi-geo-alt-fill" style="font-size:75px; color:#23305A"></i>
          <h3 style="color:#23305A;" class="fw-bold">
            Alamat Kami
          </h3>
        </div><br>
        <p class="content text-center">
          Jl. Raya Setu Jl. Sejahtera No.21, RW.1, Setu, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13880.</p>
      </div>
    </div>
    <div class="col">
      <div class="p-5">
        <div class="content text-center">
          <i class="bi bi-telephone-fill" style="font-size:75px; color:#23305A"></i>
          <h3 style="color:#23305A;" class="fw-bold">
            Telepon
          </h3>
        </div><br>
        <p class="content text-center">
          Telepon - (<?= $kontak['tlp_pusat']; ?>) <br>
          WhatsApp - (<?= $kontak['daerah']; ?>)
        </p>
      </div>
    </div>
    <div class="col">
      <div class="p-5">
        <div class="content text-center">
          <i class="bi bi-envelope" style="font-size:75px; color:#23305A"></i>
          <h3 style="color:#23305A;" class="fw-bold">
            E-mail Kami
          </h3>
        </div><br>
        <p class="content text-center">
          <a href="mailto:<?= $cs['wa_daerah']; ?>" style="text-decoration:none;"><?= $cs['wa_daerah']; ?></a>
          <a href="mailto:<?= $cs['jkt']; ?>" style="text-decoration:none;"><?= $cs['jkt']; ?></a>
        </p>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1528.9702627101553!2d106.91361103658639!3d-6.308563649409313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62db0969ee82f164!2sKantor%20Pusat%20Baraka%20Sarana%20Tama!5e0!3m2!1sen!2sid!4v1660532490036!5m2!1sen!2sid" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>