<?php
//if (isset($_POST['hitung'])) {

$berat = $_GET['brt'];
//$Lebar = $_GET['le'];
// $Panjang = $_GET['pa'];
if (!empty($_GET['vol'])) {
  $Tinggi = $_GET['vol'];
} else {
  $Tinggi = 0;
}
$tujuan = $_GET['tujuan'];
$dari = $_GET['dari'];
$from = $_GET['da'];
$to = $_GET['tuj'];


//API konekting
$url = 'http://api.pindah.barcode-bst.com/?dari=' . $dari . '&tujuan=' . $tujuan;
$isi = json_decode(file_get_contents($url), true);
$d = $isi['data'][0];
// var_dump($d['TUJUAN'] . '' . $d['DARI']);

// $data = mysqli_query($conn, "SELECT * FROM `tarif_baru`") or die(mysqli_error($conn));
// while ($d = mysqli_fetch_array($data)) {
if (isset($dari)) {

  if ($d['DARI'] == $dari && $d['TUJUAN'] == $tujuan) {
    switch ($d['ESTIMASI']) {
      case '-':
        echo '<h5 style="text-align:center" >Pengiriman dari <span class="font-weight-bold ">"' . $from . '"</span> ke <span class="font-weight-bold">"' . $to . '"</span> <br/> belum tersedia..</h5>';
        break;
      default:
        if ($berat > 0 && $berat < 3) {
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
				<td>' . $d['ESTIMASI'] . '</td>
				<td>' . $berat . 'Kg = ' . rupiah($d['MIN1-2'] + ($berat - $d['KONS1-2']) * $d['KG1-2']) . '</td>
				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
              </tr>
            </tbody>
          </table>');
        } elseif ($berat > 2 && $berat < 7) {
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
				<td>' . $d['ESTIMASI'] . '</td>
				<td>' . $berat . 'Kg = ' . rupiah($d['MIN3-6'] + ($berat - $d['KONS3-6']) * $d['KG3-6']) . '</td>
				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
              </tr>
            </tbody>
          </table>');
        } elseif ($berat > 6 && $berat < 11) {
          //echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
				<td>' . $d['ESTIMASI'] . '</td>
				<td>' . $berat . 'Kg = ' . rupiah($d['MIN7-10'] + ($berat - $d['KONS7-10']) * $d['KG7-10']) . '</td>
				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
              </tr>
            </tbody>
          </table>');
        } elseif ($berat > 10 && $berat < 21) {
          //echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
				<td>' . $d['ESTIMASI'] . '</td>
				<td>' . $berat . 'Kg = ' . rupiah($d['MIN11-20'] + ($berat - $d['KONS11-20']) * $d['KG11-20']) . '</td>
				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
              </tr>
            </tbody>
          </table>');
        } elseif ($berat > 20 && $berat < 26) {
          // echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
				<td>' . $d['ESTIMASI'] . '</td>
				<td>' . $berat . 'Kg = ' . rupiah($d['MIN21-25'] + ($berat - $d['KONS21-25']) * $d['KG21-25']) . '</td>
				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
              </tr>
            </tbody>
          </table>');
        } elseif ($berat > 25 && $berat < 51) {

          // echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
				<td>' . $d['ESTIMASI'] . '</td>
				<td>' . $berat . 'Kg = ' . rupiah($d['MIN26-50'] + ($berat - $d['KONS26-50']) * $d['KG26-50']) . '</td>
				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
              </tr>
            </tbody>
          </table>');
        } elseif ($berat > 50 && $berat < 101) {

          // echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
				<td>' . $d['ESTIMASI'] . '</td>
				<td>' . $berat . 'Kg = ' . rupiah($d['MIN51-100'] + ($berat - $d['KONS51-100']) * $d['KG51-100']) . '</td>
				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
              </tr>
            </tbody>
          </table>');
        } elseif ($berat > 100) {

          // echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
				<td>' . $d['ESTIMASI'] . '</td>
				<td>' . $berat . 'Kg = ' . rupiah($d['MIN>100'] + ($berat - $d['KONS>100']) * $d['KG>100']) . '</td>
				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
              </tr>
            </tbody>
          </table>');
        } elseif ($berat = 0 || empty($berat)) {

          // echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
				<td>' . $d['ESTIMASI'] . '</td>
				<td>' . '0 Kg = ' . rupiah(0) . '</td>
				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
              </tr>
            </tbody>
          </table>');
        }
        break;
    }
  }
  if ($tujuan == 'VIA') {
    if ($d['DARI'] == $dari && $d['TUJUAN'] == 'SURABAYA') {
      switch ($d['ESTIMASI']) {
        case '-':
          echo '<h5 style="text-align:center" >Pengiriman dari <span class="font-weight-bold ">"' . $from . '"</span> ke <span class="font-weight-bold">"' . $to . '"</span> <br/> belum tersedia..</h5>';
          break;
        default:
          if ($berat > 0 && $berat < 3) {
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
    				<td>' . $d['ESTIMASI'] . '</td>
    				<td>' . $berat . 'Kg = ' . rupiah($d['MIN1-2'] + ($berat - $d['KONS1-2']) * $d['KG1-2'] + 10000) . '</td>
    				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
                  </tr>
                </tbody>
              </table>');
          } elseif ($berat > 2 && $berat < 7) {
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
    				<td>' . $d['ESTIMASI'] . '</td>
    				<td>' . $berat . 'Kg = ' . rupiah($d['MIN3-6'] + ($berat - $d['KONS3-6']) * $d['KG3-6'] + 10000) . '</td>
    				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
                  </tr>
                </tbody>
              </table>');
          } elseif ($berat > 6 && $berat < 11) {
            //echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
    				<td>' . $d['ESTIMASI'] . '</td>
    				<td>' . $berat . 'Kg = ' . rupiah($d['MIN7-10'] + ($berat - $d['KONS7-10']) * $d['KG7-10'] + 10000) . '</td>
    				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
                  </tr>
                </tbody>
              </table>');
          } elseif ($berat > 10 && $berat < 21) {
            //echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
    				<td>' . $d['ESTIMASI'] . '</td>
    				<td>' . $berat . 'Kg = ' . rupiah($d['MIN11-20'] + ($berat - $d['KONS11-20']) * $d['KG11-20'] + 10000) . '</td>
    				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
                  </tr>
                </tbody>
              </table>');
          } elseif ($berat > 20 && $berat < 26) {
            // echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
    				<td>' . $d['ESTIMASI'] . '</td>
    				<td>' . $berat . 'Kg = ' . rupiah($d['MIN21-25'] + ($berat - $d['KONS21-25']) * $d['KG21-25'] + 10000) . '</td>
    				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
                  </tr>
                </tbody>
              </table>');
          } elseif ($berat > 25 && $berat < 51) {

            // echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
    				<td>' . $d['ESTIMASI'] . '</td>
    				<td>' . $berat . 'Kg = ' . rupiah($d['MIN26-50'] + ($berat - $d['KONS26-50']) * $d['KG26-50'] + 10000) . '</td>
    				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
                  </tr>
                </tbody>
              </table>');
          } elseif ($berat > 50 && $berat < 101) {

            // echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
    				<td>' . $d['ESTIMASI'] . '</td>
    				<td>' . $berat . 'Kg = ' . rupiah($d['MIN51-100'] + ($berat - $d['KONS51-100']) * $d['KG51-100'] + 10000) . '</td>
    				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
                  </tr>
                </tbody>
              </table>');
          } elseif ($berat > 100) {

            // echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
    				<td>' . $d['ESTIMASI'] . '</td>
    				<td>' . $berat . 'Kg = ' . rupiah($d['MIN>100'] + ($berat - $d['KONS>100']) * $d['KG>100'] + 10000) . '</td>
    				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI']) . '</td>
                  </tr>
                </tbody>
              </table>');
          } elseif ($berat = 0 || empty($berat)) {

            // echo ('Dari : ' . $from . '<br/>Tujuan : ' . $to);
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
    				<td>' . $d['ESTIMASI'] . '</td>
    				<td>' . '0 Kg = ' . rupiah(0) . '</td>
    				<td>' . $Tinggi . ' m³ = ' . rupiah($Tinggi  * $d['KUBIKASI'] + 10000) . '</td>
                  </tr>
                </tbody>
              </table>');
          }
          break;
      }
    }
  }
} else {
  echo '';
}
//}
function rupiah($angka)
{

  $bulat = substr($angka, -3);
  if ($bulat < 500) {
    $akhir = $angka - $bulat;
  } else {
    $akhir = $angka + (1000 - $bulat);
  }

  $hasil_rupiah = "Rp. " . number_format($akhir, 2, ',', '.');
  return $hasil_rupiah;
}
