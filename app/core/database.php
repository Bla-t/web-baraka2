<?php
class database
{

  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $db_name = DB_NAME;

  private $dbh;
  private $stmt;

  public function __construct()
  {
    // dsn =data source name
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

    $option = [
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    try {
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
  //gawe query
  public function query($query)
  {
    $this->stmt = $this->dbh->prepare($query);
  }

  public function bind($param, $value, $type = null)
  {
    if (is_null($type)) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;

          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;

          break;

        default:
          $type = PDO::PARAM_STR;
      }
    }
    $this->stmt->bindValue($param, $value, $type);
  }

  //executer
  public function mulai()
  {
    $this->stmt->execute();
  }

  #wrap isi data seluruh
  public function semua()
  {
    $this->mulai();
    return $this->stmt->fetchall(PDO::FETCH_ASSOC);
  }

  #wrap isi data satuan
  public function satuan()
  {
    $this->mulai();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }
  #cek berapa
  public function cekhitung()
  {
    $this->mulai();
    return $this->stmt->rowCount();
  }
  public function cekkolom()
  {
    $this->mulai();
    return $this->stmt->fetchColumn();
  }
}
