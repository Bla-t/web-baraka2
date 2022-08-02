<?php
class flashmsg
{
  public static function mssg($isi, $metod, $tipe)
  {
    $_SESSION['PESAN'] = [
      'isi' => $isi,
      'aksi' => $metod,
      'tipe' => $tipe
    ];
  }

  public function pesan()
  {
    if (isset($_SESSION['PESAN'])) {

      echo 'lorem ipsum dolor';


      unset($_SESSION['PESAN']);
    }
  }
}
