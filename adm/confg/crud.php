<?php
include 'config.php';
#kirim data ke database ..
if (isset($_GET['mode'])) {
  #buat parameter data apa yang akan di update
  switch ($_GET['mode']) {
      #parameter untuk update data, nomor marketing
    case 'marketing':
      $no = $_POST['no_marketing'];
      $wa = $_POST['wa_marketing'];
      mysqli_query($conn, " UPDATE `kontak` SET `marketing` = '$no', `wa_marketing` = '$wa'  WHERE `id` = '1'") or die(mysqli_error($conn));
      header('location:../info_edit.php?cek=marketing');
      break;
      #parameter untuk update data, nomor jkt -> daerah
    case 'jktdaerah':
      $no = $_POST['no_jktdrh'];
      $wa = $_POST['wa_jktdrh'];
      mysqli_query($conn, " UPDATE `kontak` SET `daerah` = '$no', `wa_daerah` = '$wa'  WHERE `id` = '1'") or die(mysqli_error($conn));
      header('location:../info_edit.php?cek=jktdrh');
      break;
      #parameter untuk update data, nomor daerah -> jkt
    case 'daerahjkt':
      $no = $_POST['no_drhjkt'];
      $wa = $_POST['wa_drhjkt'];
      mysqli_query($conn, " UPDATE `kontak` SET `jkt` = '$no', `wa_jkt` = '$wa'  WHERE `id` = '1'") or die(mysqli_error($conn));
      header('location:../info_edit.php?cek=drhjkt');
      break;
    case 'pst':
      $wa = $_POST['pst'];
      mysqli_query($conn, " UPDATE `kontak` SET `tlp_pusat` = '$wa' WHERE `id` = '1'") or die(mysqli_error($conn));
      header('location:../info_edit.php?cek=pst');
      break;
    case 'medsos':
      $fb = $_POST['fb'];
      $ig = $_POST['ig'];
      $twtr = $_POST['twtr'];
      $mail = $_POST['email'];
      mysqli_query($conn, " UPDATE `kontak` SET `marketing` = '$fb',`wa_marketing` = '$ig',`daerah` = '$twtr',`wa_daerah` = '$mail' WHERE `id` = '2'") or die(mysqli_error($conn));
      header('location:../info_edit.php?cek=medsos');
      break;
    default:
      echo var_dump($_get['mode']) . ' /=/ error di parameter';
      break;
  }
}
