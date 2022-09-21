<?php
class kontak extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | KONTAK';
    $data['kepala'] = '';
    $data['kepala2'] = '';
    $data['footer'] = '<script src="' . BASEURL . '/app/js/nav.js"></script>';
    $this->view('header', $data);
    $this->view('kontak/index');
    $this->view('footer', $data);
  }
}
