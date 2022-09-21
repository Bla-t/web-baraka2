<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
// $filename = 'abc';
// $createfile = fopen('file/' . $filename . '.txt', 'x');
$filename = 'file/def.txt';
$fileopen = fopen($filename, 'r+');
if (isset($_GET['yes'])) {
  echo '<p>rubah sukses</p>';
} else if (isset($_GET['file'])) {
  echo '<p>tambah sukses</p>';
} else {
  echo '<p>errrr</p>';
}
$isifile = fread($fileopen, filesize($filename));
fclose($filename);
foreach (glob($log_directory . 'file/*.*') as $file) {
?>
  <a href="<?= $file; ?>"><?= substr($file, 5); ?></a><br>
<?php
} ?>
<br>
<div>
  <form action="" method="POST">
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
  header('location:newfile.php?yes');
} else if (isset($_POST['submit2'])) {
  $filename = $_POST['newfile'];
  $createfile = fopen('file/' . $filename . '.txt', 'x+');
  header('location:newfile.php?file');
}
?>