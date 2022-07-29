<!-- Banner Image  -->
<style>
  /*.banner-image {
    background-image: url('<?= BASEURL; ?>/img/homevideo.mp4');
    background-size: cover;
    filter: blur(8px);
      -webkit-filter: blur(8px);
  } */
  span .tex-primary {
    color: #23305A;
  }
</style>
<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?= BASEURL; ?>/img/homevideo.mp4" type="video/mp4">
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
    <h2 class="display-4" style="color:#23305A;">Cabang Baru</h2>
  </div>
  <div class="p-5 border">
    <br>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="<?= BASEURL; ?>/img/BST-cabanag-Pariaman-new.png" class="d-block w-100" alt="...">
          <!-- <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div> -->
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="<?= BASEURL; ?>/img/BST-cabanag-Wonosobo-new.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?= BASEURL; ?>/img/BST-cabanag-Brebes-new.png" class="d-block w-100" alt="...">
        </div>
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
  <div class="content text-center">
    <h2 class="display-5" style="color:#23305A;">
      Keunggulan Jasa Kami
    </h2>
  </div><br>
  <div class="row">
    <div class="col">
      <div class="p-5">
        <div class="content text-center">
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
    <h2 class="display-5" style="color:#23305A;">
      TENTANG KAMI
    </h2>
  </div><br>
  <div class="row">
    <div class="col-md-6">
      Pertumbuhan ekonomi Indonesia yang diikuti dengan pertumbuhan sektor industri di seluruh wilayah Indonesia, adalah suatu peluang besar bagi setiap perusahaan yang bergerak di bidang jasa tranportasi untuk berkiprah di sektor produk-produk hasil industri agar segera dapat dinikmati oleh masyarakat konsumen pada umumnya. <br>

      Dengan komitmen profesional para pemegang saham yang telah berpengalaman mengelola transportasi angkutan darat yang sebelumnya telah berkiprah dalam jasa transportasi angkutan darat bersama PT. BARAKA SARANA TAMA diwilayah DKI Jakarta, Jawa Barat, Jawa Tengah, Jawa Timur, NTB, Sumatra dan Kalimantan.
      <a class="btn btn-primary btn-sm" href="<?= BASEURL; ?>/tentang">Lanjut</a>
    </div>
    <div class="col-md-6">
      <img src="<?= BASEURL; ?>/img/minibus-bst.png" alt="mobil" width="90%">
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