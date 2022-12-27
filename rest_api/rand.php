<?php
$conn = mysqli_connect('localhost', 'root', '', 'tes');

if (!$conn) {
  die($conn);
}
// echo 'hallo</br>';
// $array = "1,2,3";
// // $arr = explode(',', $array);
// // $arr[] = ;
// $n = 5;
// for ($i = 0; $i < $n; $i++) {
//   $m = range(1, $i);
// }
// $final = count(array_intersect($m, $e));
// $result = array_sum(array_intersect($arr, $a));
// print_r($result);
// $result = array_intersect($f['n'], $e['m']);
// print_r($result);
// print_r($m);
$query  = mysqli_query($conn, "SELECT * FROM `job_desk` ORDER BY `id`") or die(mysqli_error($conn));
?>
<form action="" method="GET">
  <select name="jabatan" id="select">
    <?php
    while ($a = mysqli_fetch_array($query)) {
    ?>
      <option value="<?= $a['id']; ?>"><?= $a['jabatan'] . $a['id']; ?></option>
    <?php
    }
    ?>
  </select>
  <input type="text" name="input">
  <button type="submit" name="sub1">simpan</button>
  <button type="submit" name="sub2">array</button>
  <?php
  ?>
  <!-- <a href="rand.php?id=<?= $a['id']; ?>">coba</a> -->
</form>
<?php
if (isset($_GET['sub1'])) {
  $id = $_GET['jabatan'];
  var_dump($id);
  $value = $_GET['input'];
  $updet = mysqli_query($conn, "UPDATE `job_desk` SET `batasan` = '$value' WHERE `id` = '$id'") or die(mysqli_error($conn));
  if ($updet) {
    header("location:rand.php?update=" . $id);
  }
}
if (isset($_GET['sub2'])) {
  $id = $_GET['jabatan'];
  $arr1 = mysqli_query($conn, "SELECT * FROM `job_desk` WHERE `id` = '$id'");

  $arr2 = mysqli_fetch_assoc($arr1);
  $array = explode(',', $arr2['batasan']);
?>
  <p>
    <?php
    foreach ($array as $key) {
      echo $key . '</br>';
    }
    // echo '</br>';
    // print_r($array[4]);
    ?>
  </p>
<?php

}


#select multiple thats not allowed
// SELECT * FROM `job_desk` WHERE `jabatan` NOT LIKE 'staff armada' AND `jabatan` NOT LIKE 'staff checker' AND `jabatan` NOT LIKE 'kepala kasir'
?>