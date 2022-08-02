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
}
