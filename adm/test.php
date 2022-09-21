<?php
include 'confg/config.php';
$val_map = mysqli_query($conn, "SELECT * FROM `latlong`") or die(mysqli_error($conn));
$mapvalue = mysqli_fetch_all($val_map);
?>
<script>
  var testing = <?= json_encode($mapvalue, true) ?>;
  var test = testing[0];
  console.log(test);
</script>