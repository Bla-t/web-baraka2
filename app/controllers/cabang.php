<?php
class cabang extends Controller
{

  public function index()
  {
    $data['judul'] = 'BST | Cabang';
    $this->view('header', $data);
    $this->view('cabang/index');
    $this->view('footer');
  }
}
