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
      echo '<div class="alert alert-' . $_SESSION['PESAN']['tipe'] . ' alert-dismissible fade show" role="alert">
      <strong>Data' . $_SESSION['PESAN']['isi'] . '</strong>' . $_SESSION['PESAN']['pesan'] . '.!! 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
      unset($_SESSION['PESAN']);
    }
  }
}
