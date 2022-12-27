<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
// if (isset($_POST['hitung'])) {
function rupiah($angka)
{

  $bulat = substr($angka, -3);
  if ($bulat < 500) {
    $akhir = $angka - $bulat;
  } else {
    $akhir = $angka + 1000;
  }

  $hasil_rupiah = "Rp. " . number_format($akhir, 2, ',', '.');
  return $hasil_rupiah;
}

// mulai hitung .!!
if (empty($_POST['brt'])) {
  $berat = 0;
} else {
  $berat = $_POST['brt'];
}
if (empty($_POST['le'])) {
  $lbr = 0;
} else {
  $lbr = $_POST['le'];
}
if (empty($_POST['pa'])) {
  $pjg = 0;
} else {
  $pjg = $_POST['pa'];
}
if (empty($_POST['ti'])) {
  $Tinggi = 0;
} else {
  $Tinggi = $_POST['ti'];
}
$tujuan = $_POST['tujuan'];
$dari = $_POST['prom'];
$from = $_POST['da'];
$to = $_POST['tuj'];


//hitung kubikasi dulu ......
$kubik = ($Tinggi * $lbr * $pjg) / 1000000;


// rumus dasar//
// echo var_dump($lbr + $pjg + $Tinggi + $berat."->".$tujuan."->".$dari."->".$from."->".$to);
// }

//var_dump($dari.' | '.$tujuan.''.$from .''.$to);

