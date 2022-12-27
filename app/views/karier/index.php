<?php
$job = $data['job'];
// $log_directory = 'app/assets/';
// $filename = $log_directory . 'karir.txt';
// $fileopen = fopen($filename, 'r');
// print_r($fileopen);
// $isifile = fread($fileopen, filesize($filename));
// fclose($fileopen);
// foreach ($data['job'] as $tai) {
//   echo "<p>$tai[id]</p>";
// };
?>
<style>
  .banner-image {
    background-color: darkolivegreen;
  }

  .secti {
    padding-top: 3rem;
  }
</style>
<!-- <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
  <div class="content text-center">
    <h1 class="text-dark">Lowongan Pekerjaan</h1>
  </div>
</div> -->
<div class="container my-5 d-grid gap-5 secti">
  <div class="row">
    <div class="col" style="background-color: #FFCD91;">
      <img src="<?= BASEURL; ?>/app/img/logs.png" alt="low1" class="img d-flex justify-content-center">
      <div class="d-flex justify-content-center mb-2">
        <h1><?= $job['jabatan']; ?></h1>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <a href="<?= BASEURL; ?>/karir" class="btn btn-sm btn-info">bek</a>
  </div>
  <div class="row">
    <div class="col">
      <h3><?= $job['jabatan']; ?></h3>
      <?= var_dump($job); ?>
    </div>
    <div class="col">
      <h3 class="heading">Lamar Pekerjaan</h3>
      <form action="mailto:dwivikiqp@gmail.com?subject=Lamaran Kerja : Bagian <?= $job['jabatan']; ?>" method="post" enctype="text/plain">
        <div class=" form-group">
          <label for="pesan">
            Pesan Lamaran
          </label>
          <textarea heigh=50 class="form-control" id="pesan" name="pesan" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3"> kirim</button>
      </form>
    </div>

    <!-- <p>
      <strong>Lorem ipsum dolor sit</strong>,<br> amet consectetur adipisicing elit. Accusantium inventore fuga ea animi. Corporis voluptatem totam beatae eum recusandae perferendis quam, illum labore, quo sint odio quidem ipsa? Qui, nostrum?,<br><br>
      <strong>Lorem ipsum dolor sit</strong>,<br> amet consectetur adipisicing elit. Accusantium inventore fuga ea animi. Corporis voluptatem totam beatae eum recusandae perferendis quam, illum labore, quo sint odio quidem ipsa? Qui, nostrum?,<br><br>
      <strong>Lorem ipsum dolor sit</strong>,<br> amet consectetur adipisicing elit. Accusantium inventore fuga ea animi. Corporis voluptatem totam beatae eum recusandae perferendis quam, illum labore, quo sint odio quidem ipsa? Qui, nostrum?,<br><br>
      <strong>Lorem ipsum dolor sit</strong>,<br> amet consectetur adipisicing elit. Accusantium inventore fuga ea animi. Corporis voluptatem totam beatae eum recusandae perferendis quam, illum labore, quo sint odio quidem ipsa? Qui, nostrum?,<br><br>
    </p> -->
  </div>
  <div class="row">

  </div>
  <script>
    var nav = document.querySelector('nav')
    nav.classList.add('bg-primary', 'shadow')
  </script>
</div>