<?php
class tentang extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | Tentang Kami';
    $data['kepala'] = '';
    $data['kepala2'] = '';
    $this->view('header', $data);
    $this->view('tentang/index');
    $this->view('footer');
  }
}
