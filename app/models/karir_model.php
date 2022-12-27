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
    $this->db->query("SELECT * FROM $this->tbl");
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
    if (!empty($_POST['byklass'])) {
      $tipe = $_POST['byklass'];
      $query = ("SELECT * FROM $this->tbl2 WHERE `kelas` LIKE :keyword AND `stat` = 'y'");
      $this->db->query($query);
      $this->db->bind('keyword', "%$tipe%");
      return $this->db->semua();
    } else {
      $this->db->query("SELECT * FROM $this->tbl2 WHERE `stat` = 'y'");
      return $this->db->semua();
    }
    // return $this->lat;
  }
  public function getjob($id)
  {
    $this->db->query("SELECT * FROM $this->tbl2 WHERE `id` = '$id'");
    return $this->db->satuan();
  }
}
