<?php
class tentang extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | Tentang Kami';
    $this->view('header', $data);
    $this->view('tentang/index');
    $this->view('footer');
  }
}
