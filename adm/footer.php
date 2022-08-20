<!-- footer -->
<?php

// $isi = $this->model('footer_model')->givekontak();
// $isisos = $this->model('footer_model')->givesosmed();
?>
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
        <div class="form-inline">
          <input type="text" name="" class="form-control form-control-sm" value="<?= $isi['marketing']; ?>"><br>
          <input type="text" name="" class="form-control form-control-sm mb-2" value="<?= $isi['wa_marketing']; ?>">
          <button class="btn btn-secondary btn-sm">simpan</button>
        </div>
        <br />
        </p>
        <p class="tm-copyright-content">
          Layanan paket dari Jakarta ke Daerah:
          <br />
        <div class="form-inline">
          <input type="text" name="" class="form-control form-control-sm" value="<?= $isi['daerah']; ?>">
          <br>
          <input type="text" name="" class="form-control form-control-sm mb-2" value="<?= $isi['wa_daerah']; ?>">
          <button class="btn btn-secondary btn-sm">simpan</button>
        </div>
        <br />
        </p>
        <p class="tm-copyright-content">
          Layanan paket dari daerah ke Jakarta:
          <br />
          <input type="text" name="" class="form-control form-control-sm" value="<?= $isi['jkt']; ?>">
          <br />
          <input type="text" name="" class="form-control form-control-sm mb-2" value="<?= $isi['wa_jkt']; ?>">
          <button class="btn btn-secondary btn-sm">simpan</button>
        </p>
      </div>
      <div class="col-md-4">
        <h5 class="tm-copyright-text2" style="font-weight: bold;">
          ALAMAT :
        </h5>
        <p class="tm-copyright-content">
          <textarea name="" class="form-control" rows="5">
            Jl. Raya Setu Jl. Sejahtera No.21, RW.1, Setu, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13880
          </textarea>
          <br />
          <input type="text" class="form-control form-control-sm mb-2" value="<?= $isi['tlp_pusat']; ?>">
          <button class="btn btn-secondary btn-sm">simpan</button>
        </p>
      </div>
      <div class="col-md-4">
        <h5 class="tm-copyright-text2" style="font-weight: bold;">
          SOSIAL MEDIA :
        </h5>
        <div class="form-inline mb-2">
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
            <!-- <i class="fa fa-facebook-official" ></i> -->
            <i class="fa fa-envelope" style="font-size: 1.8em;"></i>
          </a>
          <!-- <a class="tm-copyright-content" href="https://wa.me/+3197005033513" target="blank"> -->
          <!-- <i class="fa fa-whatsapp" style="font-size: 36px;"></i> -->
          <!-- </a> -->
        </div>
        <div class="row">
          <div class="form-group">
            <label class="form-label text-white" for="facebook">facebook :</label>
            <input type="text" class="form-control form-control-sm" id="facebook" value="<?= $isisos['marketing']; ?>">
            <label class="form-label text-white" for="facebook">instagram :</label>
            <input type="text" class="form-control form-control-sm" id="facebook" value="<?= $isisos['wa_marketing']; ?>">
            <label class="form-label text-white" for="facebook">twitter :</label>
            <input type="text" class="form-control form-control-sm" id="facebook" value="<?= $isisos['daerah']; ?>">
            <label class="form-label text-white" for="facebook">mail :</label>
            <input type="text" class="form-control form-control-sm" id="facebook" value="<?= $isisos['wa_daerah']; ?>">
          </div>
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
<script type="text/javascript" src="<?= BASEURL; ?>/js/templatemo-script.js"></script>
<script src="<?= $BASEURL; ?> /js/cabang.js"></script>
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
  $(document).ready(function() {
    let ass = document.getElementById("jml");
    if (ass) {
      let aas = ass.value;
      for (let i = 0; i < aas; i++) {
        $("#srch_" + i).on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#isi_" + i + " tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      }
    }
  });
</script>
<div class="konten-samping">
  <a href="https://wa.me/+6281282908302" target="blank" class=" wangsaf">
    <img src="img/wangsaf.png" alt="wangsaf" width="85">
  </a>
</div>
</body>

</html>