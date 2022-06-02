<?php
class karir extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | Lowongan Pekerjaan';
    $this->view('header', $data);
    $this->view('karir/index');
    $this->view('footer');
  }
}
