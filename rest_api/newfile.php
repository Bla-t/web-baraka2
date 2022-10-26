<?php
// error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
// $filename = 'abc';
// $createfile = fopen('file/' . $filename . '.txt', 'x');
$log_directory = 'file';
$filename = 'file/' . $_GET['files'];
$fileopen = fopen($filename, 'r+');
if (isset($_GET['yes'])) {
  echo '<p>rubah sukses</p>';
} else if (isset($_GET['file'])) {
  echo '<p>tambah sukses</p>';
} else {
  echo '<p>errrr</p>';
}
$isifile = fread($fileopen, filesize($filename));
fclose($fileopen);
foreach (glob($log_directory . '/*.*') as $itsfile) {
  $file = substr($itsfile, 5);
?>
  <a href="newfile.php?files=<?= $file; ?>"><?= $file; ?></a>
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
    <button type="submit" name="submit">simpan</button>
    <input type="text" value="" name="newfile">
    <button type="submit" name="submit2">simpan text</button>
  </form>
</div>
<div>
  <p style="font-size: 1rem; font-family:roboto;"><?= $isifile; ?></p>
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
}
?>