$data = mysqli_query($conn, "SELECT * FROM `tarif2022`") or die(mysqli_error($conn));
while ($d = mysqli_fetch_array($data)) {
  if ($dari != 'MTB') {
    if ($d_harga['dari'] == $dari && $d_harga['tujuan'] == $tujuan) {
      switch ($d_harga['estimasi']) {
        case '-':
          echo '<h5 style="text-align:center" >Pengiriman dari <span class="font-weight-bold ">"' . $from . '"</span> ke <span class="font-weight-bold">"' . $to . '"</span> <br/> belum tersedia..</h5>';
          break;
        default:
          if ($berat > 0 && $berat < 11) {
            $tarifs = rupiah($d_harga['min1-10'] + ($berat - $d_harga['kons1-10']) * $d_harga['kg1-10']);
            $tarif_kubik = rupiah($kubik * $d_harga['kubikasi']);
          } elseif ($berat > 10 && $berat < 21) {
            $tarifs = rupiah($d_harga['min11-20'] + ($berat - $d_harga['kons11-20']) * $d_harga['kg11-20']);
            $tarif_kubik =  rupiah($kubik * $d_harga['kubikasi']);
          } elseif ($berat > 20 && $berat < 101) {
            $tarifs = rupiah($d_harga['MIN7-10'] + ($berat - $d_harga['KONS7-10']) * $d_harga['KG7-10']);
            $tarif_kubik = rupiah($kubik * $d_harga['kubikasi']);
          } elseif ($berat > 100) {
            $tarifs = rupiah($d_harga['MIN>100'] + ($berat - $d_harga['KONS>100']) * $d_harga['KG>100']);
            $tarif_kubik = rupiah(($Tinggi * $lbr * $pjg / 1000000) * $d_harga['kubikasi']);
          } elseif ($berat == 0) {
            $tarifs = rupiah(0);
            $tarif_kubik = rupiah($kubik * $d_harga['kubikasi']);
          }
          echo ('<table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>Dari</th>
                <th>Tujuan</th>
                <th>Estimasi</th>
                <th>Harga Kilogram</th>
                <th>Harga Kubikasi</th>
              </tr>
            </thead>
            <tbody class="font-weight-bold">
              <tr>
               <td>' . $from . '</td>
               <td>' . $to . '</td>
               <td>' . $d_harga['estimasi'] . '</td>
               <td>' . $berat . ' Kg = ' . $tarifs . '</td>
               <td>' . $kubik . ' m³ = ' . $tarif_kubik . '</td>
              </tr>
            </tbody>
          </table>');
          break;
      }
    }
  }
  if ($tujuan == 'VIA') {
    if ($d_harga['dari'] == $dari && $d_harga['tujuan'] == 'SBY') {
      switch ($d_harga['estimasi']) {
        case '-':
          echo '<h5 style="text-align:center" >Pengiriman dari <span class="font-weight-bold ">"' . $from . '"</span> ke <span class="font-weight-bold">"' . $to . '"</span> <br/> belum tersedia..</h5>';
          break;
        default:
          if ($berat > 0 && $berat < 11) {
            $tarifs = rupiah($d_harga['min1-10'] + ($berat - $d_harga['kons1-10']) * $d_harga['kg1-10'] + 10000);
            if ($kubik == 0) {
              $tarif_kubik = rupiah(0);
            } else {
              $tarif_kubik =  rupiah($kubik * $d_harga['kubikasi'] + 10000);
            }
          } elseif ($berat > 10 && $berat < 21) {
            $tarifs =  rupiah($d_harga['min11-20'] + ($berat - $d_harga['kons11-20']) * $d_harga['kg11-20'] + 10000);
            if ($kubik == 0) {
              $tarif_kubik = rupiah(0);
            } else {
              $tarif_kubik =  rupiah($kubik * $d_harga['kubikasi'] + 10000);
            }
          } elseif ($berat > 20 && $berat < 101) {
            $tarifs = rupiah($d_harga['min21-100'] + ($berat - $d_harga['kons21-100']) * $d_harga['kg21-100'] + 10000);
            if ($kubik == 0) {
              $tarif_kubik = rupiah(0);
            } else {
              $tarif_kubik =  rupiah($kubik * $d_harga['kubikasi'] + 10000);
            }
          } elseif ($berat > 100) {
            $tarifs = rupiah($d_harga['min101'] + ($berat - $d_harga['kons101']) * $d_harga['kg101'] + 10000);
            if ($kubik == 0) {
              $tarif_kubik = rupiah(0);
            } else {
              $tarif_kubik =  rupiah($kubik * $d_harga['kubikasi'] + 10000);
            }
          } elseif ($berat == 0) {
            $tarifs =  rupiah(0);
            if ($kubik == 0) {
              $tarif_kubik = rupiah(0);
            } else {
              $tarif_kubik =  rupiah($kubik * $d_harga['kubikasi'] + 10000);
            }
          }
          echo ('<table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>Dari</th>
                <th>Tujuan</th>
                <th>Estimasi</th>
                <th>Harga Kilogram</th>
                <th>Harga Kubikasi</th>
              </tr>
            </thead>
            <tbody class="font-weight-bold">
              <tr>
               <td>' . $from . '</td>
               <td>' . $to . '</td>
               <td>' . $d_harga['estimasi'] . '</td>
               <td>' . $berat . ' Kg = ' . $tarifs . '</td>
               <td>' . $kubik . ' m³ = ' . $tarif_kubik . '</td>
              </tr>
            </tbody>
          </table>');
          break;
      }
    }
  }
  if ($dari == 'MTB') {
    if ($to == 'SOLO') {
      $dari = 'MTB';
      $tujuan = 'SOLO';
    } else if ($to == 'SEMARANG') {
      $dari = 'MTB';
      $tujuan = 'SMG';
    } else if ($to == 'KUDUS') {
      $dari = 'MTB';
      $tujuan = 'KDS';
    } else {
      $dari = 'TNB';
      $tujuan = $_POST['tujuan'];
    }
    if ($d_harga['dari'] == $dari && $d_harga['tujuan'] == $tujuan) {
      switch ($d_harga['estimasi']) {
        case '-':
          echo '<h5 style="text-align:center" >Pengiriman dari <span class="font-weight-bold ">"' . $from . '"</span> ke <span class="font-weight-bold">"' . $to . '"</span> <br/> belum tersedia..</h5>';
          break;
        default:
          if ($berat > 0 && $berat < 11) {
            $tarifs = rupiah($d_harga['min1-10'] + ($berat - $d_harga['kons1-10']) * $d_harga['kg1-10']);
            $tarif_kubik =  rupiah($kubik * $d_harga['kubikasi']);
          } elseif ($berat > 10 && $berat < 21) {
            $tarifs = rupiah($d_harga['min11-20'] + ($berat - $d_harga['kons11-20']) * $d_harga['kg11-20']);
            $tarif_kubik =  rupiah($kubik * $d_harga['kubikasi']);
          } elseif ($berat > 20 && $berat < 101) {
            $tarifs = rupiah($d_harga['min21-100'] + ($berat - $d_harga['kons21-100']) * $d_harga['kg21-100']);
            $tarif_kubik = rupiah($kubik  * $d_harga['kubikasi']);
          } elseif ($berat > 100) {
            $tarifs = rupiah($d_harga['min101'] + ($berat - $d_harga['kons101']) * $d_harga['kg101']);
            $tarif_kubik = rupiah($kubik * $d_harga['kubikasi']);
          } elseif ($berat == 0) {
            $tarif = rupiah(0);
            $tarif_kubik = rupiah($kubik * $d_harga['kubikasi']);
          }
          echo ('<table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>Dari</th>
                <th>Tujuan</th>
                <th>Estimasi</th>
                <th>Harga Kilogram</th>
                <th>Harga Kubikasi</th>
              </tr>
            </thead>
            <tbody class="font-weight-bold">
              <tr>
               <td>' . $from . '</td>
               <td>' . $to . '</td>
               <td>' . $d_harga['estimasi'] . '</td>
               <td>' . $berat . ' Kg = ' . $tarifs . '</td>
               <td>' . $kubik . ' m³ = ' . $tarif_kubik . '</td>
              </tr>
            </tbody>
          </table>');
          break;
      }
    }
  }
}
// }
