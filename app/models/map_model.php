<?php
class map_model
{
  private $tbl = 'latlong';
  private $db;
  public function __construct()
  {
    $this->db = new database;
  }


  public function getlatlong()
  {
    $this->db->query('SELECT * FROM ' . $this->tbl);
    return $this->db->semua();
    // return $this->lat;
  }
}
