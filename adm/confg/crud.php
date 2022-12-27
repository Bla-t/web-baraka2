<?php
include 'config.php';
#kirim data ke database ..
#TAMBAH...!!!
if (isset($_GET['tambah'])) {
  switch ($_GET['tambah']) {
    case 'tmbh_cbg':
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $tlp = $_POST['tlp'];
      if (empty($_POST['map'])) {
        $gmap = '-';
      } else {
        $gmap = $_POST['map'];
      }
      $lat = $_POST['latmap'];
      $long = $_POST['lonmap'];
      $wil = $_POST['kowil'];
      if (empty($_POST['terima'])) {
        $terima = 'n';
      } else {
        $terima = $_POST['terima'];
      }
      if (empty($_POST['kirim'])) {
        $kirim = 'n';
      } else {
        $kirim = $_POST['kirim'];
      }
      $query = mysqli_query($conn, "INSERT INTO `isi_cabang` (`nama_cabang`,`alamat`,`no_tlp`, `recieve`,`delivere`,`map`,`kowil`)VALUE('$nama','$alamat','$tlp','$terima','$kirim','$gmap','$wil')") or die(mysqli_error($conn));
      $latquery = mysqli_query($conn, "INSERT INTO `latlong` (`namcab`,`lat`,`long`,`ext`) VALUE('$nama','$lat','$long','$gmap')") or die(mysqli_error($conn));

      // header("location:../setcab.php?$terima&$terima");
      if ($query && $latquery) {
        header("location:../setcab.php?tambah=y");
      } else {
        header("location:../setcab.php?tambah=x");
      }
      break;
      #upload gambar ke server.!!
    case 'upload':
      #pctrs = pictures
      $tgl = date("Y-m-d");
      $ekstensi =  array('png', 'jpg', 'jpeg');
      $filename = $_FILES['pctrs']['name'];
      $ukuran = $_FILES['pctrs']['size'];
      $templt = $_FILES['pctrs']['tmp_name'];
      $ext = pathinfo($filename, PATHINFO_EXTENSION);
      $length = strlen($filename);
      if (!in_array($ext, $ekstensi)) {
        header("location:../sethome.php?alert=err&file=ekstensi");
      } elseif (strlen($filename) > 20) {
        header("location:../sethome.php?alert=err&file=huruf/karakter lebih dari 20");
      } else {
        if ($ukuran < 1044070) {
          $xx = $tgl . '_' . $filename;
          // move_uploaded_file($_FILES['pctrs']['tmp_name'], '../img/slideimg/' . $rand . '_' . $filename);
          move_uploaded_file($_FILES['pctrs']['tmp_name'], '../../app/img/slideimg/' . $tgl . '_' . $filename);
          mysqli_query($conn, "INSERT INTO `slider` VALUES(NULL,'$xx')");
          header("location:../sethome.php?alert=sukses&len=$length&file=Data");
        } else {
          header("location:../sethome.php?alert=err&file=sizeoverload");
        }
      }
      break;
    default:
      echo var_dump($_GET['tambah']) . ' /=/ error di parameter';
      break;
  }
}
#UPDATE..!!
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
      #edit link xternal media sosial
    case 'medsos':
      $fb = $_POST['fb'];
      $ig = $_POST['ig'];
      $twtr = $_POST['twtr'];
      $mail = $_POST['email'];
      mysqli_query($conn, " UPDATE `kontak` SET `marketing` = '$fb',`wa_marketing` = '$ig',`daerah` = '$twtr',`wa_daerah` = '$mail' WHERE `id` = '2'") or die(mysqli_error($conn));
      header('location:../info_edit.php?cek=medsos');
      break;
    case 'updt_cbg':
      $id = $_POST['id'];
      $nama = $_POST['updtnama'];
      $alamat = $_POST['updtalamat'];
      $tlp = $_POST['updt_tlp'];
      $gmap = $_POST['updtmap'];
      $lat = $_POST['updtlat'];
      $long = $_POST['updtlong'];
      $wil = $_POST['updtkowil'];
      if (empty($_POST['updt_terima'])) {
        $terima = 'n';
      } else {
        $terima = $_POST['updt_terima'];
      }
      if (empty($_POST['updt_kirim'])) {
        $kirim = 'n';
      } else {
        $kirim = $_POST['updt_kirim'];
      }
      $query = mysqli_query($conn, "UPDATE `isi_cabang` SET `nama_cabang`='$nama',`alamat`= '$alamat',`no_tlp`='$tlp',`recieve`='$terima',`delivere`='$kirim',`map`='$gmap',`kowil`= '$wil' WHERE `id` = '$id'") or die(mysqli_error($conn));
      $querylatlong = mysqli_query($conn, "UPDATE `latlong` SET `namcab`='$nama',`lat`='$lat',`long`='$long',`ext`='$gmap' WHERE `id` = '$id'") or die(mysqli_error($conn));
      // header("location:../setcab.php?updet=$id/$nama/$alamat/$tlp/$gmap/$lat/$long/$wil/$terima/$kirim");
      if ($query && $querylatlong) {
        header("location:../setcab.php?updet=y");
      } else {
        header("location:../setcab.php?updet=" . die(mysqli_error($conn)));
      }

      break;
    default:
      echo var_dump($_GET['mode']) . ' /=/ error di parameter';
      break;
  }
}
if (isset($_GET['hps'])) {
  #buat parameter data apa yang akan di update
  switch ($_GET['hps']) {
      #parameter untuk update data, nomor marketing
    case 'unlink':
      $id = $_GET['id'];
      $filename = $_GET['filename'];
      $file = '../../app/img/slideimg/' . $filename;
      unlink($file);
      mysqli_query($conn, "DELETE FROM `slider` WHERE `id` = $id");
      header("location:../sethome.php?alert=dell&file=$id&filename=$filename");
      break;
    case 'hps_cbg':
      $id = $_GET['id'];
      $namcab = $_GET['cab'];
      $hapus = mysqli_query($conn, "DELETE FROM `isi_cabang` WHERE `id` = '$id'") or die(mysqli_error($conn));
      $hapuslatlong = mysqli_query($conn, "DELETE FROM `latlong` WHERE `namcab` = '$namcab'") or die(mysqli_error($conn));
      // header("location:../setcab.php?hapus=y||$id||$namcab");
      if ($hapus && $hapuslatlong) {
        header("location:../setcab.php?hapus=y");
      } else {
        header("location:../setcab.php?hapus=x");
      }
      break;
    default:
      echo var_dump($_GET['mode']) . ' /=/ error di parameter
      <br>
      <a href="../setcab.php?errr">Kembali..</a>
      ';
      break;
  }
}
