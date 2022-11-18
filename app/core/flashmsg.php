<?php
class flashmsg
{
  public static function mssg($isi, $metod, $tipe)
  {
    $_SESSION['PESAN'] = [
      'isi' => $isi,
      'pesan' => $metod,
      'tipe' => $tipe
    ];
  }

  public static function pesan()
  {
    if (isset($_SESSION['PESAN'])) {
      $flash = $_SESSION['PESAN'];
      echo '<div class="alert alert-' . $flash['tipe'] . ' alert-dismissible fade show" role="alert">
      <strong>Data' . $flash['isi'] . '</strong>' . $flash['pesan'] . '.!! 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';


      unset($_SESSION['PESAN']);
    }
  }
}
