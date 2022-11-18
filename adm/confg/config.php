<?php
// define('baseurl', 'http://localhost/web-baraka2/adm');
require_once 'flasher.php';
$conn = mysqli_connect('localhost', 'root', '', 'tes');

if (!$conn) {
  die($conn);
}
