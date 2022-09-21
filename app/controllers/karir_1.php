<?php
class karir_1 extends Controller
{
  public function index()
  {
    $data['judul'] = 'BST | Karir';
    $data['cabang'] = 'cabang';
    $data['kepala'] = '';
    $data['kepala2'] = '';
    $data['footer'] = '';
    $this->view('header', $data);
    $this->view('karir_1/index');
    $this->view('footer', $data);
  }
}
