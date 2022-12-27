<!-- footer -->
<footer class="tm-black-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5 class="tm-copyright-text2" style="font-weight: bold;">
          INFO KONTAK :
        </h5>
        <p class="tm-copyright-content">
          Kontak Marketing:
          <br />
          <?= ' - ' . $isi['marketing']; ?>
          <br />
          <a class="foot-link" href="https://wa.me/<?= $isi['wa_marketing']; ?>" target="blank">
            <i class="fa-brands fa-whatsapp">
            </i>
            <?= $isi['wa_marketing']; ?>
          </a>
        </p>
        <p class="tm-copyright-content">
          Layanan paket dari Jakarta ke Daerah:
          <br />
          - <?= $isi['daerah']; ?>
          <br />
          <a href="https://wa.me/<?= $isi['wa_daerah']; ?>" target="blank" class="foot-link">
            <i class="fa-brands fa-whatsapp">
            </i>
            <?= $isi['wa_daerah']; ?>
          </a>
        </p>
        <p class="tm-copyright-content">
          Layanan paket dari daerah ke Jakarta:
          <br />
          - <?= $isi['jkt']; ?>
          <br />
          <a href="https://wa.me/<?= $isi['wa_jkt']; ?>" target="blank" class="foot-link">
            <i class="fa-brands fa-whatsapp">
            </i>
            <?= $isi['wa_jkt']; ?>
          </a>
        </p>
      </div>
      <div class="col-md-4">
        <h5 class="tm-copyright-text2" style="font-weight: bold;">
          ALAMAT :
        </h5>
        <p class="tm-copyright-content">
          Jl. Raya Setu Jl. Sejahtera No.21, RW.1, Setu, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13880
          <br />
          Telp: <?= $isi['tlp_pusat']; ?>
        </p>
      </div>
      <div class="col-md-4">
        <h5 class="tm-copyright-text2" style="font-weight: bold;">
          SOSIAL MEDIA :
        </h5>
        <div class="form-inline">
          <a class="tm-copyright-content" href="<?= $isisos['marketing']; ?>" target="blank">
            <i class="fa-brands fa-facebook-square" style="font-size: 1.8em;"></i>
          </a>
          <a class="tm-copyright-content" href="<?= $isisos['wa_marketing']; ?>" target="blank">
            <i class="fa-brands fa-instagram" style="font-size: 1.8em;"></i>
          </a>
          <a class="tm-copyright-content" href="<?= $isisos['daerah']; ?>" target="blank">
            <i class="fa-brands fa-twitter-square" style="font-size: 1.8em;"></i>
          </a>
          <a class="tm-copyright-content" href="mailto:<?= $isisos['wa_daerah']; ?>" target="blank">
            <i class="fa fa-facebook-official"></i>
            <i class="fa fa-envelope" style="font-size: 1.8em;"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <p class="tm-copyright-text">
      Copyright &copy; <?= date('Y'); ?> Baraka Sarana Tama. All rights reserved.
    </p>
  </div>
</footer>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="js/templatemo-script.js"></script>
<script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>
<script type="text/javascript">
  var nav = document.querySelector('nav')

  // window.addEventListener('scroll', function() {
  //   if (window.pageYOffset > 0) {
  //     nav.classList.add('bg-primary', 'shadow')
  //   } else {
  //     nav.classList.remove('bg-primary', 'shadow')
  //   }
  // })
  // map.addLayer(markers);

  $('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
  });
</script>
<!-- <div class="konten-samping">
  <a href="https://wa.me/+6281282908302" target="blank" class=" wangsaf">
    <img src="img/wangsaf.png" alt="wangsaf" width="85">
  </a>
</div> -->
</body>

</html>