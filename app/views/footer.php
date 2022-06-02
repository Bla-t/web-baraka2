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
          - 0812 8289 8392
          <br />
          <a class="foot-link" href="https://wa.me/+6281313724646" target="blank">
            <i class="fa fa-whatsapp">
              &nbsp;081313724646
            </i>
          </a>
        </p>
        <p class="tm-copyright-content">
          Layanan paket dari Jakarta ke Daerah:
          <br />
          - 0812 8290 8302
          <br />
          <a href="https://wa.me/+6281313724646" target="blank" class="foot-link">
            <i class="fa fa-whatsapp">
              081313724646
            </i>
          </a>
        </p>
        <p class="tm-copyright-content">
          Layanan paket dari daerah ke Jakarta:
          <br />
          - 0812 8044 3372
          <br />
          <a href="https://wa.me/+6281282908302" target="blank" class="foot-link">
            <i class="fa fa-whatsapp">
              0812 8290 8302
            </i>
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
          Telp: 021 – 84903838
        </p>
      </div>
      <div class="col-md-4">
        <h5 class="tm-copyright-text2" style="font-weight: bold;">
          SOSIAL MEDIA :
        </h5>
        <div class="form-inline">
          <a class="tm-copyright-content" href="https://www.facebook.com/profile.php?id=100005558985070" target="blank">
            <i class="fa fa-facebook-official" style="font-size: 1.8em;"></i>
          </a>
          <a class="tm-copyright-content" href="#">
            <i class="fa fa-instagram" style="font-size: 1.8em;"></i>
          </a>
          <a class="tm-copyright-content" href="https://twitter.com/basartacoid" target="blank">
            <i class="fa fa-twitter" style="font-size: 1.8em;"></i>
          </a>
          <a class="tm-copyright-content" href="mailto:cs@basarta.co.id" target="blank">
            <!-- <i class="fa fa-facebook-official" ></i> -->
            <i class="fa fa-envelope" style="font-size: 1.8em;"></i>
          </a>
          <!-- <a class="tm-copyright-content" href="https://wa.me/+3197005033513" target="blank"> -->
          <!-- <i class="fa fa-whatsapp" style="font-size: 36px;"></i> -->
          <!-- </a> -->
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
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/templatemo-script.js"></script>
<script type="text/javascript">
  var nav = document.querySelector('nav')

  window.addEventListener('scroll', function() {
    if (window.pageYOffset > 100) {
      nav.classList.add('bg-primary', 'shadow')
    } else {
      nav.classList.remove('bg-primary', 'shadow')
    }
  })

  //map.addLayer(markers);
</script>
</body>

</html>