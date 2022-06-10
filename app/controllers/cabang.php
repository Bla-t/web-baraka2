<?php
class cabang extends Controller
{
  /* private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $db_name = DB_NAME;
*/

  public function index()
  {
    $data['judul'] = 'BST | Cabang';
    $this->view('header', $data);
    $this->view('cabang/index');
    $this->view('footer');
  }
}
