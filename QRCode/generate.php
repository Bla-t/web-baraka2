<?php
// phpinfo();
require_once "phpqrcode/qrlib.php";

$path = "resultQRCode/QrC";
$file = $path . uniqid() . ".png";

print('</br>
<form action="" method="GET">
<input type="text" value="" name="QRval" placeholder="masukan link">
<button type= "submit" > Buat</button></br></br>
');

if (isset($_GET['QRval'])) {
  if (!empty($_GET['QRval'])) {
    $text = $_GET['QRval'];
    QRcode::png($text, $file, 'L', 10, 2);

    print '<center style="margin:50px;background-color:black;"><img src=' . $file . ' width=40%></center><center><a href="' . $file . '" style="text-decoration:none; font-weight:bold; color:brown; font-size:2rem;" download >download</a></center>
    ';
  } else {
    print('');
  }
}
