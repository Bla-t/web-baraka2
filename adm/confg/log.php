<?php
// error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include 'config.php';

// menghubungkan php dengan koneksi database

// menangkap data yang dikirim dari form login
$username = $_POST['user'];
$password = $_POST['pass'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn, "select * from web_user where username='$username' and password='$password'") or die(mysqli_error($conn));
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

  $data = mysqli_fetch_assoc($login);

  // buat session login dan username
  $_SESSION['ID'] = $data['id'];
  $_SESSION['username'] = $username;
  $_SESSION['pass'] = $data['password'];
  $_SESSION['nama'] = $data['nama'];
  $_SESSION['gamb'] = $data['gamb'];
  // alihkan ke halaman dashboard admin
  header("location:../home.php");
} else {
  header("location:../index.php?pesan=gagal");
}
