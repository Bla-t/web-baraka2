<?php
class karir_model
{
  private $tbl = 'job_desk_class';
  private $tbl2 = 'job_desk';
  private $db;
  public function __construct()
  {
    $this->db = new database;
  }


  public function getkarir()
  {
    $this->db->query("SELECT * FROM $this->tbl WHERE `stat` = 'y'");
    return $this->db->semua();
  }
  public function getjumlahkarir()
  {
    $this->db->query("SELECT * FROM $this->tbl2 ");
    return $this->db->semua();
    // return $this->lat;
  }
  public function spesifickarir()
  {
    $tipe = $_POST['byklass'];
    $query = ("SELECT * FROM job_desk WHERE kelas LIKE :keyword");
    $this->db->query($query);
    $this->db->bind('keyword', "%$tipe%");
    return $this->db->semua();
    // return $this->lat;
  }
}
