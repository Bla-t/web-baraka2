<?php
class tentang extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | Tentang Kami';
    $data['kepala'] = '';
    $data['kepala2'] = '';
    $data['footer'] = '<script src="' . BASEURL . '/app/js/nav.js"></script>';
    $this->view('header', $data);
    $this->view('tentang/index');
    $this->view('footer', $data);
  }
}
