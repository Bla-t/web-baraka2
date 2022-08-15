<?php
class kontak extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | KONTAK';
    $this->view('header', $data);
    $this->view('kontak/index');
    $this->view('footer');
  }
}
