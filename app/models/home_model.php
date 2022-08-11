<?php
class home_model
{
  private $tbl = 'slider';
  private $db;
  public function __construct()
  {
    $this->db = new database;
  }


  public function slider()
  {
    $this->db->query('SELECT * FROM ' . $this->tbl);
    return $this->db->semua();
    // return $this->lat;
  }
  public function jumlah()
  {

    $this->db->query('SELECT * FROM ' . $this->tbl);
    return $this->db->cekhitung();
  }
  /*public function cekcount($data)
  {
    $this->db->query("SELECT * FROM" . $this->tbl . "WHERE `alamat` like '%" . $data . "%' OR nama_cabang LIKE '%$this->data2%'");
    return $this->db->cekhitung();
  }*/
}
