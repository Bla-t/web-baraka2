<style>
  * {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
</style>

<body>

  <?php
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  // $filename = 'abc';
  // $createfile = fopen('file/' . $filename . '.txt', 'x');
  $log_directory = 'files/';
  $filename = $log_directory . $_GET['files'];
  $fileopen = fopen($filename, 'r+');
  if (isset($_GET['yes'])) {
    echo '<p>rubah sukses</p>';
  } else if (isset($_GET['file'])) {
    echo '<p>tambah sukses</p>';
  } else if (isset($_GET['deleted'])) {
    echo '<p>hapus sukses</p>';
  } /*else {
    echo '<p>errrr</p>';
  }*/
  $isifile = fread($fileopen, filesize($filename));
  fclose($fileopen);
  var_dump($fileopen);
  echo "</br>";
  foreach (glob($log_directory . '/*.*') as $itsfile) {
    $file = substr($itsfile, 7);

    $text = "SEMARANG|BOYOLALI|MADIUN";
    $array = $text;
  ?>
    <a href="newfile.php?files=<?= $file; ?>"><?= $file; ?></a> &emsp; <a href="newfile.php?delete&file=<?= $file; ?>" class="del">delete</a>
    <br>
  <?php
  } ?>
  <br>
  <br>
  <br>
  <div>
    <form action="" method="POST">
      <input type="hidden" value="<?= $_GET['files']; ?>" name="fi">
      <textarea name="content" id="cont" cols="100" rows="20"><?= $isifile; ?></textarea>
      <button type="submit" name="submit" class="btn">simpan</button>
    </form>
    <form action="" method="POST">
      <input type="text" value="" name="newfile" required>
      <button class="btn" type="submit" name="submit2">simpan text</button>
    </form>
  </div>
  <div>
    <p style="font-size: 1rem; font-family:roboto, sans-serif;"><?= $isifile; ?></p>
  </div>

  <?php
  if (isset($_POST['submit'])) {
    $file_name = fopen($filename, 'w');
    $content = $_POST['content'];
    fwrite($file_name, $content);
    header('location:newfile.php?yes&&files=' . $_POST['fi']);
  } else if (isset($_POST['submit2'])) {
    $filename = $_POST['newfile'] . '.txt';
    $createfile = fopen('file/' . $filename, 'x+');
    header('location:newfile.php?file&&files=' . $filename);
  } else if (isset($_GET['delete'])) {
    unlink('file/' . $_GET['file']);
    header('location:newfile.php?deleted&&files=deleted');
  }
  // header('location:newfile.php?file&&files=errr');
  ?>
</body>
<script src="jquery-3.6.1.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
<script>
  $(".del").on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');
    swal.fire({
      title: 'anda Yakin.?',
      text: 'Data Akan di Hapus',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: 'red',
      cancelButtoncolor: 'green',
      confirmButtonText: 'Dellete.?'
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    })
  })
</script>