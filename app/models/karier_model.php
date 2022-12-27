<?php
class karier_model
{
  // private $tbl = 'job_desk_class';
  private $tbl2 = 'job_desk';
  private $db;
  public function __construct()
  {
    $this->db = new database;
  }

  public function getjob()
  {
    $this->db->query("SELECT * FROM $this->tbl2 WHERE `id` = '1'");
    return $this->db->satuan();
  }
  public function getjumlahkarir()
  {
    $this->db->query("SELECT * FROM $this->tbl2 ");
    return $this->db->satuan();
    // return $this->lat;
  }
  public function spesifickarir()
  {
    if (!empty($_POST['byklass'])) {
      $tipe = $_POST['byklass'];
      $query = ("SELECT * FROM $this->tbl2 WHERE `kelas` LIKE :keyword");
      $this->db->query($query);
      $this->db->bind('keyword', "%$tipe%");
      return $this->db->semua();
    } else {
      $this->db->query("SELECT * FROM $this->tbl2 ");
      return $this->db->semua();
    }
    // return $this->lat;
  }
}
