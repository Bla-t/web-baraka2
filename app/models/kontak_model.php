<?php 
class kontak_model{
  private $tbl = 'kontak';
  private $db;
  public function __construct()
  {
    $this->db = new database;
  }


  public function givekontak()
  {
    $this->db->query("SELECT * FROM $this->tbl WHERE id = 1");
    return $this->db->satuan();
    // return $this->lat;
  }
  public function givesosmed()
  {
    $this->db->query("SELECT * FROM $this->tbl WHERE id = 2 ");
    return $this->db->satuan();
    // return $this->lat;
  }
}
